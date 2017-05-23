@extends('layouts.app')

@section('content')
<div class="">
{{--  <button id="askButton" onclick="window.location.href='weeklyCreate'"
  class="btn btn-success" type="button" name="button"> Ask Question </button>

  <button id="myButton" onclick="window.location.href='weekly/user'"
  class="btn btn-primary" type="button" name="button"> My Question </button> --}}

  <button id="myButton1" onclick="window.location.href='/home'"
  class="btn btn-info" type="button" name="button"> Back </button>

</div>

<div id="listQ" class="row">
  <h3>Weekly Report
</h3>
<table class="table table-striped">
<tr>
<th>Name</th>
<th>Date</th>
<th>Remark</th>
<th>Status</th>
</tr>


@foreach($weeklys as $weekly)
<tr>
  <td>{{$weekly->username}}</td>
  <td> {{$weekly->title}}</td>
  <td>{{$weekly->Qcoin}}</td>
  <td>
    @if($weekly->status==1)
    <span id="span1">Pending</span> <a href="{{route('weekly.show',$weekly->id)}}" > <span id="span4"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</span></a>
    @elseif($weekly->status==2)
    <span id="span2">Approve</span> <a href="{{route('weekly.show',$weekly->id)}}" > <span id="span4"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</span></a>
    @elseif($weekly->status==3)
    <span id="span3">Reject</span> <a href="{{route('weekly.show',$weekly->id)}}" > <span id="span4"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</span></a>
    @endif
  </td>

</tr>
@endforeach
</table>
</div>
@stop

<style media="screen">
#span1 {
  padding: 5 5 5 5;
  background-color: rgb(57, 151, 191);
  color: white;
  border-style: double;

}
#span2 {
  padding: 5 5 5 5;
  background-color: rgb(5, 207, 86);
  color: white;
  border-style: double;
}
#span3 {
  padding: 5 5 5 5;
  background-color: rgb(236, 63, 89);
  color: white;
  border-style: double;
}
#span4 {
  padding: 5 5 5 5;
  background-color: rgb(26, 46, 226);
  color: white;
  border-style: double;
}
  #listQ{
    padding: 20px 100px;
  }
  #askButton{
    float: right;
    margin-right: 50px;
    margin-bottom: 10px;
  }
  #myButton{
    float: right;
    margin-right: 10px;
    margin-bottom: 10px;
  }
  #myButton1{
    float: right;
    margin-right: 80px;
    margin-bottom: 10px;
  }
</style>
