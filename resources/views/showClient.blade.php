@extends('welcome')

@section('content')
<h1><center>Klienci</center></h1>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="list-group">

  @foreach($clients as $client)
  <button data-toggle="collapse" class="dataClick" data-id="{{$client->id}}">{{$client->company_name}}</button>

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
    <script type="text/javascript">
$(function() {
    $('.dataClick').click(function() {
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
