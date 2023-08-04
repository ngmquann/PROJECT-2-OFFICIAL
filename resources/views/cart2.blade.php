<section class="h-100 gradient-custom">
    <div class="container py-5">
      <div class="row d-flex justify-content-center my-4 cart-del-url" data-url="{{route('deleteCart')}}">
        <div class="col-md-8 cart-update-url" data-url="{{route('updateCart')}}">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">Cart</h5>
            </div>

            @php 
              $total = 0;
            @endphp

            @foreach($cart as $id => $cartItem)
              @php 
                $total += $cartItem['price'] * $cartItem['quantity'];
              @endphp
            <div class="card-body">
              <!-- Single item -->
              <div class="row">
                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                  <!-- Image -->
                  <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="{{ asset('img-product/' . $cartItem['image']) }}"
                      class="w-100" />
                  </div>
                  <!-- Image -->
                </div>

                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <p><strong>{{ $cartItem['name'] }}</strong></p>
                  <a class="btn btn-danger cart-del" href="#" data-id="{{$id}}" role="button"><i class="fas fa-trash"></i></a>
                  <a class="btn btn-primary cart-update" data-id="{{$id}}" href="#" role="button"><i class="fa-solid fa-rotate"></i></a>
                  <!-- Data -->
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                  <!-- Quantity -->
                  <div class="d-flex mb-4 justify-content-center qty" style="max-width: 300px">
                    <button class="btn btn-primary px-3 btn-minus" data-id="{{$id}}"><i class="fa-solid fa-minus"></i></button>
                    <input id="value_{{$id}}" type="text" style="width: 50px; text-align: center" name="quantity_{{$id}}" value="{{$cartItem['quantity']}}">
                    <button class="btn btn-primary px-3 btn-plus" data-id="{{$id}}"><i class="fa-solid fa-plus"></i></button>
                  </div>
                  <!-- Quantity -->

                  <!-- Price -->
                  <p class="text-start text-md-center">
                    <strong>${{number_format($cartItem['price'])}}</strong>
                  </p>
                  <!-- Price -->
                  
                  <!-- sub-total -->
                  <div class="mb-4" style=" right: 1vw; position: absolute;">
                    <p>Total: 
                      <i>${{ number_format($cartItem['price'] * $cartItem['quantity']) }}</i>
                    </p>
                  </div>
                  <!-- sub-total -->
                </div>
              </div>
              <!-- Single item -->
              <hr class="my-4" />
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">Summary</h5>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                  <div>
                    <strong>Total amount</strong>
                    <strong>
                      <p class="mb-0">Shipping</p>
                    </strong>
                  </div>
                  <div>
                    <span class="total-amount">${{ number_format($total) }}</span>
                    <span>
                      <p class="mb-0">Shipping</p>
                    </span>
                  </div>
                </li>
              </ul>
              <a class="btn btn-primary" href="{{url('checkout')}}" role="button">Go to checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>