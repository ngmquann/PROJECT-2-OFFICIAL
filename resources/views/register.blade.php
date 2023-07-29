@extends('layout.layout2')
@section('content')

@if(session('message'))
  <div class="alert alert-primary" role="alert" style="margin-bottom: 0;">
    {{session('message')}}
  </div>
@endif
<div class="login_body">
    <form autocomplete='off' class='form' method="POST" action="{{route('register')}}">
      @csrf
      <div class='control'>
        <h1>
          Register
        </h1>
      </div>
      <div class='control block-cube block-input'>
        <input id="email" name='email' placeholder='Enter your email' type='email'>
        <div class='bg-top'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg-right'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg'>
          <div class='bg-inner'></div>
        </div>
      </div>
      @if($errors->has('email'))
          <span class="errors">
            {{$errors->first('email')}}
          </span>
        @endif
      <div class='control block-cube block-input'>
        <input name='password' placeholder='Enter your password' type='password' id="floatingPassword">
        <i class="far fa-eye-slash" id="togglePassword"></i>
        <div class='bg-top'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg-right'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg'>
          <div class='bg-inner'></div>
        </div>
      </div>
      @if($errors->has('password'))
          <span class="errors">
            {{$errors->first('password')}}
          </span>
        @endif
      <small style="color: white; font-size: 12px">*Password: 9 characters minimum, including letters and numbers.</small>
      <div class='control block-cube block-input' style="margin-top: 24px;">
        <input name='password_confirmation' placeholder='Re-enter your password' type='password' id="floatingPassword2">
        
        <i class="far fa-eye-slash" id="togglePassword2"></i>
        <div class='bg-top'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg-right'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg'>
          <div class='bg-inner'></div>
        </div>
      </div>
      @if($errors->has('password_confirmation'))
          <span class="errors">
            {{$errors->first('password_confirmation')}}
          </span>
        @endif
      <div class='control block-cube block-input'>
        <input name='customer_name' placeholder='Enter your name' type='text'>
        
        <div class='bg-top'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg-right'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg'>
          <div class='bg-inner'></div>
        </div>
      </div>
      @if($errors->has('customer_name'))
          <span class="errors">
            {{$errors->first('customer_name')}}
          </span>
        @endif
      <div class='control block-cube block-input'>
        <input name='customer_phone' placeholder='Enter your phone number' type='text'>
       
        <div class='bg-top'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg-right'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg'>
          <div class='bg-inner'></div>
        </div>
      </div>
      @if($errors->has('customer_phone'))
          <span class="errors">
            {{$errors->first('customer_phone')}}
          </span>
        @endif
      <!-- <div class='control block-cube block-input'>
        <input name='password' placeholder='Enter your address' type='text'>
        <div class='bg-top'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg-right'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg'>
          <div class='bg-inner'></div>
        </div>
      </div> -->

      <button class='btn block-cube block-cube-hover btn-login' type='submit'>
        <div class='bg-top'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg-right'>
          <div class='bg-inner'></div>
        </div>
        <div class='bg'>
          <div class='bg-inner'></div>
        </div>
        <div class='text'>
          Register
        </div>
      </button>
      
    </form>
  </div>
@endsection

@section('addCSS')
  <link rel="stylesheet" href="{{asset('css/register.css') }}">
  <link rel="stylesheet" href="{{asset('css/base.css') }}">
@endsection

@section('addJS')
  <script src="{{asset('js/register.js') }}"></script>
@endsection