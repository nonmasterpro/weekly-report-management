
@section('content')
<div class="row">
<table class="table table-striped">
<tr>
<th>title</th>
<th>Discription</th>
<th>Coin</th>
</tr>

@foreach($questions as $question)
<tr>
  <td>{{$question->title}}</td>
  <td>{{$question->discription}}</td>
  <td>{{$question->Qcoin}}</td>
</tr>
@endforeach
</table>
</div>
@stop
