<!DOCTYPE html>
  <html lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="">
    <title>Shop Gundam Online</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('frontend/css/Page-2.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('frontend/css/frontend.css') }}" media="screen">
    <!-- <link rel="stylesheet" href="{{asset('css/home.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/editbackend.css') }}"> -->
    <!-- link gg font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <!-- link css -->
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
    <script class="u-script" type="text/javascript" src="{{ asset('frontend/js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('frontend/js/nicepage.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('frontend/js/scrip.js') }}" defer=""></script>
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  
    
    <!-- <script type="application/ld+json">{
		"@context": "#",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script> -->
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 2">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en">
  <header class="u-clearfix u-header" id="sec-a76a">
      <div class="u-clearfix u-sheet u-sheet-1">
    <!-- header -->
        <a href="{{url('/home')}}" class="u-image u-logo u-image-1">
          <img src="{{ asset('images/logo-gundam.png') }}" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1 nav-menu">
        
          <ul id="main-menu">
            <li><a href="{{url('/home')}}">Home</a></li>
            @foreach($datas_cate as $cate_home)
            <li><a href="{{url('/show_category_detail/'.$cate_home->category_id )}}">{{$cate_home->category_name}}</a>
              <ul class="sub-menu">
              @foreach($brand as $brand_menu)
                @if ($brand_menu->category_id == $cate_home->category_id)
                  <li><a href="{{url('/show_category_detail/show_brand_detail/'.$brand_menu->brand_id)}}">{{$brand_menu->brand_name}}</a></li>
                @endif
              @endforeach
              </ul>
            </li>
            @endforeach
            <!--
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link " href="#" >Page 1</a>
            </li>
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link " href="#" >Page 2</a>
            </li> -->
            
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('/')}}">Home</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.html">Page 1</a>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link">News</a>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link">Shop card</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
    <!-- end header -->
    </div>
    </header>
    <!-- back to top -->
      <button class="back-to-top">
        <i class="fa-solid fa-arrow-up"></i>
      </button>
    <!-- end back to top -->
    <!-- Body-->
    @yield('content')
    <!-- end Body -->
    
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

    <script src="{{asset('js/app2.js') }}"></script>
    @yield('addJS')
</body>
</html>