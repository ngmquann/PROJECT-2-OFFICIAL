@extends('layout.layout2')
@section('content')


<div class="video">
      <video muted loop autoplay>
        <source src="{{asset('video/738de74052df4dd2be35d60d7ce1b4610aee6269b9ff44d4baeb5a004f46f3f3.mp4') }}" type="video/mp4" asp-append-version="true">
      </video>
    </div>
    <div class="first-content">
      <div class="text-on-video">
        <img src="{{asset('home-img/text logo.png') }}" alt="" class="text-on-vid">
      </div>
      <div class="brand">
        <div class="list-brand">
          <div class="item-brand">
            <img src="{{asset('img-brand/MG.png') }}" alt="">
          </div>
          <div class="item-brand">
            <img src="{{asset('img-brand/RGlogo.png') }}" alt="">
          </div>
          <div class="item-brand">
            <img src="{{asset('img-brand/Perfect_Grade_Modelo_gundam.svg.png') }}" alt="">
          </div>
          <div class="item-brand">
            <img src="{{asset('img-brand/izic2c.png') }}" alt="">
          </div>
          <div class="item-brand">
            <img src="{{asset('img-brand/HGSEEDlogo.png') }}" alt="">
          </div>
        </div>
      </div>
      <div class="banner my-5">
        <div class="item-banner">
          <img src="{{asset('home-img/b1591458243a517340e6af6ff6439efc.png') }}" class="img-banner" alt="" srcset="">
        </div>
        <div class="item-banner">
          <img src="{{asset('home-img/d5a3a4e479e87eeedaf8f36545c70988.png') }}" class="img-banner" alt="" srcset="">
        </div>
      </div>
    </div>

    <div class="model">
      <h1 class="title-model">Product New</h1>
      <div id="formList">
        <div id="list">
          <div class="model-card">
            <img class="model-img-top" src="{{asset('home-img/card-item.png') }}" alt="">
            <div class="model-card-content">
              <h2 class="model-card-title">
                Title
              </h2>
              <p class="model-card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aliquid sapiente cumque blanditiis
                quis
                in
              </p>
              <a href="#" class="model-btn">Add to cart</a>
              <a href="#" class="model-btn">Buy now</a>
            </div>
          </div>
          <div class="model-card">
            <img class="model-img-top" src="{{asset('home-img/card-item.png') }}" alt="">
            <div class="model-card-content">
              <h2 class="model-card-title">
                Title
              </h2>
              <p class="model-card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aliquid sapiente cumque blanditiis
                quis
                in
              </p>
              <a href="#" class="model-btn">Add to cart</a>
              <a href="#" class="model-btn">Buy now</a>
            </div>
          </div>
          <div class="model-card">
            <img class="model-img-top" src="{{asset('home-img/card-item.png') }}" alt="">
            <div class="model-card-content">
              <h2 class="model-card-title">
                Title
              </h2>
              <p class="model-card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aliquid sapiente cumque blanditiis
                quis
                in
              </p>
              <a href="#" class="model-btn">Add to cart</a>
              <a href="#" class="model-btn">Buy now</a>
            </div>
          </div>
          <div class="model-card">
            <img class="model-img-top" src="{{asset('home-img/card-item.png') }}" alt="">
            <div class="model-card-content">
              <h2 class="model-card-title">
                Title
              </h2>
              <p class="model-card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aliquid sapiente cumque blanditiis
                quis
                in
              </p>
              <a href="#" class="model-btn">Add to cart</a>
              <a href="#" class="model-btn">Buy now</a>
            </div>
          </div>
          <div class="model-card">
            <img class="model-img-top" src="{{asset('home-img/card-item.png') }}" alt="">
            <div class="model-card-content">
              <h2 class="model-card-title">
                Title
              </h2>
              <p class="model-card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aliquid sapiente cumque blanditiis
                quis
                in
              </p>
              <a href="#" class="model-btn">Add to cart</a>
              <a href="#" class="model-btn">Buy now</a>
            </div>
          </div>
        </div>


      </div>

      <div class="direction" style="padding: 20px;">
        <button id="prev"><i class="fa-solid fa-less-than"></i></button>
        <button id="next"><i class="fa-solid fa-greater-than"></i></button>
      </div>
    </div>

    <div class="news">
      <h1 class="title-model">News</h1>
      <div class="news-container">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('img-brand/HGSEEDlogo.png') }}" class="img-carousel d-block" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img-brand/izic2c.png') }}" class="img-carousel d-block" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img-brand/MG.png') }}" class="img-carousel d-block" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img-brand/Perfect_Grade_Modelo_gundam.svg.png') }}" class="img-carousel d-block" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Fourth slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
@endsection

@section('addCSS')
  <link rel="stylesheet" href="{{asset('css/home.css') }}">
@endsection

@section('addJS')
  <script src="{{asset('js/home.js') }}"></script>
@endsection