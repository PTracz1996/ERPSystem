@extends('welcome')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1><center> Stwórz klienta</center> </h1>
<form method="post" action="/client">
@csrf
  <div class="form-group row">
    <label for="company_name" class="col-4 col-form-label">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Nazwa firmy </font>
      </font>
    </label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="company_name" name="company_name" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nip" class="col-4 col-form-label">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">NIP </font>
      </font>
    </label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="nip" name="nip" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">E-mail </font>
      </font>
    </label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-at"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="city" class="col-4 col-form-label">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Miasto</font>
      </font>
    </label> 
    <div class="col-8">
      <input id="city" name="city" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="street" class="col-4 col-form-label">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Ulica</font>
      </font>
    </label> 
    <div class="col-8">
      <input id="street" name="street" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="house_number" class="col-4 col-form-label">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Numer domu</font>
      </font>
    </label> 
    <div class="col-8">
      <input id="house_number" name="house_number" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="apartment_number" class="col-4 col-form-label">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Numer mieszkania </font>
      </font>
    </label> 
    <div class="col-8">
      <input id="apartment_number" name="apartment_number" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="post_code" class="col-4 col-form-label">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Kod pocztowy</font>
      </font>
    </label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope"></i>
          </div>
        </div> 
        <input id="post_code" name="post_code" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="phone_number" class="col-4 col-form-label">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Numer telefonu</font>
      </font>
    </label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-phone"></i>
          </div>
        </div> 
        <input id="phone_number" name="phone_number" type="text" required="required" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Stwórz</button>
    </div>
  </div>
</form>
@endsection