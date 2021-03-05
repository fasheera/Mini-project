@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div >
           <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-book-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.261 13.666c.345.14.739-.105.739-.477V2.5a.472.472 0 0 0-.277-.437c-1.126-.503-5.42-2.19-7.723.129C5.696-.125 1.403 1.56.277 2.063A.472.472 0 0 0 0 2.502V13.19c0 .372.394.618.739.477C2.738 12.852 6.125 12.113 8 14c1.875-1.887 5.262-1.148 7.261-.334z"/>
</svg>
            <p class="h1" ><span class="text-primary">My Booking <span></p>
            

            </div>
<table class="table table-hover table-striped">
  <thead>
  <tr class="bg-primary">
      
      <th scope="col">Slot Number</th>
      <th scope="col">User Name</th>
      <th scope="col"> Date</th>
      <th scope="col">Start Time</th>
      <th scope="col">End Time</th>
      <th scope="col">Status</th>
      <th scope="col">Update By</th>
      <th scope="col">Created time</th>
      <th scope="col">Canceled time</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($Mybooking as $My )
    <tr>
      <th scope="row">{{$My->slot_no}}</th>
      <td>{{$My->name}}</td>
      <td>{{$My->date}}</td>
      <td>{{$My->time}}</td>
      <td>{{$My->endtime}}</td>
      <td>{{$My->status}}</td>
      <td>{{$My->updated_by}}</td>
      <td>{{$My->created_at}}</td>
      <td>{{$My->updated_at}}</td>
      <!-- <td>
      
        <?php 
          if($My->status == "cancled"){
              echo "it canceled";
          }
          else{
        ?>
       <form method="post" action="/mybooking">
          {{csrf_field()}}
          <div class="form-group">
            <input type="hidden" id="BookingID" name="BookingID" value="{{$My->id}}">
          </div>
          <button type="submit" class="btn btn-primary ">Booking Cancel</button>  
        </form>
        <?php } ?> -->
        <!-- <a href='home'><button type="submit" class="btn btn-primary ">Booking Cancel</button></a></td> -->
    </tr>
    @endforeach
    
  </tbody>
</table>


</div>
</div>
</div>
@endsection