@extends('layouts.app')

@section('content')
<div class="">

  <button id="myButton1" onclick="window.location.href='/welcome'"
  class="btn btn-info tttt" type="button" name="button"> Back </button>

</div>

<div id="listQ" class="row">
  <h3>User Management
    <button onclick="window.location.href='/user/create'"
    class="btn btn-success " type="button" name="button"> Add </button>
</h3>

@if(sizeof($users)==0)

<h3>There are no data</h3>

@else

<table class="table table-striped">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Position</th>
<th>Email</th>
{{-- <th>Password</th> --}}
<th>Mentor</th>
<th>Week</th>
<th>Role</th>
<th class="actionCol">Action</th>
</tr>


@foreach($users as $user)
<tr>
  {{-- <td><a href="{{route('user.show',$user->id)}}">{{$user->name}}</a></td> --}}
  <td>{{$user->name}}</td>
  <td>{{$user->lastname}}</td>
  <td>{{$user->position}}</td>
  <td> {{$user->email}}</td>
  {{-- <td>😙😙😙😙😙</td> --}}

  @if($user->role==1)
  <td>{{$user->mentorid}}</td>
  @elseif($user->role==2 || $user->role==3)
  <td> - </td>
  @else
  <td> - </td>
  @endif

  @if($user->role==1)
  <td>{{$user->week}}</td>
  @elseif($user->role==2 || $user->role==3)
  <td> - </td>
  @else
  <td> - </td>
  @endif

  <td>
  @if($user->role==1)
  <span id="span1">User</span>
  @elseif($user->role==2)
  <span id="span2">Mentor</span>
  @elseif($user->role==3)
  <span id="span3">Admin</span>
  @endif
  </td>
  <td>
    <form class = "" action="{{route('user.destroy',$user->id)}}" method="post">
    <input type ="hidden" name="_method" value="delete">
    <input type ="hidden" name="_token" value="{{ csrf_token() }}">
    <a href="{{route('user.edit',$user->id)}}" style="margin-top: 5px;" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
    <button style="margin-top: 5px;" type="submit" class = "btn btn-danger" onclick="return confirm('Are you sure?')" name="name" value="delete"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
  </form>
  </td>

</tr>

@endforeach
</table>
@endif
</div>
@stop

<style media="screen">

.row{
  margin-top: 3rem;
}

</style>
