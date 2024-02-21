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
                class="font-weight-bold">Show your Appointment List: </h1>
                <table class="table table-striped" style="margin-left:10px;" >
                    <thead >
                        <tr>
                        <th scope="col" style="color:white; fort-size:10px" class="font-weight-bold">#</th>
                        <th scope="col" style="color:white; fort-size:10px" class="font-weight-bold">Customer Name</th>
                        <th scope="col" style="color:white; fort-size:10px" class="font-weight-bold">Email</th>
                        <th scope="col" style="color:white; fort-size:10px" class="font-weight-bold">Phone</th>
                        <th scope="col" style="color:white; fort-size:10px" class="font-weight-bold">Doctor Name</th>
                        <th scope="col" style="color:white; fort-size:10px" class="font-weight-bold">Date</th>
                        <th scope="col" style="color:white; fort-size:10px" class="font-weight-bold">Message</th>
                        <th scope="col" style="color:white; fort-size:10px" class="font-weight-bold">Status</th>
                        <th scope="col" style="color:white; fort-size:10px" class="font-weight-bold">Approve</th>
                        <th scope="col" style="color:white; fort-size:10px" class="font-weight-bold">Cancel</th>
                        <th scope="col" style="color:white; fort-size:10px" class="font-weight-bold">Send Mail</th>
                        
                        </tr>
                    </thead>
                    
                    <tbody>
                    @foreach($data as $appoints)
                        <tr>
                        <th style="color:white;" scope="row">{{$appoints->id}}</th>
                        <td style="color:white;">{{$appoints->name}}</td>
                        <td style="color:white;">{{$appoints->email}}</td>
                        <td style="color:white;">{{$appoints->phone}}</td>
                        <td style="color:white;">{{$appoints->doctor}}</td>
                        <td style="color:white;">{{$appoints->date}}</td>
                        <td style="color:white;">{{$appoints->massage}}</td>
                        <td style="color:white;">{{$appoints->status}}</td>
                        <td><a class="btn btn-success" onclick = "return confirm ('Are you sure to approve this!')"
                         href="{{url('approved',$appoints->id)}}">Approve</a></td>
                        <td><a class="btn btn-danger" onclick = "return confirm ('Are you sure to delete this!')" 
                         href="{{url('canceled',$appoints->id)}}">Cancel</a></td>
                         <td><a class="btn btn-primary"  
                         href="{{url('emailView',$appoints->id)}}">Send Mail</a></td>
                        </tr>
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
    
    
