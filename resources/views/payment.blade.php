@extends('layoutfrontend')
@section('content')
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>Payment</h2>
        </div>
        <form action="{{route('orderPlace')}}" method="post">
        @csrf
          <div class="products">
            <h3 class="title">Payment</h3>
            <div class="item">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                COD
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Banking online
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Credit
              </label>
            </div>
            </div>
            <div class="form-group col-sm-12 d-flex justify-content-center">
              <button type="submit" class="btn btn-primary btn-block">>></button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>
@endsection

@section('addCSS')
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/payment.css') }}">
@endsection