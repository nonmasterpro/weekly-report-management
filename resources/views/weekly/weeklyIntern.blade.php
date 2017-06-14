@extends('layouts.app')

@section('content')
<div class="">
{{--  <button id="askButton" onclick="window.location.href='weeklyCreate'"
  class="btn btn-success" type="button" name="button"> Ask Question </button>

  <button id="myButton" onclick="window.location.href='weekly/user'"
  class="btn btn-primary" type="button" name="button"> My Question </button> --}}

  <button id="myButton1" onclick="window.location.href='/welcome'"
  class="btn btn-info tttt" type="button" name="button"> Back </button>

</div>

<div id="listQ" class="row">
  <h3>Intern
</h3>

@if(sizeof($users)==0)

<h3>There are no data</h3>

@else

<table class="table table-striped">
<tr>
<th>Name</th>

<th>Action</th>

</tr>


@foreach($users as $user)
<tr>
  <td>{{$user->name}} {{$user->lastname}}</td>
  

  <td>
    <a href="{{URL('weekly/'.$user->id.'/report')}}" class="btn btn-info"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</a>
  </td>

</tr>
@endforeach
</table>
@endif
</div>
@stop


<style media="screen">


</style>
