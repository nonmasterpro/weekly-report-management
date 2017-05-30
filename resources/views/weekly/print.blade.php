@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Print Preview
                  <button type="button" class="btn btn-primary printBtn" onclick="printJS('printJS-form', 'html')">
                     Print Form
                  </button>
                </div>



                <form method="post" action="#" id="printJS-form">
                  <h3 id="headd">Weekly Report</h3><br />
                  <h5 style="font-weight: bold; margin-left:10px;display: inline;">Name :</h5>
                  <h5 style="display: inline;">{{$user->name}}</h5><br>
                  <h5 style="font-weight: bold; margin-left:10px;display: inline;">Company :</h5>
                  <h5 style="display: inline;">Tecmove</h5><br>
                  <h5 style="font-weight: bold; margin-left:10px;display: inline;">Position :</h5>
                  <h5 style="display: inline;">Intern</h5><br><br>

                  <table class="table table-striped">
                  <tr>
                  <th ><h5 style="font-weight: bold;float:left">YY/MM/DD</h5></th>
                  <th><h5 style="font-weight: bold;float:left">Work Details</h5></th>
                  <th ><h5 style="font-weight: bold;float:left">Remarks</h5></th>
                  </tr>

                  @foreach($weeklys as $weekly)

                  <tr>
                    <td>{{$weekly->title}}</td>
                    <td>{{$weekly->discription}}</td>
                    <td>{{$weekly->Qcoin}}</td>
                  </tr>

                  @endforeach
                  </table>

                  <div class="sign">

                  <h5 id="S1" style="display: inline;">..................................................................</h5>
                  <h5 id="Su1" style="display: inline;">..................................................................</h5><br>

                  <h5 id="S2" style="display: inline;">(..................................................................)</h5>
                  <h5 id="Su2" style="display: inline;">(..................................................................)</h5><br>

                  <h5 id="S3" style="display: inline;">Student</h5>
                  <h5 id="Su3" style="display: inline;">Supervisor</h5>


                </div>


                </form>



            </div>
        </div>
    </div>
</div>

@stop

<style media="screen">
.sign{
  margin-top: 80%;
  margin-left: 10px;
}
#headd{
  margin-left: 42%;
}
#S1{
  /*margin-left: 10px;*/
  margin-left: 2%;
}
#S2{
  /*margin-left: 6px;*/
  margin-left: 1.5%;

}

#S3{
  /*margin-left: 100px;*/
  margin-left: 15%;

}


#Su1{
  /*margin-left: 200px;*/
  margin-left: 25%;

}
#Su2{
  /*margin-left: 193px;*/
  /*margin-left: 40%;*/
  margin-left: 24%;

}

#Su3{
  /*margin-left: 370px;*/
  /*margin-left: 50%;*/
  margin-left: 49%;


}
.printBtn{
  margin-left: 75%;
}
</style>
