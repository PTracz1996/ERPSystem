@extends('welcome')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<h1><center>Klienci</center></h1>

<div class="list-group">
<table class="table table-fixed table-condensed">
  <thead>
    <tr>
      <th scope="col">Nazwa firmy</th>
      <th scope="col">E-mail</th>
      <th scope="col">Numer telefonu</th>
      <th scope="col">Ulica</th>
      <th scope="col">Miasto</th>
      <th scope="col">Kod Pocztowy</th>
      <th scope="col">Numer domu</th>
      <th scope="col">Numer mieszkania</th>
      <th scope="col">Akcja</th>
    </tr>
  </thead>
  <tbody>
  @foreach($clients as $client)
    <tr class="clickableRow">
      <td>{{$client->company_name}}</td>
      <td>{{$client->email}}</td>
      <td>{{@$client->phone_number}}</td>
      <td>ul.{{@$client->street}}</td>
      <td>{{@$client->city}}</td>
      <td>{{@$client->post_code}}</td>
      <td>{{@$client->house_number}}</td>
      <td>{{@$client->apartment_number}}</td>
      <td>
      <a  href="/client" ><button class="btn"><i class="fa fa-trash"></i></button></a>
      <a  href="/Edit" ><button class="btn"><i class="fa fa-edit"></i></button></a>
      <a  href="/client" ><button class="btn"><i class="fa fa-eye"></i></button></a>
      <a  href="/create/client" ><button class="btn"><i class="fa fa-plus"></i></button></a>
      </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $clients->links() }}
</div>
@endsection