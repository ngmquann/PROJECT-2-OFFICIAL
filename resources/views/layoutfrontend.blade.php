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
            @foreach($cate_edit as $cate_home)
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
    @yield('home')
    <!-- end Body -->

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9fd8"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the Text Element.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="#" target="_blank">
        <span>Website Gundam</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>.
    </section>

</body></html>
