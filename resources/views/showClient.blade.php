@extends('welcome')

@section('content')\
<style>

</style>
<h1><center>Klienci</center></h1>

<div class="list-group">
<table class="table">
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

    </tr>
  </thead>
  <tbody>
  @foreach($clients as $client)
    <tr>
      <td>{{$client->company_name}}</td>
      <td>{{$client->email}}</td>
      <td>{{@$client->phone_number}}</td>
      <td>ul.{{@$client->street}}</td>
      <td>{{@$client->city}}</td>
      <td>{{@$client->post_code}}</td>
      <td>{{@$client->house_number}}</td>
      <td>{{@$client->apartment_number}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<a class="btn btn-primary" href="/Edit" role="button">Edytuj klienta</a>
<br />
<a class="btn btn-primary" href="/Create" role="button">Usuń klienta</a>
<br />
  <a class="btn btn-primary" href="client/create" role="button">Stwórz klienta</a>

</div>
@endsection
<!--
  PATRYK TU MUSISZ JUŻ ZROBIĆ WYŚWIETLENIE DO WIDOKU NAJLEPIEJ DAJ TO W TABELI
  WYŚWIETL: IDENTYFIKATOR, NAZWE FIRMY, ADRES E-MAIL, TELEFON ORAZ PRZYCISKI
  FUNKCJE DO KASOWANIA EDYCJI PODGLĄDU ITP.
  DO PÓL ODWŁUJ SIE W TAKI SAM SPOSÓB JAK JA DO NAZWY FIRMY
  CZYLI JESLI CHCESZ TELEFON TO: {{$client->phone_number}} itp.
 -->