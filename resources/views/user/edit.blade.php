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
                      <select class="selectpicker" id="userrole" data-style="btn-primary" name="role" required>
                        <option value="1">User</option>
                        <option value="2">Mentor</option>
                        <option value="3">Admin</option>
                      </select><br /><br />

                      <p>Mentor ID </p>
                        <input style="width:150px" type= "text" class = "form-control" name="mentorid" value = "{{$user->mentorid}}" required><p id="PP"> ***Default user is 1</p><br>


                <button type="submit" class="btn btn-primary">Edit</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  var id = '<?php echo($user->role); ?>';
    $(document).ready(function() {
      $('#userrole').val(id);
    });
</script>

@endsection
<style media="screen">



</style>
