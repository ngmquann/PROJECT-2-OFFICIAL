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
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    @yield('addCSS')
    <!-- <link rel="stylesheet" href="{{asset('css/home.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/editbackend.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script class="u-script" type="text/javascript" src="{{ asset('frontend/js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('frontend/js/nicepage.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('frontend/js/scrip.js') }}" defer=""></script>
    <!-- <meta name="generator" content="Nicepage 5.14.0, nicepage.com"> -->
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- link jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    
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
          </ul>
        </nav>
    <!-- end header -->
    </div>
    </header>
    <!-- Body-->
    @yield('contents')
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
    <script src="{{asset('js/app2.js') }}"></script>
    @yield('addJS')
</body></html>