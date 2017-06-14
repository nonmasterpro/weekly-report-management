@extends('layouts.app')

@section('content')

@if ($user->role==1)
<button id="myButton1" onclick="window.location.href='/weekly/user'"
class="btn btn-info tttt" type="button" name="button"> Back </button>
@else
<button id="myButton" onclick="window.location.href='/weekly'"
class="btn btn-info tttt" type="button" name="button"> Back </button>
@endif

<div id="listQ" class="row">
  <h3>Weekly Report - Week {{$idweek[0]}} <br>{{$user->name}} {{$user->lastname}}
</h3>

@if(sizeof($reports)==0)

<h3>There are no data</h3>

@else

<table class="table table-striped">
<tr>
<th class="dateCol">#</th>
<th class="" >Date</th>
<th>Week</th>
<th>Remark</th>
<th>Mentor</th>
<th>Status</th>
<th class="actionCol">Action</th>
</tr>


@foreach($reports as $key => $report)
<tr>
  <td>{{$key+1}}</td>
  <td> {{$report->title}}</td>
  <td> {{$report->week}}</td>
  <td>{{$report->Qcoin}}</td>
  <td>{{$report->mentorid}}</td>
  <td>
    @if($report->status==1)
    <span id="span1">Pending</span>
    @elseif($report->status==2)
    <span id="span2">Approve</span>
    @elseif($report->status==3)
    <span id="span3">Reject</span> 
    @endif
  </td>

  <td>
  <form class = "" action="{{route('weekly.destroy',$report->id)}}" method="post">
    <input type ="hidden" name="_method" value="delete">
    <input type ="hidden" name="_token" value="{{ csrf_token() }}">
    <a href="{{route('weekly.show',$report->id)}}" class="btn btn-info"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</a>
    @if($report->status!=2)
    <a href="{{route('weekly.edit',$report->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
    @endif
    <button type="submit" class = "btn btn-danger" onclick="return confirm('Are you sure?')" name="name" value="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
  </form>
  </td>

</tr>
@endforeach
</table>

@endif
</div>


@stop

<style media="screen">

#myButton{
  float: right;
  margin-right: 50px;
  margin-bottom: 10px;
}


</style>
