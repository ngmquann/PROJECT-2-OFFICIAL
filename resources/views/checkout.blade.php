@extends('layoutfrontend')
@section('content')
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>Checkout</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <form action="{{route('saveCheckout')}}" method="post">
        @csrf
          <div class="products">
            <h3 class="title">Checkout</h3>
            @php 
              $total = 0;
              $tmp = 0;
              $productArr = array();
            @endphp
            @foreach($cart as $id => $cartItem)
              @php 
                $total += $cartItem['price'] * $cartItem['quantity'];
                if (!in_array($cartItem['name'], $productArr)) {
                    $productArr[] = $cartItem['name'];
                    $tmp++;
                }
              @endphp
              <input type="hidden" name="product_count" value="{{ $tmp }}">
              <input type="hidden" name="product_id" value="{{ $cartItem['id'] }}">
            <div class="item">
              <span class="price">${{number_format($cartItem['price'])}}</span>
              <input type="hidden" name="product_price" value="{{number_format($cartItem['price'])}}">
              <p class="item-name">{{ $cartItem['name'] }}</p>
              <input type="hidden" name="product_name" value="{{ $cartItem['name'] }}">
              <p class="item-description">x{{ $cartItem['quantity'] }}</p>
              <input type="hidden" name="product_quantity" value="{{ $cartItem['quantity'] }}">
            </div>
            <input type="hidden" name="total" value="{{ number_format($total) }}">
            @endforeach
            <div class="total">Total<span class="price">${{ number_format($total) }}</span></div>
          </div>

          <div class="card-details">
            <h3 class="title">Information</h3>
            <div class="row">
              <div class="form-group col-sm-12">
                <label for="card-holder">Name</label>
                <input id="name" name="shipping_name" type="text" class="form-control" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-12">
                <label for="card-holder">Email</label>
                <input id="email" name="shipping_email" type="email" class="form-control" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-12">
                <label for="">Phone</label>
                <div class="input-group expiration-date">
                  <input type="text" name="shipping_phone" class="form-control" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group col-sm-12">
                <label for="card-number">Address</label>
                <input id="card-number" name="shipping_address" type="text" class="form-control" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-12">
                <label for="floatingTextarea2">Note</label>
                <textarea class="form-control" name="shipping_notes" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>
              <div class="form-group col-sm-12">
                <button type="submit" class="btn btn-primary btn-block">Purchase</button>
              </div>
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