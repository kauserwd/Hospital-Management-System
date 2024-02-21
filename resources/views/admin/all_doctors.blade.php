@include('admin.inc.header')
      <!-- partial:partials/_sidebar.html -->

@include('admin.inc.sidebar')
     
      <!-- partial -->
@include('admin.inc.navbar')
        <!-- partial -->

    <!-- content-wrapper start -->
    <div class="main-panel background:white;">
    <div class="content-wrapper">

    <div class="container">
    <div class="row">
    <h1 style="paddin:10px; font-size: 20px; margin-top:30px; color:white; margin-bottom:20px "
    class="font-weight-bold">All Doctors List: </h1>
    <table class="table table-striped" style="margin-left:20px;" >
        <thead >
            <tr>
            <th scope="col" style="color:white; fort-size:15px" class="font-weight-bold">#</th>
            <th scope="col" style="color:white; fort-size:15px" class="font-weight-bold">Doctor Name</th>
            <th scope="col" style="color:white; fort-size:15px" class="font-weight-bold">Phone</th>
            <th scope="col" style="color:white; fort-size:15px" class="font-weight-bold">Speciality</th>
            <th scope="col" style="color:white; fort-size:15px" class="font-weight-bold">Room Number</th>
            <th scope="col" style="color:white; fort-size:15px" class="font-weight-bold">image</th>
            <th scope="col" style="color:white; fort-size:15px" class="font-weight-bold">Update</th>
            <th scope="col" style="color:white; fort-size:15px" class="font-weight-bold">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $doctor)
                <tr>
                <th style="color:white;" scope="row">{{$doctor->id}}</th>
                <td style="color:white;">{{$doctor->name}}</td>
                <td style="color:white;">{{$doctor->phone}}</td>
                <td style="color:white;">{{$doctor->speciality}}</td>
                <td style="color:white;">{{$doctor->room}}</td>
                <td><img height="300" width="300" src="doctorimage/{{$doctor->image}}" alt=""></td>
                <td><a class="btn btn-success" href="{{url('updateDoctor',$doctor->id )}}">Edit</a></td>
                <td><a class="btn btn-danger" onclick = "return confirm ('Are you sure to delete this!')"
                 href="{{url('delteDoctor',$doctor->id )}}">Delete</a></td>
                 
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>
<!-- content-wrapper start -->

     <!-- content-wrapper start -->
     @include('admin.inc.footer')
     <!-- content-wrapper start -->
</div>
  
</div>
    
    
  