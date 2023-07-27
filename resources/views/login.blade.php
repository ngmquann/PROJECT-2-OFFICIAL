@extends('layout.layout2')
@section('content')

@if(session('message'))
  <div class="alert alert-primary" role="alert" style="margin-bottom: 0;">
    {{session('message')}}
  </div>
@endif
  <div class="login_body">
    <form autocomplete='off' class='form' method="POST" action="{{route('login_user')}}">
      @if(Session::has('success'))
      <div class="alert alert-primary" role="alert" style="margin-bottom: 0;">
        {{Session::get('success')}}
      </div>
      @endif
      @if(Session::has('fail'))
      <div class="alert alert-danger" role="alert" style="margin-bottom: 0;">
        {{Session::get('fail')}}
      </div>
      @endif

      @csrf
      <div class='control'>
        <h1>
          Log in
        </h1>
      </div>
      <div class='control block-cube block-input'>
        <input name='email' placeholder='Email' type='email'>
        @if($errors->has('email'))
          <span class="alert errors">
            {{$errors->first('email')}}
          </span>
        @endif
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
      <div class='control block-cube block-input'>
        <input name='password' placeholder='Password' type='password'>
        @if($errors->has('password'))
          <span class="alert errors">
            {{$errors->first('password')}}
          </span>
        @endif
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
      
      <div class="auth-form__aside">
        <div class="auth-form__forgot-password">
          <!-- <div>
            <input class="form-check-input me-1" type="checkbox" name="remember" id="firstCheckbox">
            <label class="form-check-label" for="firstCheckbox" style="color: white; font-size: 1rem;">Remember me</label>
          </div> -->
          <a href="" class="auth-form__forgot-password-link">Forgot password</a>
        </div>
      </div>

      
      <button class='btn block-cube block-cube-hover' type='submit'>
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
          Log In
        </div>
      </button>
      <div class="auth-form__socials">
        <div class="auth-form__socials-width">
          <a href="#" class="auth-form__socials--facebook btn--size-s">
            <i class="auth-form__socials-icon fa-brands fa-facebook"></i>
            <span class="auth-form__socials-title">Facebook</span>
          </a>
        </div>
        <div class="auth-form__socials-width">
          <a href="#" class="auth-form__socials--google btn--size-s">
            <i class="auth-form__socials-icon fa-brands fa-google"></i>
            <span class="auth-form__socials-title">Google</span>
          </a>
        </div>
      </div>
      <a class='btn block-cube block-cube-hover' href="{{url('/register')}}">
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
      </a>
    </form>
  </div>
@endsection

@section('addCSS')
  <link rel="stylesheet" href="{{asset('css/login.css') }}">
  <link rel="stylesheet" href="{{asset('css/base.css') }}">
@endsection