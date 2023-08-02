<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gundam-X</title>
  <link rel="icon" href="{{asset('logo tách nền.png') }}" type="image/x-icon">
  <!-- link gg font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
  <!-- link css -->
  <link rel="stylesheet" href="{{asset('css/style.css') }}">
  @yield('addCSS')
  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- link font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- link jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- link jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
  <!-- loading page -->
<!-- <div id="loader">
    <div class="scene">
      <div class="cube-wrapper">
        <div class="cube">
          <div class="cube-faces">
            <div class="cube-face shadow"></div>
            <div class="cube-face bottom"></div>
            <div class="cube-face top"></div>
            <div class="cube-face left"></div>
            <div class="cube-face right"></div>
            <div class="cube-face back"></div>
            <div class="cube-face front"></div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
<!-- end loading page -->

<!-- back to top -->
  <button class="back-to-top">
    <i class="fa-solid fa-arrow-up"></i>
  </button>
<!-- end back to top -->

<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a href="{{url('/')}}">
        <img src="{{asset('logo tách nền.png') }}" alt="" width="80px" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
          @foreach($datas_cate as $cate)
            <a class="nav-link dropdown-toggle" href="model.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{$cate->category_name}}
            </a>
          @endforeach
            <ul class="dropdown-menu">
            @foreach($brand as $brand)
              <li><a class="dropdown-item" href="{{url('model')}}?brand={{$brand->brand_name}}">{{$brand->brand_name}}</a></li>
            @endforeach
            </ul>
          </li>
          @foreach($datas_categ as $cate)
          <li class="nav-item">
            <a class="nav-link" href="">{{$cate ->category_name}}</a>
          </li>
          @endforeach
          <li class="nav-item">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </li>
          <li class="nav-item">
            <i class="fa-solid fa-cart-shopping"></i>
          </li>
          <li class="nav-item">
            @if (session('user_name'))
              <div style="display: flex;">
                <a href="{{url('profile/'.session('id'))}}" class="nav-link">
                  <i class="fa-solid fa-user"></i> {{ session('user_name') }}
                </a>
                  <a class="nav-link" href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i></a>
              </div>
            @elseif(session('user_name') == null)
                <a href="{{ route('showLogin') }}" class="btn btn-primary">Login</a>
            @endif
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- end header -->

  <!-- body-content -->
  <main role="main">
    <!-- <div class="container"> -->
      @yield('content')
    <!-- </div> -->
  </main>
  <!-- end body-content -->
  <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Text -->
    <section class="mb-4">
      <h1>GUNDAM - X</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="home.html">gundam-x.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- js -->
  <script src="{{asset('js/app2.js') }}"></script>
  @yield('addJS')

</body>

</html>
