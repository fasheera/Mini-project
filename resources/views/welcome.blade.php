@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header "><span class="text-primary align:center"><h3><b>Choose your Time & Date</b></h3></span></div>

                    <div class="card-body">
                      <form method="POST" action="/welcome/form">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="datetime">Date and StartTime:</label>
                          <input type="datetime-local" id="datetime" name="datetime" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="Endtime">EndTime </label>
                            <input id="Endtime" type="time" name="Endtime"  class="form-control"> 
                            </div>
                        <button type="submit" class="btn btn-primary ">Submit</button>  
                      </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection