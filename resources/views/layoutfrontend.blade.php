<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Award Winning​ Design Agency, ​Our way, ​Partner with Codal
&amp;amp; strategize for the future, Meet The Team, ​We create and improve web &amp;amp; mobile products, Testimonials, About Us, Be the first to know, Contact Us">
    <meta name="description" content="">
    <title>Shop Gundam Online</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('frontend/css/Page-2.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('frontend/css/frontend.css') }}" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="{{asset('css/home.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/editbackend.css') }}"> -->
    <script class="u-script" type="text/javascript" src="{{ asset('frontend/js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('frontend/js/nicepage.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('frontend/js/scrip.js') }}" defer=""></script>
    <!-- <meta name="generator" content="Nicepage 5.14.0, nicepage.com"> -->
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
            <li><a href="{{url('/home')}}">{{$cate_home->category_name}}</a>
              <ul class="sub-menu">
              @foreach($brand as $brand_menu)
                @if ($cate_home->category_id == $brand_menu->category_id)
                <li><a href="">{{$brand_menu->brand_name}}</a></li>
                @endif
                <!-- <li><a href="">home 2</a></li>
                <li><a href="">home 3</a></li>
                <li><a href="">home 4</a></li> -->
              @endforeach
              </ul>
              
            </li>
            @endforeach
            <!-- <li><a href="{{url('/home')}}">Home</a></li>
            <li><a href="{{url('/home')}}">Home</a></li>
            <li><a href="{{url('/home')}}">Home</a></li> -->
          </ul>
          <!-- <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect></g></svg>
            </a>
          </div> -->
          <!-- <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1 category-cha">
              <a href="">
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link " href="{{url('/home')}}">Home</a>
            </li></a>
            @foreach($datas_cate as $cate_home)
            <li class="u-nav-item category-menu">
              <a class="u-button-style u-nav-link" href="{{url('/home')}}">{{$cate_home->category_name}}</a>
              <ul class="dropdown-menu category-menucon">
              @foreach($brand as $brand_menu)
                @if ($cate_home->category_id == $brand_menu->category_id)
                  <li><a class="dropdown-item" href="#">{{$brand_menu->brand_name}}</a></li>
                @endif
              @endforeach
              </ul>
            </li>
            @endforeach
          
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link " href="#" >Page 1</a>
            </li>
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link " href="#" >Page 2</a>
            </li> -->
            
          <!-- <div class="u-custom-menu u-nav-container-collapse">
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
          </div>  -->
        </nav>
    <!-- end header -->
    </div>
    </header>
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