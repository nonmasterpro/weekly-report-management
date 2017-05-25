@extends('layouts.app')

@section('content')

<button id="myButton1" onclick="window.location.href='/weekly/user'"
class="btn btn-info" type="button" name="button"> Back </button>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Report</div>

                <div class = "panel-body">
                <form class = "" onsubmit="return validateForm()" name="aa" method = "post" action = "{{route('weekly.update',$weekly->id)}}">
                  <input name="_method" type="hidden" value="PATCH">
                  <div>
                    <p>Date </p>
                  <input style="width:180px" type= "date" class = "form-control" name="title"  value = "{{$weekly->title}}" required><br>
                  </div>

                  <p>Work Detail </p>
                    <div>  <!-- <input type= "text" class = "form-control" name="UserQId" placeholder="UserQId"><br> -->
                        <textarea rows="10" name = "discription" class = "form-control" value = "{{$weekly->discription}}" required>{{$weekly->discription}}</textarea><br>
                    </div>

                  <p>Mentor ID</p>
                        <select class="selectpicker" name="mentorid" id="menterid">
                            @foreach ($users as $u)
                              @if($u->mentorid!=1 && $u->mentorid!=99)
                              <option value="{{$u->mentorid}}">{{$u->name}}, {{$u->mentorid}}</option>
                              @endif
                            @endforeach
                          </select><br /><br />

                  <p>Remark </p>
                      <input type= "text" class = "form-control" name="Qcoin" value="{{$weekly->Qcoin}}" required><br>

                <button type="submit" class="btn btn-primary">Edit</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  var id = '<?php echo($weekly->mentorid); ?>';
    $(document).ready(function() {
      $('#menterid').val(id);
    });
</script>


@endsection
<style media="screen">


</style>
