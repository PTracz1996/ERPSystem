@extends('welcome')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<h1><center>Klienci</center></h1>

<div class="list-group">

  @foreach($clients as $client)
  <button data-toggle="collapse" data-target="'#{{$client->id}}">{{$client->company_name}}</button>

<div id="{{$client->id}}" class="collapse">
Lorem ipsum dolor text....
</div>
    @endforeach

{{ $clients->links() }}
</div>
@endsection
@section('javascript')
    const deleteUrl = "{{ url('/client/') }}/";
@endsection
@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection
