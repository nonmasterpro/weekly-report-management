@extends('layouts.app')

@section('content')

@if ($user->role==1)
<button id="myButton1" onclick="window.location.href='/home'"
class="btn btn-info" type="button" name="button"> Back </button>
@else
<button id="myButton" onclick="window.location.href='/weekly'"
class="btn btn-info" type="button" name="button"> Back </button>
@endIf

<div id="listQ" class="row">
  <h3>Weekly Report - {{$user->name}}
</h3>
<table class="table table-striped">
<tr>
<th>Date</th>
<th>Remark</th>
<th>Mentor ID</th>
<th>Action</th>
<th>Status</th>
</tr>

@foreach($weeklys as $weekly)
<tr>
  <td>{{$weekly->title}}</td>
  <td>{{$weekly->Qcoin}}</td>
  <td>{{$weekly->mentorid}}</td>
  <td>
    <form class = "" action="{{route('weekly.destroy',$weekly->id)}}" method="post">
    <input type ="hidden" name="_method" value="delete">
    <input type ="hidden" name="_token" value="{{ csrf_token() }}">
    @if($weekly->status==1||$weekly->status==3)
    <a href="{{route('weekly.edit',$weekly->id)}}" class="btn btn-primary">Edit</a>
    <input type="submit" class = "btn btn-danger" onclick="return confirm('Are you sure?')" name="name" value="delete">
    @else
    <h1 id="yimyim">😁😚😁</h1>
    @endif
  </form>
  </td>
  <td>
  @if($weekly->status==1)
  <span id="span1">Pending</span> <a href="{{route('weekly.show',$weekly->id)}}" > <span id="span4"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</span></a>
  @elseif($weekly->status==2)
  <span id="span2">Approve</span> <a href="{{route('weekly.show',$weekly->id)}}" > <span id="span4"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</span></a>
  @elseif($weekly->status==3)
  <span id="span3">Reject</span> <a href="{{route('weekly.show',$weekly->id)}}" > <span href="#" id="span4"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</span></a>
  @endif
  </td>
</tr>
@endforeach
</table>
</div>


@stop

<style media="screen">

#myButton{
  float: right;
  margin-right: 50px;
  margin-bottom: 10px;
}


</style>
