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
    <tr class="clickableRow">
      <td>{{$client->company_name}}</td>
      <td>{{$client->nip}}</td>
      <td>ul.{{@$client->street}}
      {{@$client->house_number}}/{{@$client->apartment_number}}<br />
      {{@$client->city}} {{@$client->post_code}}</td>
      <td>{{$client->email}}</td>
      <td>{{@$client->phone_number}}</td>
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