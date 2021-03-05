@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header "><span class="text-primary align:center"><h3><b>Choose your Time & Date</b></h3></span></div>

                    <div class="card-body">
                      <form method="post" action="/date/form">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="datetime">Date and StartTime:</label>
                          <input type="datetime-local" id="datetime" name="datetime" class="date form-control" >
                        </div>
                        <div class="form-group">
                            <label for="Endtime">EndTime </label>
                            <input  type="time" id="endtime" name="endtime"  class="form-control">
                            </div>
                        <button type="submit" class="btn btn-primary ">Submit</button> 

                        <script type="text/javascript">
                          $(function () {
                                $('#datetimepicker').datetimepicker({  
                                    minDate:new Date()
                                  });
                            });
                          </script>
                      </form>

                    </div>

                    
                  </script>
                </div>
            </div>
        </div>
    </div>

@endsection