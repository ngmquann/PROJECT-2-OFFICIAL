@extends('layout.layout2')
@section('content')
<div class="container content mt-5">
        <div class="row">
          <div class="col-sm-12 col-md-3">
            <div class="row">
            @foreach($user as $key)
              <div class="col-xs-12 col-md-4">
                <img src="https://yt3.googleusercontent.com/ytc/AOPolaTHPnijO_sOr1Yo96qfg4aXm7jiDW7EMFoMp_pQCA=s900-c-k-c0x00ffffff-no-rj" alt="" class="avt">
              </div>
              <div class="col-xs-12 col-md-8">
                <p class="name">{{$key->customer_name}}</p>
                <div id="editProfile">
                  <p class=""><i class="fa-solid fa-pencil" style="color: rgb(136, 25, 86);"></i> Edit profile</p>
                </div>
              </div>
              @endforeach
              <hr class="hr_lg" style="margin-top: 6px;">
              <div class="col-xs-12">
              <p id="changePassword"><i class="fa-solid fa-key" style="color: rgb(74, 74, 237);"></i> Change password</p>
              <p id="booking"><i class="fa-solid fa-calendar-days" style="color: rgb(74, 74, 237);"></i> Booking history</p>
              <p><i class="fa-solid fa-ticket" style="color: tomato;"></i> Voucher</p>
            </div>
            </div>
          </div>
            <hr class="hr_res">
          <div class="col-sm-12 col-md-9">
            <div class="row" id="profile">
              <p class="headerContent"><i class="fa-regular fa-address-card"></i> Profile</p>
              <div class="des">Welcome to Gundam-X</div>
              <hr class="hr_lg_x">

              @if(session('mess'))
                <div class="alert alert-primary" role="alert">
                  {{session('mess')}}
                </div>
              @endif
              @foreach($user as $key)
              <form autocomplete='off' class='form' method="POST" action="{{route('profile.update', ['customer_id' => $key->customer_id])}}">
              @csrf
              <div id="contentProfile">
                <div class="mb-3 row">
                  <strong for="inputPassword" class="col-sm-2 col-form-label">Name</strong>
                  <div class="col-sm-10">
                    <input type="text" class="form-control ipt" name="name" value="{{$key->customer_name}}">
                  </div>
                </div>
                <div class="mb-3 row">
                  <strong for="inputPassword" class="col-sm-2 col-form-label">Email</strong>
                  <div class="col-sm-10">
                    <input type="email" class="form-control ipt" name="email" value="{{$key->email}}">
                  </div>
                </div>
                <div class="mb-3 row">
                  <strong for="inputPassword" class="col-sm-2 col-form-label">Phone</strong>
                  <div class="col-sm-10">
                    <input type="text" class="form-control ipt" name="phone" value="{{$key->customer_phone}}">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Confirm</button>
              </div>
            </div>
            </form>
            @endforeach
            @foreach($user as $key)
            <form autocomplete='off' class='form' method="POST" action="{{route('changePass', ['customer_id' => $key->customer_id])}}">
              @csrf
            <div class="row" id="changePass">
              <div class="mb-3 row">
                <strong for="inputPassword" class="col-sm-3 col-form-label">Password</strong>
                <div class="col-sm-9">
                  <input type="password" name="password" class="form-control ipt">
                </div>
              </div>
              <div class="mb-3 row">
                <strong for="inputPassword" class="col-sm-3 col-form-label">New password</strong>
                <div class="col-sm-9">
                  <input type="password" name="new_password" class="form-control ipt">
                </div>
              </div>
              <div class="mb-3 row">
                <strong for="inputPassword" class="col-sm-3 col-form-label">Confirm password</strong>
                <div class="col-sm-9">
                  <input type="password" name="confirm_password" class="form-control ipt">
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-md-6"><button type="submit" class="btn btn-success changePass">Confirm</button></div>     
              </div>
            </div>
            </form>
            @endforeach

            <div class="row" id="ticket">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Status</th>
                    <th scope="col">Day</th>
                    <th scope="col">Hour</th>
                    <th scope="col">Amount</th>
                    <th scope="col">PRICE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr id="info">
                   
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('addCSS')
  <link rel="stylesheet" href="{{asset('css/profile.css') }}">
@endsection

@section('addJS')
  <script src="{{asset('js/profile.js') }}"></script>
@endsection