@include('admin.inc.header')


      <!-- partial:partials/_sidebar.html -->

@include('admin.inc.sidebar')
      <!-- partial -->
@include('admin.inc.navbar')
        <!-- partial -->


    <!-- content-wrapper start -->
    <div class="main-panel background:white;">

        <div class="content-wrapper">
        <h1>Write Email Here:</h1>
        @if(session()->has('message'))
        <div class="laert alert-success">
            <button type="button" class="close" data-dismiss="alert" ></button>
        {{session()->get('message')}}
        </div> 
        @endif
            <div class="container-fluid page-body-wrapper"> 
            <form action="{{url('sendEmail',$data->id)}}" method="POST">
                    @csrf
                    <!-- <div class="row mt-5 "> -->
                        <div  class="col-12 py-3">
                            <label for="">Greeting</label>
                            <input style="color:black" type="text" name="greeting" class="form-control" >
                        </div>
                        <div class="col-12 py-3">
                            <label for="">Mail Body</label>
                            <input style="color:black" type="text" name="body" class="form-control" >
                        </div>
                       
                        <div class="col-12 py-3">
                            <label for="">Action Text</label>
                            <input style="color:black" type="text" name="actiontext" class="form-control" >
                        </div>
                        <div class="col-12 py-3">
                            <label for="">Action Url</label>
                            <input style="color:black" type="text" name="actionurl" class="form-control" >
                        </div>
                        <div class="col-12 py-3">
                            <label for="">Enx Part</label>
                            <input style="color:black" type="text" name="endpart" class="form-control" >
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