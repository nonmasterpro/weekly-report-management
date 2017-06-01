@extends('layouts.app')

@section('content')

<button id="myButton1" onclick="window.location.href='/user'"
class="btn btn-info tttt" type="button" name="button"> Back </button>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default tttt">
                <div class="panel-heading">Add User</div>

                <div class = "panel-body">
                <form class = "" method = "post" action = "{{route('user.store')}}">

                  <p>First Name </p>
                  <input style="width:250px" type= "text" class = "form-control" name="name" value = "" required><br>

                  <p>Last Name </p>
                  <input style="width:250px" type= "text" class = "form-control" name="lastname" value = "" required><br>

                  <p>Position </p>
                  <input style="width:250px" type= "text" class = "form-control" name="position" value = "" required><br>

                  <p>Email </p>
                    <input style="width:250" type= "text" class = "form-control" name="email" value = "" required><br>
                    <p>Role </p>
                      <select id="selectRole" class="selectpicker" data-style="btn-primary" name="role" required>
                        <option value="1">User</option>
                        <option value="2">Mentor</option>
                        <option value="3">Admin</option>
                      </select>

                      <p>Mentor</p>
                        <select class="selectpicker" name="mentorid" id="mentorid">
                            @foreach ($users as $u)
                              @if($u->role!=1 && $u->role!=3)
                              <option value="{{$u->name}}">{{$u->name}}</option>
                              @endif
                            @endforeach
                              <option value="null">No Need</option>
                          </select><br /><br />

                      <p>Week</p>
                        <input style="width:250" type= "number" class = "form-control" name="week" value = "" required><br>

                  
                  <p>Password </p>
                  <input style="width:250px" type= "password" class = "form-control" name="password" required><br>

                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection
<style media="screen">

</style>
