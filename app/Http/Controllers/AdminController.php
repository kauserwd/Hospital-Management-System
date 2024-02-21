<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Notification;
use App\Notifications\SendEmailNotifcation;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /* View doctor */
    public function addView(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                return view('admin.add_doctor');
            }else{
                return redirect()->back(); 
            }
        }else{
            return redirect('login');
        }
    }

    /* Add doctor */
    public function uploaddoctor(Request $request){
        $doctor= new doctor;

        $image= $request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image= $imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
        $doctor->save();

        return redirect()->back();

    }

    /* sho appoinment doctor */
    public function showAppointment(){ 
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $data = appointment::all();
                return view('admin.show_appointment',compact('data'));
            }else{
                return redirect()->back(); 
            }
        }else{
            return redirect('login');
        }
        
    }

    /* approve doctor appoinment  */
    public function approve($id){
        $data = appointment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }

    /* cancel doctor appoinment  */
    public function cancel($id){
        $data = appointment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();
    }

    /* All doctor list show in admin pannel  */
    public function all_doctors(){
        $data = doctor::all();
        return view('admin.all_doctors',compact('data'));
    }

    /* Delete doctor from all  doctor list  */
    public function delteDoctor($id){
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
 /* Sho doctor from all  doctor list in input text field   */
    public function updateDoctor($id){
        $datas = doctor::find($id);
        return view('admin.update_doctor',compact('datas'));
    }
    public function editDoctor(Request $request, $id){
        $doctor = doctor::find($id);
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;

        $image = $request-> file;
        if($image){
            
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('doctorimage', $imagename);
            $doctor->image=$imagename;
        }

        $doctor->save();
        /* return redirect ('/showDoctor'); */
        return redirect()->back()->with('message','Doctor details Update Successfully!');

        

    }

    public function emailView($id){
        $data = appointment::find($id);
        return view('admin.email_view',compact('data'));
    }
    public function sendEmail(Request $request, $id){
        $data = appointment::find($id);
        $details=[
            'greeting'=> $request->greeting,
            'body'=> $request->body,
            'actiontext'=> $request->actiontext,
            'actionurl'=> $request->actionurl,
            'endpart'=> $request->endpart
        ];

        Notification::send($data, new SendEmailNotifcation($details));
        return redirect()->back()->with('message','Notification Sent Successfully!');
    }
        
}
