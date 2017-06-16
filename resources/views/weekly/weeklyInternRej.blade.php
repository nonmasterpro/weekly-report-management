@extends('layouts.app')

@section('content')
<div class="">
{{--  <button id="askButton" onclick="window.location.href='weeklyCreate'"
  class="btn btn-success" type="button" name="button"> Ask Question </button>

  <button id="myButton" onclick="window.location.href='weekly/user'"
  class="btn btn-primary" type="button" name="button"> My Question </button> --}}

  <button id="myButton1" onclick="window.location.href='/weekly/intern'"
  class="btn btn-info tttt" type="button" name="button"> Back </button>

</div>

<div id="listQ" class="row">
  <h3>Weekly Report

  <button id="" onclick="window.location.href='/weekly/{{$id_intern}}/report'"
  class="btn btn-info " type="button" name="button"> Pending </button>
  <button id="" onclick="window.location.href='/weekly/{{$id_intern}}/app'"
  class="btn btn-success " type="button" name="button"> Approve </button>

</h3>

@if(sizeof($reports)==0)

<h3>There are no data</h3>

@else

<table class="table table-striped">
<tr>
<th>Name</th>
<th>Date</th>
<th>Week</th>
<th>Remark</th>
<th>Status</th>
<th>Action</th>

</tr>


@foreach($reports as $report)
<tr>
  <td>{{$report->username}}</td>
  <td>{{$report->title}}</td>
  <td>{{$report->week}}</td>
  <td>{{$report->Qcoin}}</td>
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
    <a href="{{route('weekly.show',$report->id)}}" class="btn btn-info"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</a>
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
