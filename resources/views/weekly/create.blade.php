@extends('layouts.app')

@section('content')

@if ($user->role==1)
<button id="myButton1" onclick="window.location.href='/home'"
class="btn btn-info" type="button" name="button"> Back </button>
@else
<button id="myButton1" onclick="window.location.href='/weekly'"
class="btn btn-info" type="button" name="button"> Back </button>
@endIf

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Weekly Report</div>

                <div class = "panel-body">
                <form class = "" method = "POST" action = "{{route('weekly.store')}}">


                  <p>Date </p>
                  <input style="width:180px" type="date" class = "form-control" name="title"  required><br>

                    <!-- <input type= "text" class = "form-control" name="UserQId" placeholder="UserQId"><br> -->
                  <p>Work Detail </p>
                  <textarea rows="10" name = "discription" class = "form-control"  required></textarea><br>

                  <input id="status" name="status" type="hidden" class="form-control" name="role" value="1" required autofocus>

                  <p>Mentor </p>

                  {{-- <input type= "text" class = "form-control" name="mentorid" required><br> --}}

                  <select class="selectpicker" name="mentorid" id="menterid">
                      @foreach ($users as $u)
                        @if($u->mentorid!=1 && $u->mentorid!=99)
                        <option value="{{$u->mentorid}}">{{$u->name}}, {{$u->mentorid}}</option>
                        @endif
                      @endforeach
                    </select><br /><br />

                {{--  <input type="text" name="mentorid" list="colors" autocomplete="off" required>
                  <datalist id="colors">
                    @foreach ($users as $u)
                      @if($u->mentorid!=1 && $u->mentorid!=99)
                      <option value="{{$u->mentorid}}">{{$u->name}}, {{$u->mentorid}}</option>
                      @endif
                    @endforeach
                  </datalist> --}}

                  <p>Remark </p>
                  <input type= "text" class = "form-control" name="Qcoin"  required><br>

                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>


@endsection

<style>

.aaaa{
  width: 10px;
}

#myButton{
  float: right;
  margin-right: 50px;
  margin-bottom: 10px;
}
#myButton1{
  float: right;
  margin-right: 80px;
  margin-bottom: 10px;
}
</style>
