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


                  <p>Week</p>
                        <!-- <input style="width:150px" type= "text" class = "form-control" name="mentorid" value = "{{$user->mentorid}}" required><p id="PP"> ***Default user is 1</p><br> -->
                        <select class="selectpicker" name="week" id="week">
                            @for ($i = 1; $i <= $user->week; $i++)
                                <option value="{{ $i }}">Week {{ $i }}</option>
                            @endfor
                          </select><br /><br />

                  <p>Date </p>
                  <input style="width:180px" type="date" data-date-format="DD MMMM YYYY" class = "form-control" name="title"  required><br>

                    <!-- <input type= "text" class = "form-control" name="UserQId" placeholder="UserQId"><br> -->
                  <p>Work Detail </p>
                  <textarea rows="10" name = "discription" class = "form-control"  required></textarea><br>

                  <input id="status" name="status" type="hidden" class="form-control" name="role" value="1" required autofocus>

                  <!-- <p>Mentor </p> -->
                  <input name="mentorid" type="hidden" class="form-control" name="role" value="{{$user->mentorid}}" required autofocus>
                  

                {{--  <select class="selectpicker" name="mentorid" id="menterid">
                      @foreach ($users as $u)
                        @if($u->role!=1 && $u->role!=3)
                        <option value="{{$u->name}}">{{$u->name}}</option>
                        @endif
                      @endforeach
                    </select><br /><br /> --}}



                  <p>Remark </p>
                  <input type= "text" class = "form-control" name="Qcoin"  required><br>

                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>


@endsection
