@extends('layouts.app')

@section('content')

<button id="myButton1" onclick="window.location.href='/user'"
class="btn btn-info" type="button" name="button"> Back </button>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>

                <div class = "panel-body">
                <form class = "" method = "post" action = "{{route('user.update',$user->id)}}">
                  <input name="_method" type="hidden" value="PATCH">

                  <p>Name </p>
                  <input style="width:250px" type= "text" class = "form-control" name="name" value = "{{$user->name}}" required><br>

                  <p>Email </p>
                    <input style="width:250" type= "text" class = "form-control" name="email" value = "{{$user->email}}" required><br>
                    <p>Role </p>
                      <!-- <input style="width:180px" type= "text" class = "form-control" name="name" value = "{{$user->role}}"><br> -->
                      <select id="selectRole" class="selectpicker" data-style="btn-primary" name="role" required>
                        <option value="1">User</option>
                        <option value="2">Mentor</option>
                        <option value="3">Admin</option>
                      </select>
                      <p>Mentor ID </p>
                        <input style="width:150px" type= "text" class = "form-control" name="mentorId" value = "{{$user->mentorId}}" required><p id="PP"> ***Default user is 1</p><br>
                  <p>Password </p>
                  <input style="width:250px" type= "password" class = "form-control" name="password" placeholder="password..." required><br>

                <button type="submit" class="btn btn-primary">Edit</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection
<style media="screen">
#selectRole{
  margin-bottom: 15px;
}
#myButton{
  float: right;
  margin-right: 80px;
  margin-bottom: 10px;
}
#myButton1{
  float: right;
  margin-right: 80px;
  margin-bottom: 10px;
}
#PP{
  color: rgb(116, 115, 117);
}
</style>
