@extends('layouts.app')

@section('content')

<button id="myButton1" onclick="window.location.href='/weekly/user'"
class="btn btn-info tttt" type="button" name="button"> Back </button>

<button type="myButton1" style="float: right; margin-right: 10px;" class="btn btn-primary tttt" onclick="printJS('printJS-form', 'html')">
Print Form</button>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary tttt">
                <div class="panel-heading panelheader">Print Preview
                  
                </div>

                <form method="post" action="#" id="printJS-form">
                  <img class="img" src="http://www.cmu.ac.th/data/image/layout/cmu_logo.png" alt="logo" height="70" width="70">
                    <h6 class="coop">Cooperative Education</h6>
                    <h6 class="coop2">Software Engineering Program</h6>
                    <h6 class="coop3">College of Arts, Media and Technology, Chiang Mai University</h6>
                  <hr class="hrr">
                  <h6 style="float: right;font-weight: bold; margin-top: -10px;">SE-011</h6>
                  <p id="headd">WEEKLY REPORT</p><br />
                  <p id="subhead">Week {{$asd}}/{{$user->week}} </p><br>
                  <h4 style="font-weight: bold; margin-left:5px;display: inline;">First Name :</h4>
                  <p style="display: inline;">{{$user->name}}</p>
                  <h4 style="font-weight: bold; margin-left:234px;display: inline;">Last Name :</h4>
                  <p style="display: inline;">{{$user->lastname}}</p><br><br>
                  <h4 style="font-weight: bold; margin-left:5px;display: inline;">Company :</h4>
                  <p style="display: inline;">Tecmove</p>
                  <h4 style="font-weight: bold; margin-left:254px;display: inline;">Position :</h4>
                  <p style="display: inline;">{{$user->position}}</p><br><br>

                  <table class="table table-striped tablee maintable">
                  <tr class=" headtable">
                  <td class="tablee aer"><p style="font-weight: normal;margin-left: 4px;">YY/MM/DD</p></td>
                  <td class="tablee aer"><p style="font-weight: normal; margin-left: 200px; width: 300px!important;">Work Details</p></td>
                  <td class="tablee aer"><p style="font-weight: normal;float:left">Remarks</p></td>
                  </tr>

                  @foreach($weeklys as $weekly)
                  @if($weekly->status==2)
                  <tr class="sonTable">
                    <td class="son"><span style="margin-left: 8px;">{{$weekly->title}}</span></td>
                    <td class="son">{{$weekly->discription}}</td>
                    <td class="son"><span >{{$weekly->Qcoin}}</span></td>

                  </tr>
                  @endif

                  @endforeach
                  </table>

                  <div class="sign">

                  <p id="S1" style="display: inline;">..................................................................</p>
                  <p id="Su1" style="display: inline;">..................................................................</p><br><br>

                  <p id="S2" style="display: inline;">(..................................................................)</p>
                  <p id="Su2" style="display: inline;">(..................................................................)
                  </p><br><br>

                  <p id="S3" style="display: inline;">Student</p>
                  <p id="Su3" style="display: inline;">Supervisor</p>


                </div>
                </form>


            </div>
        </div>
    </div>
</div>

@stop

<style media="screen">
.sonTable{
}
.aer{

}
.son{
  border-right: solid 1px;
  border-left: : solid 1px;
  /*border-bottom: solid 1px #A4A4A4;*/

}
.sign{
  margin-top: 40%;
  margin-left: 10px;
}
.tablee{
  border-top: solid 1px!important;
  border: solid 0.8px;
  padding-top: 30%;
}
#headd{
  margin-left: 41.5%;
  font-size: 45px;
}
#subhead{
  margin-left: 46%;
  font-size: 20px;
  
}
#S1{
  margin-left: 10px;

}
#S2{
  
  margin-left: 6px;
  
}

#S3{
  margin-left: 124px;
  

}
#Su1{
  margin-left: 160px;

}
#Su2{
  
  margin-left: 149px;

}

#Su3{
  
  margin-left: 370px;


}
.headtable{
  background: grey!important;
}


.printBtn{
  margin-left: 75%;
}
.maintable{

  border-left: solid 1px!important;

}
.hrr{
  border: double;
}
.img{
  margin-bottom: -15px;
  margin-left: 5px;
  margin-top: 5px;
  display: inline;
}
.coop{
  margin-left: 100px;
  margin-top: -50px;
}
.coop2{
  margin-left: 100px;
  margin-top: -1px;
}
.coop3{
  margin-left: 100px;
  margin-top: -1px;

}
.panelheader{
  background-color: #3C4254!important;
  color: white!important;
}
</style>
