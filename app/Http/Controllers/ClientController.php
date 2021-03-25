<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=clients::where('is_delete', false)->paginate(3);
        return view('showClient', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_clients = new clients;
        $new_clients->company_name = $request->company_name;
        $new_clients->email = $request->email;
        $new_clients->phone_number = $request->phone_number;
        $new_clients->street = $request->street;
        $new_clients->city = $request->city;
        $new_clients->post_code = $request->post_code;
        $new_clients->house_number = $request->house_number;
        $new_clients->apartment_number = $request->apartment_number;
        $new_clients->save();
        echo("Udalo się utworzyć klienta!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(clients $clients)
    {
        echo(".".$clients->company_name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(clients $clients)
    {
        return view('editClient');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = clients::find($id);
        $client->is_delete = true;
        $client->save();
        return response()->json([
            'status' => 'success',
        ]);
    }
}

/*
C   Verb    URI    Action    Route Name                         |UWAGI
1   GET    /photos    index    photos.index                     Modyfikacja widoku wyświetlania. Widok musi być responzywny. Ważne: W liście wszystkich użytkowników nie musimy mieć
                                                                 wszystkich informacji. Do tego będzie służyła karta informacji czyli szczegóły pojedyńczego użytkownika. 
                                                                 Zapoznać się z AD1.
1   GET    /photos/create    create    photos.create            Należy dodać divy pod każdym polem bądź nad polem do wyświetlania błędów. Sprawdzić responsywność widoku
1   POST    /photos    store    photos.store                    Do funkcji należy dodać walidację. Można także dodać middleware do sprawdzenia responsa.
0   GET    /photos/{photo}    show    photos.show               Widok nie istnieje. Stworzyć widok o nazwie showClientCard. Widok ma zawierać wszystkie dane klienta. 
                                                                Na dole karty stworzyć tabelę o nazwię zamówienia (to będzie ułatwienie dla przyszłych zadań)
    GET    /photos/{photo}/edit    edit    photos.edit          Sprawa do przedyskutowania. Można stworzyć okno za pomocą sweetAlerts i wykonać edycję asynchronicznie z 
                                                                użyciem jQuery i AJAx
    PUT/PATCH    /photos/{photo}    update    photos.update     Funkcja którą musze jeszzcze stworzyć
1   DELETE    /photos/{photo}    destroy    photos.destroy      Istnieje ma się dobrze. Uwaga: PAMIETAĆ o dostosowaniu systemu dla tokena CSRF!!!! B.WAŻNE
*AD1. Musimy pomyśleć po jakich polach może wyszukiwać użytkownik systemu.
Moja propozycja:
a) Po identyfikatorze
b) Po adresie e-mail
c) Po nazwie firmy
d) Po adresie (Uwaga adresie w sensie całkowitym. Jak należy to rozumieć:
Funkcja w kontrolerze linkAdress połączy ulice numer domu numer mieszkania
miasto oraz kod pocztowy. Wyszukiwanie będzie odbywało się w całym tym ciągu)
NALEŻY dostosować widok showClient do wyszukiwania.
Moja wizja jest taka że nad bądź pod wierszem nagłówkowym będzie input do wyszukiwania.
|input|
|id|

)

*/