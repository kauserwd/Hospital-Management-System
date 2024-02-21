@include('admin.inc.header')

      <!-- partial:partials/_sidebar.html -->

@include('admin.inc.sidebar')
     <
      <!-- partial -->
@include('admin.inc.navbar')
        <!-- partial -->

    <!-- content-wrapper start -->
    <div class="main-panel background:white;">

        <div class="content-wrapper">
        <h1>Add Doctor</h1>
            <div class="container-fluid page-body-wrapper"> 
                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- <div class="row mt-5 "> -->
                        <div  class="col-12 py-3">
                            <label for="">Doctor Name</label>
                            <input style="color:black" type="text" name="name" class="form-control" placeholder="Write Doctor name..">
                        </div>
                        <div class="col-12 py-3">
                            <label for="">Doctor Phone Number</label>
                            <input style="color:black" type="number" name="phone" class="form-control" placeholder="Write Doctor number..">
                        </div>
                        <div class="col-12 py-3">
                        <label for="">Doctor Speciality</label>
                            <select style="color:black"name="speciality">
                                <option value="skin">Skin</option>
                                <option value="heart">Heart</option>
                                <option value="eye">Eye</option>
                                <option value="nose">Nose</option>
                            </select>
                        </div>
                        <div class="col-12 py-3">
                            <label for="">Doctor Room Number</label>
                            <input style="color:black" type="text" name="room" class="form-control" placeholder="Write Doctor Room number..">
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