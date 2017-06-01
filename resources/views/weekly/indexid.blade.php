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
<th class="dateCol">#</th>
{{-- <th class="dateCol" >Date</th> --}}
<th>Week</th>
{{-- <th>Remark</th>
<th>Mentor</th>
<th>Status</th> --}}
<th class="actionCol">Action</th>
</tr>


{{-- {{dd($weeklys)}} --}}

                                


{{-- @foreach($weeklys as $key => $weekly) --}}
@for ($i = 1; $i <= $user->week; $i++)
<tr>
  <td>{{$i}}</td>
  {{-- <td>{{$weekly->title}}</td> --}}
  <td>Week {{$i}}</td>
  {{-- <td>{{$weekly->Qcoin}}</td>
  <td>{{$weekly->mentorid}}</td>

  <td>
  @if($weekly->status==1)
  <span id="span1">Pending</span>
  @elseif($weekly->status==2)
  <span id="span2">Approve</span>
  @elseif($weekly->status==3)
  <span id="span3">Reject</span>
  @endif
  </td> --}}

  <td>
    <form class = "" action="{{URL('weekly/print')}}" method="get">
    <input type ="hidden" name="_method" value="delete">
    <input type ="hidden" name="_token" value="{{ csrf_token() }}">
    <a href="{{URL('weekly/'.$i.'/day')}}" class="btn btn-info"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</a>
    <a href="{{URL('weekly/'.$i.'/print')}}" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i> Print Preview</a>

  </form>
  </td>

</tr>
@endfor
{{-- @endforeach --}}
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
