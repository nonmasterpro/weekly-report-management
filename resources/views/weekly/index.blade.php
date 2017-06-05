@extends('layouts.app')

@section('content')
<div class="">
{{--  <button id="askButton" onclick="window.location.href='weeklyCreate'"
  class="btn btn-success" type="button" name="button"> Ask Question </button>

  <button id="myButton" onclick="window.location.href='weekly/user'"
  class="btn btn-primary" type="button" name="button"> My Question </button> --}}

  <button id="myButton1" onclick="window.location.href='/'"
  class="btn btn-info tttt" type="button" name="button"> Back </button>

</div>

<div id="listQ" class="row">
  <h3>Weekly Report
</h3>

@if(sizeof($weeklys)==0)

<h3>There are no data</h3>

@else

<table class="table table-striped">
<tr>
<th>Name</th>
<th>Date</th>
<th>Remark</th>
<th>Status</th>
<th>Action</th>

</tr>


@foreach($weeklys as $weekly)
<tr>
  <td>{{$weekly->username}}</td>
  <td> {{$weekly->title}}</td>
  <td>{{$weekly->Qcoin}}</td>
  <td>
    @if($weekly->status==1)
    <span id="span1">Pending</span>
    @elseif($weekly->status==2)
    <span id="span2">Approve</span>
    @elseif($weekly->status==3)
    <span id="span3">Reject</span> 
    @endif
  </td>

  <td>
    <a href="{{route('weekly.show',$weekly->id)}}" class="btn btn-info"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</a>
  </td>

</tr>
@endforeach
</table>
@endif
</div>
@stop


<style media="screen">


</style>
