@extends('welcome')

@section('content')

<h1><center>Klienci</center></h1>

<div class="list-group">
  <ul class="list-group">
  @foreach($clients as $client)
  <li class="list-group-item">
  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    {{$client->company_name}}
  </li>
  @endforeach
</ul>
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