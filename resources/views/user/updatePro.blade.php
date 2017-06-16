@extends('layouts.app')

@section('content')

<button id="myButton1" onclick="window.location.href='/welcome'"
class="btn btn-info tttt" type="button" name="button"> Back </button>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary panelall">
                <div class="panel-heading panelheader">Update Information</div>

                <div class = "panel-body">
                <form class = "" method = "get" action = "{{URL('users/'.$user->id.'/update')}}">
                  <input name="_method" type="hidden" value="PATCH">

                  <p>Student No. </p>
                  <input type= "number" class = "form-control" name="sid" value = "{{$user->sid}}" required><br>

                   <p>Departmant </p>
                  <input type= "text" class = "form-control" name="department" value = "{{$user->department}}" required><br>

                   <p>Faculty </p>
                  <input type= "text" class = "form-control" name="fac" value = "{{$user->fac}}" required><br>

                  <p>Intern Start </p>
                    <input type= "date" class = "form-control" name="start" value = "{{$user->start}}" required><br>

                  <p>Intern End </p>
                    <input type= "date" class = "form-control" name="end" value = "{{$user->end}}" required><br>


                <button style="float: right" type="submit" class="btn btn-primary">Update</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                </form>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
<style media="screen">

.panelheader{
  background-color: #3C4254!important;
  color: white!important;
}
.panelall{
  margin-top: 7rem!important;
}

</style>
