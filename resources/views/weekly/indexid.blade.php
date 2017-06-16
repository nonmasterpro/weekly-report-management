@extends('layouts.app')

@section('content')

@if ($user->role==1)
<button id="myButton1" onclick="window.location.href='/welcome'"
class="btn btn-info tttt" type="button" name="button"> Back </button>
@else
<button id="myButton" onclick="window.location.href='/weekly'"
class="btn btn-info tttt" type="button" name="button"> Back </button>
@endIf

<div id="listQ" class="row">
  <p>Weekly Report - {{$user->name}}
</p>
<div class="panel">
<table class="table table-striped">
<tr>
<th class="dateCol">#</th>
<th>Week</th>

<th class="actionCol">Action</th>
</tr>

@for ($i = 1; $i <= $user->week; $i++)
<tr>
  <td>{{$i}}</td>

  <td>Week {{$i}}</td>

  <td>
    <form class = "actionbut" action="{{URL('weekly/print')}}" method="get">
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
</div>


@stop

<style media="screen">

#myButton{
  float: right;
  margin-right: 50px;
  margin-bottom: 10px;
}

/*.actionCol:last-child{
  width: 300!important;
}*/
.dateCol:first-chlid{
  width: 1000px!important;
}
.actionbut{
  margin-bottom: 10px;
}
p{
  font-size: 24px;
  margin-bottom: 20px!important;
}


</style>
