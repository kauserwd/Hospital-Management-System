@include('user.inc.header')
@include('user.inc.navbar')

<div class="container">
    <div class="row">
    <h1 style="paddin:10px; font-size: 20px; margin-top:30px; margin-bottom:20px "
    class="font-weight-bold">Show your Appointment List: </h1>
    <table class="table table-striped" >
        <thead>
            <tr>
            <th scope="col" class="font-weight-bold">#</th>
            <th scope="col" class="font-weight-bold">Doctor Name</th>
            <th scope="col" class="font-weight-bold">Date</th>
            <th scope="col" class="font-weight-bold">Message</th>
            <th scope="col" class="font-weight-bold">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appoint as $appoints)
            <tr>
            <th scope="row">{{$appoints->id}}</th>
            <td>{{$appoints->doctor}}</td>
            <td>{{$appoints->date}}</td>
            <td>{{$appoints->massage}}</td>
            <td>{{$appoints->status}}</td>
            <td><a class="btn btn-danger" onclick = "return confirm ('Are you sure to delete this!')" href="{{url('cancel_appointment',$appoints->id)}}">Cancel</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>


@include('user.inc.script')