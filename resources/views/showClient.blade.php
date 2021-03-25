@extends('welcome')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<h1><center>Klienci</center></h1>

<div class="list-group">
<<<<<<< HEAD
<table class="table table-fixed table-responsive">
  <thead>
    <tr>
      <th scope="col"><i class="fa fa-copyright"></i> Nazwa firmy</th>
      <th scope="col"><i class="fa fa-indent"></i> NIP</th>
      <th scope="col"><i class="fa fa-home"></i> Adres</th>
      <th scope="col"><i class="fa fa-at"></i> E-mail</th>
      <th scope="col"><i class="fa fa-phone"></i> Nr telefonu</th>
      <th scope="col"><i class="fa fa-cog"></i> Akcja</th>
    </tr>
  </thead>
  <tbody>
  @foreach($clients as $client)
    <tr class="clickableRow overflow-auto">
      <td>{{$client->company_name}}</td>
      <td>{{$client->nip}}</td>
      <td>ul.{{@$client->street}}
      {{@$client->house_number}}/{{@$client->apartment_number}}<br />
      {{@$client->city}} {{@$client->post_code}}</td>
      <td>{{$client->email}}</td>
      <td>{{@$client->phone_number}}</td>
      <td>
      <button class="btn delete" data-id="{{$client->id}}"><i class="fa fa-trash"></i></button>
      <a  href="/Edit" ><button class="btn" data-id="{{$client->id}}" data-token="{{ csrf_token() }}"><i class="fa fa-edit"></i></button></a>
      <a  href="/client" ><button class="btn" data-id="{{$client->id}}"><i class="fa fa-eye"></i></button></a>
      <a  href="/create/client" ><button class="btn" data-id="{{$client->id}}"><i class="fa fa-plus"></i></button></a>
      </td>
      </tr>
=======

  @foreach($clients as $client)
  <button data-toggle="collapse" data-target="'#{{$client->id}}">{{$client->company_name}}</button>

<div id="{{$client->id}}" class="collapse">
Lorem ipsum dolor text....
</div>
>>>>>>> fca1c7065da4e8f701e8ace33f7559adf22ca5f0
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
