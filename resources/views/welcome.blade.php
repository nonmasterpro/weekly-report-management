@extends('layouts.app')

@section('content')
		
		{{-- @if(Auth::guest())
      	<div class="eiei">
	
      	<p style="margin-left: 10px;font-family: Mitr;color: #747474">Dashboard</p>

		</div>
      	@else
 --}}
	<div id="page-content-wrapper">

		
   
      <div id="page-wrapper" >
      <h1 class="headerr" style="margin-left: 10px;font-family: Mitr;color: #747474">Dashboard</h1>
      <div class="row">
        <div class="col-md-12" style="height: 30%;">
          <div class="container-fluid ">
			<div>
            <div class="panel-head" >
            Information
			</div>
			</div>
            

          <div class="col-md-10">
			

            <br>
			<p class="item1" style="display: inline;">Full Name : </p> 
			<p style="display: inline;">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</p> <br>
			@if(Auth::user()->role==1)
			<p class="item1" style="display: inline;">Student No. : </p> 
			<p style="display: inline;">{{ Auth::user()->sid }}</p> <br>
			@endif
			<p class="item1" style="display: inline;">Position : </p> 
			<p style="display: inline;">{{ Auth::user()->position }}</p> <br>
			@if(Auth::user()->role==1)
			<p class="item1" style="display: inline;">Department : </p> 
			<p style="display: inline;">{{ Auth::user()->department }}</p> <br>
			<p class="item1" style="display: inline;">Faculty : </p> 
			<p style="display: inline;">{{ Auth::user()->fac }}</p> <br>
			@endif
			<br>

			

			</div>

			<div class="col-md-2" >
				<img class="img" src="img/Tecmove1.jpg" alt="logo" height="150" width="150">
			</div>

			

          </div>
        </div>
        </div>

		<div class="row">
        <div class="col-md-6" >
        <div class="container-fluid">

        @if(Auth::user()->role==1)
            <div class="panel-head">
            Internship Information	
            </div>
            @elseif(Auth::user()->role==2)
            <div class="panel-head">
            Mentor Information	
            </div>
            @elseif(Auth::user()->role==3)
            <div class="panel-head">
            Admin Information	
            </div>
            @endif	
			
			<div class="container-fluid">
			<br>
			<p class="item1" style="display: inline;">Job Position : </p> 
			<p style="display: inline;">{{ Auth::user()->position }}</p> <br>
			@if(Auth::user()->role==1)
			<p class="item1" style="display: inline;">Start : </p> 
			<p style="display: inline;">{{ Auth::user()->start }}</p> <br>
			<p class="item1" style="display: inline;">End : </p> 
			<p style="display: inline;">{{ Auth::user()->end }}</p> <br>
			@endif
			<br>
			</div>

			</div>
		</div>
        @if(Auth::user()->role==1)
		<div class="col-md-6" >
		<div class="container-fluid">
            <div class="panel-head" >
            Weekly Report Activity	
            </div>
            <table class="table table-striped">
				@foreach($weeklys as $weekly)
				<tr>
				<td>Week {{$weekly->week}}</td>
				<td>{{$weekly->title}}</td>
				<td class="actionCol">
				 @if($weekly->status==1)
			    <span id="span1">Pending</span>
			    @elseif($weekly->status==2)
			    <span id="span2">Approve</span>
			    @elseif($weekly->status==3)
			    <span id="span3">Reject</span> 
			    @endif
				</td>
				</tr>
				@endforeach
				</table>
			</div>
		</div>
		@endif
      	</div>


        @if(Auth::user()->role==1)
      	<div class="row">
        <div class="col-md-6" >
        <div class="container-fluid">
            <div class="panel-head">
            Mentor	
            </div>
            <br>
        <div class="container-fluid">

            <p class="item1" style="display: inline;">Name : </p> 
			<p style="display: inline;">{{ Auth::user()->mentorid }}</p> <br>
		</div>
			</div>
		</div>
		<div class="col-md-6" >
		</div>
      	</div>
      	@endif
      
    </div>
    </div>
		{{-- @endif --}}

{{-- <div class="eiei">
	
	<p>WEEKLY REPORT</p>

</div>
 --}}


@endsection
<style media="screen">
#text{
  text-align: center;
  font-size: 70px;
}
.eiei{
	width: 100%;
	height: 100%;
	background: url('img/rotoiti_jetty.jpg') no-repeat center center fixed; 
	/*background: url('img/11.jpg') no-repeat center center fixed; */
	/*background: url('img/weekly.png') no-repeat center center fixed; */
	background-size: cover;
}
p{
	font-size: 18px;

}
.table > tbody > tr > td{
	padding: 12px!important;
}

.item1{
	/*margin-left: 30px!important;*/
	font-size: 20px;
	font-weight: bold;

}
.headerr{
	margin: 30px 14px!important; 
}
.img{
	/*position: absolute;
	left: 90%;
	top:20%;*/
	margin-top: 20px;
	margin-bottom: 20px;

}
.panel-head{
	color:white;
	/*font-weight: bold;*/
	background-color: #EF6924; 
	padding: 5px 15px; 
	font-size: 22px;
	font-family: Mitr;

}
</style>
