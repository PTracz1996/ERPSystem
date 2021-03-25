@extends('welcome')

@section('content')
<style>
.collapse{
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-family: 'Roboto', Arial, Tahoma, sans-serif;
    margin: 0 0 5px;
    line-height: 1.42857143;
}
.panel-danger{
  font-family: 'Roboto', Arial, Tahoma, sans-serif;
}
</style>
<h1><center>Klienci</center></h1>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<div class="list-group">

  @foreach($clients as $client)
  <button data-toggle="collapse" class="panel panel-danger" data-id="{{$client->id}}" >{{$client->company_name}} </button>

<div id="{{$client->id}}" class="collapse">
<p><strong>Nazwa firmy :</strong> {{$client->company_name}} <br />
<strong>NIP :</strong>{{$client->nip}} <br />
<strong>E-mail :</strong> {{$client->email}} <br />
<strong>Adres :</strong> ul. {{$client->street}} {{$client->house_number}}/{{$client->apartment_number}} , {{$client->post_code}} {{$client->city}} 
<br />
<strong>Numer telefonu :</strong> {{$client->phone_number}} </p> 
<center >
<a  href="#" ><button class="btn"><i class="fa fa-trash"></i></button></a>
<a  href="#" ><button class="btn"><i class="fa fa-edit"></i></button></a>
<a  href="#" ><button class="btn"><i class="fa fa-eye"></i></button></a>
</center>
</div>
    @endforeach

{{ $clients->links() }}
</div>
@endsection
@section('javascript')
    const deleteUrl = "{{ url('/client/') }}/";
@endsection
@section('js-files')
    <script type="text/javascript">
$(function() {
    $('.panel-danger').click(function() {
      var id = $(this).data("id");
      var element = document.getElementById(id);
      if(element.style.display == "")
      element.style.display = 'block';
      else
      element.style.display = '';
    });
});
    </script>
@endsection
