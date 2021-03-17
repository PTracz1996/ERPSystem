@extends('welcome')

@section('content')
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Status aplikacji</h4>
    <p>Aplikacja połączona z bazą danych! Korzystasz a zasobów globalnych</p>
    </div>
<div class="my-3 p-3 bg-white rounded box-shadow">
<h6 class="border-bottom border-gray pb-2 mb-0">Ostatnie aktualizacje: </h6>
        <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">Klient 1 [email: example@domain.com, tel. 111222333]</strong>
            Zamówienie: nazwa_zamowienia Status: Zakończono
            </p>
        </div>
        <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong class="d-block text-gray-dark">Klient 1 [email: example@domain.com, tel. 111222333]</strong>
            Zamówienie: nazwa_zamowienia Status: Zakończono
          </p>
        </div>
        <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong class="d-block text-gray-dark">Klient 1 [email: example@domain.com, tel. 111222333]</strong>
            Zamówienie: nazwa_zamowienia Status: Zakończono
          </p>
        </div>
        <small class="d-block text-right mt-3">
          <a href="#">Zobacz wszystkie aktualizacje</a>
        </small>
      </div>
@endsection