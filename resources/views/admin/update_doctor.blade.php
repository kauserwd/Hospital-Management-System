@include('admin.inc.header')


      <!-- partial:partials/_sidebar.html -->

@include('admin.inc.sidebar')
      <!-- partial -->
@include('admin.inc.navbar')
        <!-- partial -->


    <!-- content-wrapper start -->
    <div class="main-panel background:white;">

        <div class="content-wrapper">
        <h1>Update Doctor list:</h1>
        @if(session()->has('message'))
        <div class="laert alert-success">
            <button type="button" class="close" data-dismiss="alert" ></button>
        {{session()->get('message')}}
        </div>
        @endif
            <div class="container-fluid page-body-wrapper"> 
                <form action="{{url('editDoctor',$datas->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- <div class="row mt-5 "> -->
                        <div  class="col-12 py-3">
                            <label for="">Doctor Name</label>
                            <input style="color:black" type="text" value="{{$datas->name}}"
                            name="name" class="form-control">
                        </div>
                        <div class="col-12 py-3">
                            <label for="">Doctor Phone Number</label>
                            <input style="color:black" type="number" value="{{$datas->phone}}"
                            name="phone" class="form-control" >
                        </div>
                        <div class="col-12 py-3">
                        <label for="">Doctor Speciality</label> 
                            <input style="color:black" type="text" value="{{$datas->speciality}}"
                            name="speciality" class="form-control">
                        </div>
                        <div class="col-12 py-3">
                            <label for="">Doctor Room Number</label>
                            <input style="color:black" type="text" value="{{$datas->room}}"
                            name="room" class="form-control">
                        </div>
                        <div style="color:black" class="col-12 py-3">
                        <label for="">Old Image</label>
                        <img height="50" width="50" src="doctorimage/{{$datas->image}}" alt="">
                        </div>
                        <div style="color:black" class="col-12 py-3">
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-success">
                        </div>
                    <!-- </div> -->
                </form>
            </div>
        </div>
    
    
    <!-- content-wrapper start -->

     <!-- content-wrapper start -->
@include('admin.inc.footer')
     <!-- content-wrapper start -->