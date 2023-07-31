@extends('layoutfrontend')
@section('home')
<section class="u-align-center u-clearfix u-image u-valign-middle u-section-1 homesection" id="carousel_3ef8" data-image-width="1980" data-image-height="1320">
<main role="main">
<div class="video">
      <video muted loop autoplay>
        <source src="{{asset('video/738de74052df4dd2be35d60d7ce1b4610aee6269b9ff44d4baeb5a004f46f3f3.mp4') }}" type="video/mp4" asp-append-version="true">
      </video>
    </div>
    <div class="overlay"></div>
    <div class="first-content">
      <div class="text-on-video">
        <img src="{{asset('home-img/text logo.png') }}" alt="" class="text-on-vid">
      </div>
      <!-- <div class="brand">
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
      </div> -->
      <!-- <div class="banner my-5">
        <div class="item-banner">
          <img src="{{asset('home-img/b1591458243a517340e6af6ff6439efc.png') }}" class="img-banner" alt="" srcset="">
        </div>
        <div class="item-banner">
          <img src="{{asset('home-img/d5a3a4e479e87eeedaf8f36545c70988.png') }}" class="img-banner" alt="" srcset="">
        </div>
      </div> -->
    </div>
    <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-left u-border-7 u-border-no-bottom u-border-no-left u-border-no-right u-border-palette-2-base u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-1" data-animation-name="customAnimationIn" ><img src="{{asset('img-brand/MG.png') }}" alt=""></span>
              <h4 class="u-custom-font u-font-roboto-condensed u-text u-text-4">Brand MG</h4>
              <a href="https://nicepage.site" class="u-border-1 u-border-active-grey-70 u-border-black u-border-hover-grey-70 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-none u-radius-0 u-text-active-palette-2-base u-text-body-color u-text-hover-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-3">more</a>
            </div>
          </div>
          <div class="u-align-left u-border-7 u-border-no-bottom u-border-no-left u-border-no-right u-border-palette-2-base u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-2" data-animation-name="customAnimationIn" ><img src="{{asset('img-brand/RGlogo.png') }}" alt=""></span>
              <h4 class="u-custom-font u-font-roboto-condensed u-text u-text-5">Brand RG</h4>
              <a href="https://nicepage.site" class="u-border-1 u-border-active-grey-70 u-border-black u-border-hover-grey-70 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-none u-radius-0 u-text-active-palette-2-base u-text-body-color u-text-hover-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-4">more</a>
            </div>
          </div>
          <div class="u-align-left u-border-7 u-border-no-bottom u-border-no-left u-border-no-right u-border-palette-2-base u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-3" data-animation-name="customAnimationIn" ><img src="{{asset('img-brand/izic2c.png') }}" alt=""></span>
              <h4 class="u-custom-font u-font-roboto-condensed u-text u-text-6">KOTOBUKIYA</h4>
              <a href="https://nicepage.online" class="u-border-1 u-border-active-grey-70 u-border-black u-border-hover-grey-70 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-none u-radius-0 u-text-active-palette-2-base u-text-body-color u-text-hover-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-5">more</a>
            </div>
          </div>
          <div class="u-align-left u-border-7 u-border-no-bottom u-border-no-left u-border-no-right u-border-palette-2-base u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-4" data-animation-name="customAnimationIn" ><img src="{{asset('img-brand/HGSEEDlogo.png') }}" alt=""></span>
              <h4 class="u-custom-font u-font-roboto-condensed u-text u-text-7">Brand HG</h4>
              <a href="https://nicepage.com/c/pricing-website-templates" class="u-border-1 u-border-active-grey-70 u-border-black u-border-hover-grey-70 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-none u-radius-0 u-text-active-palette-2-base u-text-body-color u-text-hover-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-6">more</a>
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
    </main>    

    </section>
     
    <section class="u-align-center u-clearfix u-grey-5 u-section-2 backgroudsection" id="sec-67ac">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Product News</h2>
        <div class="u-expanded-width u-gallery u-layout-horizontal u-lightbox u-no-transition u-show-text-on-hover u-width-fixed u-gallery-1">
          <div class="u-gallery-inner">
          @foreach($producthome as $pro_new)
          <div class="u-effect-fade u-gallery-item u-gallery-item-1 card">
            
            <div class="u-back-slide effectslide">
              <img class="u-back-image u-back-image-1" src="{{asset("/images/$pro_new->image")}}">
            </div>
              <div class="u-over-slide u-shading u-valign-bottom u-over-slide-1 edit">
                <h2 class="title-product">{{$pro_new->product_name}}</h2>
                
                  <p class="price-product"><span>Price: </span><span class="edit-price">{{$pro_new->product_price}}$</span></p>
                
              </div>
          </div>
          @endforeach
          <!-- <div class="u-effect-fade u-gallery-item u-gallery-item-2">
            <div class="u-back-slide">
              <img class="u-back-image u-back-image-2" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJkZWZhdWx0LWltYWdlLXNvbGlkIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDAwIDI2NSIgc3R5bGU9IndpZHRoOiA0MDBweDsgaGVpZ2h0OiAyNjVweDsiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyNjUiLz4NCjxwYXRoIGZpbGw9IiNEOUUzRTgiIGQ9Ik0zOTUuMyw5Ni4yYy01LTAuOC02LjEsMS4xLTguNSwyLjljLTEtMi4zLTIuNi02LjItNy43LTVjMS41LTUuMy0yLjYtOC40LTcuNy04LjRjLTAuNiwwLTEuMiwwLjEtMS44LDAuMg0KCWMtMS44LTQuMS02LTYuOS0xMC43LTYuOWMtNi41LDAtMTEuOCw1LjMtMTEuOCwxMS44YzAsMC40LDAsMC45LDAuMSwxLjNjLTEuMi0wLjgtMi41LTEuMy0zLjktMS4zYy00LjMsMC03LjksNC4yLTcuOSw5LjQNCgljMCwxLjIsMC4yLDIuNCwwLjYsMy41Yy0wLjUtMC4xLTEtMC4xLTEuNi0wLjFjLTYuOSwwLTEyLjUsNS41LTEyLjcsMTIuNGMtMC45LTAuMi0xLjktMC40LTIuOS0wLjRjLTYuNCwwLTExLjcsNS4yLTEyLjUsMTEuOA0KCWMtMS4yLTAuNC0yLjUtMC42LTMuOS0wLjZjLTUuOSwwLTEwLjgsMy44LTEyLjEsOC45Yy0yLjQtMi01LjUtMy4yLTguOS0zLjJjLTYsMC0xMS4xLDMuNy0xMi44LDguOGMtMS41LTEuNC0zLjgtMi4zLTYuMy0yLjMNCgljLTIuMSwwLTQuMSwwLjYtNS41LDEuN2gtMC4xYy0xLjMtNS41LTYuMi05LjUtMTIuMS05LjVjLTIuNCwwLTQuNywwLjctNi42LDEuOWMtMS40LTAuNy0zLTEuMi00LjgtMS4yYy0wLjMsMC0wLjUsMC0wLjgsMA0KCWMtMS41LTQuMS01LjItNy05LjUtN2MtMy4xLDAtNS45LDEuNS03LjgsMy45Yy0yLjItNC44LTYuOC04LjItMTIuMi04LjJjLTUuNiwwLTEwLjUsMy43LTEyLjUsOC44Yy0yLjEtMC45LTQuNC0xLjUtNi45LTEuNQ0KCWMtNi44LDAtMTIuNSwzLjktMTQuNSw5LjNjLTAuMiwwLTAuNSwwLTAuNywwYy01LjIsMC05LjYsMy4yLTExLjQsNy44Yy0yLjctMi44LTctNC41LTExLjgtNC41Yy0zLjMsMC02LjQsMC45LTguOSwyLjMNCgljLTIuMS02LjUtOC0xMi4yLTE4LjEtOS45Yy0yLjctMi4zLTYuMy0zLjctMTAuMS0zLjdjLTIuNSwwLTQuOCwwLjYtNi45LDEuNmMtMi4yLTUuOS03LjktMTAuMS0xNC42LTEwLjFjLTguNiwwLTE1LjYsNy0xNS42LDE1LjYNCgljMCwwLjksMC4xLDEuNywwLjIsMi41Yy0yLjYtNS03LjgtOC40LTEzLjgtOC40Yy04LjMsMC0xNS4xLDYuNS0xNS42LDE0LjZjLTIuOS0zLjItNy01LjMtMTEuNy01LjNjLTcuNCwwLTEzLjUsNS4xLTE1LjIsMTINCgljLTIuOS0zLjUtOS44LTYtMTQuNy02djExOS4yaDQwMFYxMDJDNDAwLDEwMiw0MDAsOTcsMzk1LjMsOTYuMnoiLz4NCjxwYXRoIGZpbGw9IiM4RUE4QkIiIGQ9Ik00MDAsMjA2LjJjMCwwLTI1LjMtMTkuMi0zMy42LTI1LjdjLTEzLjQtMTAuNi0yMy4xLTEyLjktMzEuNy03cy0yMy45LDE5LjctMjMuOSwxOS43cy01OC45LTYzLjktNjEuNS02Ni40DQoJYy0xLjUtMS40LTMuNi0xLjctNS41LTAuOWMtNS4yLDIuNC0xNy42LDkuNy0yNC41LDEyLjdjLTYuOSwyLjktNDEtNTAuNy00OS42LTUzcy04NC4zLDgzLjMtMTAxLjQsNzUuMXMtMjYuOS0yLjMtMzUuNCwzLjUNCgljLTguNiw1LjktMTEsNS45LTE1LjksOC4ycy0xNy4xLTUuOS0xNy4xLTUuOVYyNjVjMCwwLDQwMCwwLjIsNDAwLDB2LTU4LjhINDAweiIvPg0KPHBhdGggZmlsbD0iIzdFOTZBNiIgZD0iTTMzMy40LDE3OWMtMTMuMS05LjMtNDAsNC42LTU1LjEsMTAuN2MtMjMuNiw5LjYtOTQtNTQuNC0xMDcuMi01OS43YzAsMC00LjIsMy43LTkuNiw3LjYNCgljLTMuNS0wLjQtOC40LTUuNy05LjktNC43Yy00LjYsMy4xLTE3LjgsMTUuNC0yOC4zLDI2LjZjLTEwLjUsMTEuMy0xMS43LDAtMTUuOC0wLjZjLTIuNS0wLjQtNTQuMSw0Mi41LTU4LjcsNDMuMQ0KCUMyMi4zLDIwNS4zLDAsMTk3LjUsMCwxOTcuNVYyNjVsNDAwLTAuMXYtNTMuM0M0MDAsMjExLjYsMzQ0LjgsMTg3LjEsMzMzLjQsMTc5eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTAsMjY0Ljl2LTU4LjZjMCwwLDguMiwxLjgsMTEuMyw1LjNjMy4xLDMuNiwyNi4xLTQuMiwyNi4xLDQuN3MwLjUsNC4yLDAuNSwxNC44YzAsMTAuNywyMy00LjIsMzguMS0xOC40DQoJczM0LjktNDkuMiwzNi0zNWMxLDE0LjItMTUuMSwzOS4yLTI0LDU2LjRDNzkuMSwyNTEuNCw1MS43LDI2NSw1MS43LDI2NUwwLDI2NC45eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTEwMCwyNjVjMCwwLDY2LjctMTI1LjEsNjguMy0xMTYuOHMtNi44LDI5LjcsMi4xLDI2LjFjOC45LTMuNiwxNC42LTE2LDE4LjgtOS41czE2LjIsMzguNiwyMS45LDMzLjgNCgljNS43LTQuNywyMS40LTEzLjEsMjIuNC02LjVjMSw2LjUtMSw1LjMtNS43LDIwLjJDMjIzLjEsMjI3LjEsMjAwLDI2NSwyMDAsMjY1aC0xMGMwLDAsNi0yNC44LDguNi0zNC45YzIuNi0xMC4xLTMuNy0xOS0xMi04LjMNCglzLTIzLDIyLTI0LDE3LjhzLTUuNy0zMC4zLTE4LjgtMTQuMmMtMTMsMTYtMzMuOCwzOS43LTMzLjgsMzkuN2gtMTBWMjY1eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTI0NSwyNjVjMCwwLDE5LjgtNTQuNywzMy40LTY0LjJzNTMuNy0yNy45LDQ2LjktMTMuNmMtNi44LDE0LjItMTEsMzQuNC0yMC4zLDQ5LjgNCgljLTkuNCwxNS40LTE4LjgsMjYuMS0xNC4xLDEzLjZjNC43LTEyLjUsNi40LTIzLjMsMy43LTIzLjFDMjcxLjMsMjI5LjEsMjYwLDI2NSwyNjAsMjY1SDI0NXoiLz4NCjwvc3ZnPg0K">
            </div>
              <div class="u-over-slide u-shading u-valign-bottom u-over-slide-2"></div>
          </div> -->
          <!-- <div class="u-effect-fade u-gallery-item u-gallery-item-3"><div class="u-back-slide"><img class="u-back-image u-back-image-3" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJkZWZhdWx0LWltYWdlLXNvbGlkIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDAwIDI2NSIgc3R5bGU9IndpZHRoOiA0MDBweDsgaGVpZ2h0OiAyNjVweDsiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyNjUiLz4NCjxwYXRoIGZpbGw9IiNEOUUzRTgiIGQ9Ik0zOTUuMyw5Ni4yYy01LTAuOC02LjEsMS4xLTguNSwyLjljLTEtMi4zLTIuNi02LjItNy43LTVjMS41LTUuMy0yLjYtOC40LTcuNy04LjRjLTAuNiwwLTEuMiwwLjEtMS44LDAuMg0KCWMtMS44LTQuMS02LTYuOS0xMC43LTYuOWMtNi41LDAtMTEuOCw1LjMtMTEuOCwxMS44YzAsMC40LDAsMC45LDAuMSwxLjNjLTEuMi0wLjgtMi41LTEuMy0zLjktMS4zYy00LjMsMC03LjksNC4yLTcuOSw5LjQNCgljMCwxLjIsMC4yLDIuNCwwLjYsMy41Yy0wLjUtMC4xLTEtMC4xLTEuNi0wLjFjLTYuOSwwLTEyLjUsNS41LTEyLjcsMTIuNGMtMC45LTAuMi0xLjktMC40LTIuOS0wLjRjLTYuNCwwLTExLjcsNS4yLTEyLjUsMTEuOA0KCWMtMS4yLTAuNC0yLjUtMC42LTMuOS0wLjZjLTUuOSwwLTEwLjgsMy44LTEyLjEsOC45Yy0yLjQtMi01LjUtMy4yLTguOS0zLjJjLTYsMC0xMS4xLDMuNy0xMi44LDguOGMtMS41LTEuNC0zLjgtMi4zLTYuMy0yLjMNCgljLTIuMSwwLTQuMSwwLjYtNS41LDEuN2gtMC4xYy0xLjMtNS41LTYuMi05LjUtMTIuMS05LjVjLTIuNCwwLTQuNywwLjctNi42LDEuOWMtMS40LTAuNy0zLTEuMi00LjgtMS4yYy0wLjMsMC0wLjUsMC0wLjgsMA0KCWMtMS41LTQuMS01LjItNy05LjUtN2MtMy4xLDAtNS45LDEuNS03LjgsMy45Yy0yLjItNC44LTYuOC04LjItMTIuMi04LjJjLTUuNiwwLTEwLjUsMy43LTEyLjUsOC44Yy0yLjEtMC45LTQuNC0xLjUtNi45LTEuNQ0KCWMtNi44LDAtMTIuNSwzLjktMTQuNSw5LjNjLTAuMiwwLTAuNSwwLTAuNywwYy01LjIsMC05LjYsMy4yLTExLjQsNy44Yy0yLjctMi44LTctNC41LTExLjgtNC41Yy0zLjMsMC02LjQsMC45LTguOSwyLjMNCgljLTIuMS02LjUtOC0xMi4yLTE4LjEtOS45Yy0yLjctMi4zLTYuMy0zLjctMTAuMS0zLjdjLTIuNSwwLTQuOCwwLjYtNi45LDEuNmMtMi4yLTUuOS03LjktMTAuMS0xNC42LTEwLjFjLTguNiwwLTE1LjYsNy0xNS42LDE1LjYNCgljMCwwLjksMC4xLDEuNywwLjIsMi41Yy0yLjYtNS03LjgtOC40LTEzLjgtOC40Yy04LjMsMC0xNS4xLDYuNS0xNS42LDE0LjZjLTIuOS0zLjItNy01LjMtMTEuNy01LjNjLTcuNCwwLTEzLjUsNS4xLTE1LjIsMTINCgljLTIuOS0zLjUtOS44LTYtMTQuNy02djExOS4yaDQwMFYxMDJDNDAwLDEwMiw0MDAsOTcsMzk1LjMsOTYuMnoiLz4NCjxwYXRoIGZpbGw9IiM4RUE4QkIiIGQ9Ik00MDAsMjA2LjJjMCwwLTI1LjMtMTkuMi0zMy42LTI1LjdjLTEzLjQtMTAuNi0yMy4xLTEyLjktMzEuNy03cy0yMy45LDE5LjctMjMuOSwxOS43cy01OC45LTYzLjktNjEuNS02Ni40DQoJYy0xLjUtMS40LTMuNi0xLjctNS41LTAuOWMtNS4yLDIuNC0xNy42LDkuNy0yNC41LDEyLjdjLTYuOSwyLjktNDEtNTAuNy00OS42LTUzcy04NC4zLDgzLjMtMTAxLjQsNzUuMXMtMjYuOS0yLjMtMzUuNCwzLjUNCgljLTguNiw1LjktMTEsNS45LTE1LjksOC4ycy0xNy4xLTUuOS0xNy4xLTUuOVYyNjVjMCwwLDQwMCwwLjIsNDAwLDB2LTU4LjhINDAweiIvPg0KPHBhdGggZmlsbD0iIzdFOTZBNiIgZD0iTTMzMy40LDE3OWMtMTMuMS05LjMtNDAsNC42LTU1LjEsMTAuN2MtMjMuNiw5LjYtOTQtNTQuNC0xMDcuMi01OS43YzAsMC00LjIsMy43LTkuNiw3LjYNCgljLTMuNS0wLjQtOC40LTUuNy05LjktNC43Yy00LjYsMy4xLTE3LjgsMTUuNC0yOC4zLDI2LjZjLTEwLjUsMTEuMy0xMS43LDAtMTUuOC0wLjZjLTIuNS0wLjQtNTQuMSw0Mi41LTU4LjcsNDMuMQ0KCUMyMi4zLDIwNS4zLDAsMTk3LjUsMCwxOTcuNVYyNjVsNDAwLTAuMXYtNTMuM0M0MDAsMjExLjYsMzQ0LjgsMTg3LjEsMzMzLjQsMTc5eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTAsMjY0Ljl2LTU4LjZjMCwwLDguMiwxLjgsMTEuMyw1LjNjMy4xLDMuNiwyNi4xLTQuMiwyNi4xLDQuN3MwLjUsNC4yLDAuNSwxNC44YzAsMTAuNywyMy00LjIsMzguMS0xOC40DQoJczM0LjktNDkuMiwzNi0zNWMxLDE0LjItMTUuMSwzOS4yLTI0LDU2LjRDNzkuMSwyNTEuNCw1MS43LDI2NSw1MS43LDI2NUwwLDI2NC45eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTEwMCwyNjVjMCwwLDY2LjctMTI1LjEsNjguMy0xMTYuOHMtNi44LDI5LjcsMi4xLDI2LjFjOC45LTMuNiwxNC42LTE2LDE4LjgtOS41czE2LjIsMzguNiwyMS45LDMzLjgNCgljNS43LTQuNywyMS40LTEzLjEsMjIuNC02LjVjMSw2LjUtMSw1LjMtNS43LDIwLjJDMjIzLjEsMjI3LjEsMjAwLDI2NSwyMDAsMjY1aC0xMGMwLDAsNi0yNC44LDguNi0zNC45YzIuNi0xMC4xLTMuNy0xOS0xMi04LjMNCglzLTIzLDIyLTI0LDE3LjhzLTUuNy0zMC4zLTE4LjgtMTQuMmMtMTMsMTYtMzMuOCwzOS43LTMzLjgsMzkuN2gtMTBWMjY1eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTI0NSwyNjVjMCwwLDE5LjgtNTQuNywzMy40LTY0LjJzNTMuNy0yNy45LDQ2LjktMTMuNmMtNi44LDE0LjItMTEsMzQuNC0yMC4zLDQ5LjgNCgljLTkuNCwxNS40LTE4LjgsMjYuMS0xNC4xLDEzLjZjNC43LTEyLjUsNi40LTIzLjMsMy43LTIzLjFDMjcxLjMsMjI5LjEsMjYwLDI2NSwyNjAsMjY1SDI0NXoiLz4NCjwvc3ZnPg0K">
          </div><div class="u-over-slide u-shading u-valign-bottom u-over-slide-3"></div>
          </div><div class="u-effect-fade u-gallery-item u-gallery-item-4"><div class="u-back-slide"><img class="u-back-image u-back-image-4" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJkZWZhdWx0LWltYWdlLXNvbGlkIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDAwIDI2NSIgc3R5bGU9IndpZHRoOiA0MDBweDsgaGVpZ2h0OiAyNjVweDsiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyNjUiLz4NCjxwYXRoIGZpbGw9IiNEOUUzRTgiIGQ9Ik0zOTUuMyw5Ni4yYy01LTAuOC02LjEsMS4xLTguNSwyLjljLTEtMi4zLTIuNi02LjItNy43LTVjMS41LTUuMy0yLjYtOC40LTcuNy04LjRjLTAuNiwwLTEuMiwwLjEtMS44LDAuMg0KCWMtMS44LTQuMS02LTYuOS0xMC43LTYuOWMtNi41LDAtMTEuOCw1LjMtMTEuOCwxMS44YzAsMC40LDAsMC45LDAuMSwxLjNjLTEuMi0wLjgtMi41LTEuMy0zLjktMS4zYy00LjMsMC03LjksNC4yLTcuOSw5LjQNCgljMCwxLjIsMC4yLDIuNCwwLjYsMy41Yy0wLjUtMC4xLTEtMC4xLTEuNi0wLjFjLTYuOSwwLTEyLjUsNS41LTEyLjcsMTIuNGMtMC45LTAuMi0xLjktMC40LTIuOS0wLjRjLTYuNCwwLTExLjcsNS4yLTEyLjUsMTEuOA0KCWMtMS4yLTAuNC0yLjUtMC42LTMuOS0wLjZjLTUuOSwwLTEwLjgsMy44LTEyLjEsOC45Yy0yLjQtMi01LjUtMy4yLTguOS0zLjJjLTYsMC0xMS4xLDMuNy0xMi44LDguOGMtMS41LTEuNC0zLjgtMi4zLTYuMy0yLjMNCgljLTIuMSwwLTQuMSwwLjYtNS41LDEuN2gtMC4xYy0xLjMtNS41LTYuMi05LjUtMTIuMS05LjVjLTIuNCwwLTQuNywwLjctNi42LDEuOWMtMS40LTAuNy0zLTEuMi00LjgtMS4yYy0wLjMsMC0wLjUsMC0wLjgsMA0KCWMtMS41LTQuMS01LjItNy05LjUtN2MtMy4xLDAtNS45LDEuNS03LjgsMy45Yy0yLjItNC44LTYuOC04LjItMTIuMi04LjJjLTUuNiwwLTEwLjUsMy43LTEyLjUsOC44Yy0yLjEtMC45LTQuNC0xLjUtNi45LTEuNQ0KCWMtNi44LDAtMTIuNSwzLjktMTQuNSw5LjNjLTAuMiwwLTAuNSwwLTAuNywwYy01LjIsMC05LjYsMy4yLTExLjQsNy44Yy0yLjctMi44LTctNC41LTExLjgtNC41Yy0zLjMsMC02LjQsMC45LTguOSwyLjMNCgljLTIuMS02LjUtOC0xMi4yLTE4LjEtOS45Yy0yLjctMi4zLTYuMy0zLjctMTAuMS0zLjdjLTIuNSwwLTQuOCwwLjYtNi45LDEuNmMtMi4yLTUuOS03LjktMTAuMS0xNC42LTEwLjFjLTguNiwwLTE1LjYsNy0xNS42LDE1LjYNCgljMCwwLjksMC4xLDEuNywwLjIsMi41Yy0yLjYtNS03LjgtOC40LTEzLjgtOC40Yy04LjMsMC0xNS4xLDYuNS0xNS42LDE0LjZjLTIuOS0zLjItNy01LjMtMTEuNy01LjNjLTcuNCwwLTEzLjUsNS4xLTE1LjIsMTINCgljLTIuOS0zLjUtOS44LTYtMTQuNy02djExOS4yaDQwMFYxMDJDNDAwLDEwMiw0MDAsOTcsMzk1LjMsOTYuMnoiLz4NCjxwYXRoIGZpbGw9IiM4RUE4QkIiIGQ9Ik00MDAsMjA2LjJjMCwwLTI1LjMtMTkuMi0zMy42LTI1LjdjLTEzLjQtMTAuNi0yMy4xLTEyLjktMzEuNy03cy0yMy45LDE5LjctMjMuOSwxOS43cy01OC45LTYzLjktNjEuNS02Ni40DQoJYy0xLjUtMS40LTMuNi0xLjctNS41LTAuOWMtNS4yLDIuNC0xNy42LDkuNy0yNC41LDEyLjdjLTYuOSwyLjktNDEtNTAuNy00OS42LTUzcy04NC4zLDgzLjMtMTAxLjQsNzUuMXMtMjYuOS0yLjMtMzUuNCwzLjUNCgljLTguNiw1LjktMTEsNS45LTE1LjksOC4ycy0xNy4xLTUuOS0xNy4xLTUuOVYyNjVjMCwwLDQwMCwwLjIsNDAwLDB2LTU4LjhINDAweiIvPg0KPHBhdGggZmlsbD0iIzdFOTZBNiIgZD0iTTMzMy40LDE3OWMtMTMuMS05LjMtNDAsNC42LTU1LjEsMTAuN2MtMjMuNiw5LjYtOTQtNTQuNC0xMDcuMi01OS43YzAsMC00LjIsMy43LTkuNiw3LjYNCgljLTMuNS0wLjQtOC40LTUuNy05LjktNC43Yy00LjYsMy4xLTE3LjgsMTUuNC0yOC4zLDI2LjZjLTEwLjUsMTEuMy0xMS43LDAtMTUuOC0wLjZjLTIuNS0wLjQtNTQuMSw0Mi41LTU4LjcsNDMuMQ0KCUMyMi4zLDIwNS4zLDAsMTk3LjUsMCwxOTcuNVYyNjVsNDAwLTAuMXYtNTMuM0M0MDAsMjExLjYsMzQ0LjgsMTg3LjEsMzMzLjQsMTc5eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTAsMjY0Ljl2LTU4LjZjMCwwLDguMiwxLjgsMTEuMyw1LjNjMy4xLDMuNiwyNi4xLTQuMiwyNi4xLDQuN3MwLjUsNC4yLDAuNSwxNC44YzAsMTAuNywyMy00LjIsMzguMS0xOC40DQoJczM0LjktNDkuMiwzNi0zNWMxLDE0LjItMTUuMSwzOS4yLTI0LDU2LjRDNzkuMSwyNTEuNCw1MS43LDI2NSw1MS43LDI2NUwwLDI2NC45eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTEwMCwyNjVjMCwwLDY2LjctMTI1LjEsNjguMy0xMTYuOHMtNi44LDI5LjcsMi4xLDI2LjFjOC45LTMuNiwxNC42LTE2LDE4LjgtOS41czE2LjIsMzguNiwyMS45LDMzLjgNCgljNS43LTQuNywyMS40LTEzLjEsMjIuNC02LjVjMSw2LjUtMSw1LjMtNS43LDIwLjJDMjIzLjEsMjI3LjEsMjAwLDI2NSwyMDAsMjY1aC0xMGMwLDAsNi0yNC44LDguNi0zNC45YzIuNi0xMC4xLTMuNy0xOS0xMi04LjMNCglzLTIzLDIyLTI0LDE3LjhzLTUuNy0zMC4zLTE4LjgtMTQuMmMtMTMsMTYtMzMuOCwzOS43LTMzLjgsMzkuN2gtMTBWMjY1eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTI0NSwyNjVjMCwwLDE5LjgtNTQuNywzMy40LTY0LjJzNTMuNy0yNy45LDQ2LjktMTMuNmMtNi44LDE0LjItMTEsMzQuNC0yMC4zLDQ5LjgNCgljLTkuNCwxNS40LTE4LjgsMjYuMS0xNC4xLDEzLjZjNC43LTEyLjUsNi40LTIzLjMsMy43LTIzLjFDMjcxLjMsMjI5LjEsMjYwLDI2NSwyNjAsMjY1SDI0NXoiLz4NCjwvc3ZnPg0K">
          </div><div class="u-over-slide u-shading u-valign-bottom u-over-slide-4"></div>
          </div><div class="u-effect-fade u-gallery-item u-gallery-item-5"><div class="u-back-slide"><img class="u-back-image u-back-image-5" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJkZWZhdWx0LWltYWdlLXNvbGlkIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDAwIDI2NSIgc3R5bGU9IndpZHRoOiA0MDBweDsgaGVpZ2h0OiAyNjVweDsiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyNjUiLz4NCjxwYXRoIGZpbGw9IiNEOUUzRTgiIGQ9Ik0zOTUuMyw5Ni4yYy01LTAuOC02LjEsMS4xLTguNSwyLjljLTEtMi4zLTIuNi02LjItNy43LTVjMS41LTUuMy0yLjYtOC40LTcuNy04LjRjLTAuNiwwLTEuMiwwLjEtMS44LDAuMg0KCWMtMS44LTQuMS02LTYuOS0xMC43LTYuOWMtNi41LDAtMTEuOCw1LjMtMTEuOCwxMS44YzAsMC40LDAsMC45LDAuMSwxLjNjLTEuMi0wLjgtMi41LTEuMy0zLjktMS4zYy00LjMsMC03LjksNC4yLTcuOSw5LjQNCgljMCwxLjIsMC4yLDIuNCwwLjYsMy41Yy0wLjUtMC4xLTEtMC4xLTEuNi0wLjFjLTYuOSwwLTEyLjUsNS41LTEyLjcsMTIuNGMtMC45LTAuMi0xLjktMC40LTIuOS0wLjRjLTYuNCwwLTExLjcsNS4yLTEyLjUsMTEuOA0KCWMtMS4yLTAuNC0yLjUtMC42LTMuOS0wLjZjLTUuOSwwLTEwLjgsMy44LTEyLjEsOC45Yy0yLjQtMi01LjUtMy4yLTguOS0zLjJjLTYsMC0xMS4xLDMuNy0xMi44LDguOGMtMS41LTEuNC0zLjgtMi4zLTYuMy0yLjMNCgljLTIuMSwwLTQuMSwwLjYtNS41LDEuN2gtMC4xYy0xLjMtNS41LTYuMi05LjUtMTIuMS05LjVjLTIuNCwwLTQuNywwLjctNi42LDEuOWMtMS40LTAuNy0zLTEuMi00LjgtMS4yYy0wLjMsMC0wLjUsMC0wLjgsMA0KCWMtMS41LTQuMS01LjItNy05LjUtN2MtMy4xLDAtNS45LDEuNS03LjgsMy45Yy0yLjItNC44LTYuOC04LjItMTIuMi04LjJjLTUuNiwwLTEwLjUsMy43LTEyLjUsOC44Yy0yLjEtMC45LTQuNC0xLjUtNi45LTEuNQ0KCWMtNi44LDAtMTIuNSwzLjktMTQuNSw5LjNjLTAuMiwwLTAuNSwwLTAuNywwYy01LjIsMC05LjYsMy4yLTExLjQsNy44Yy0yLjctMi44LTctNC41LTExLjgtNC41Yy0zLjMsMC02LjQsMC45LTguOSwyLjMNCgljLTIuMS02LjUtOC0xMi4yLTE4LjEtOS45Yy0yLjctMi4zLTYuMy0zLjctMTAuMS0zLjdjLTIuNSwwLTQuOCwwLjYtNi45LDEuNmMtMi4yLTUuOS03LjktMTAuMS0xNC42LTEwLjFjLTguNiwwLTE1LjYsNy0xNS42LDE1LjYNCgljMCwwLjksMC4xLDEuNywwLjIsMi41Yy0yLjYtNS03LjgtOC40LTEzLjgtOC40Yy04LjMsMC0xNS4xLDYuNS0xNS42LDE0LjZjLTIuOS0zLjItNy01LjMtMTEuNy01LjNjLTcuNCwwLTEzLjUsNS4xLTE1LjIsMTINCgljLTIuOS0zLjUtOS44LTYtMTQuNy02djExOS4yaDQwMFYxMDJDNDAwLDEwMiw0MDAsOTcsMzk1LjMsOTYuMnoiLz4NCjxwYXRoIGZpbGw9IiM4RUE4QkIiIGQ9Ik00MDAsMjA2LjJjMCwwLTI1LjMtMTkuMi0zMy42LTI1LjdjLTEzLjQtMTAuNi0yMy4xLTEyLjktMzEuNy03cy0yMy45LDE5LjctMjMuOSwxOS43cy01OC45LTYzLjktNjEuNS02Ni40DQoJYy0xLjUtMS40LTMuNi0xLjctNS41LTAuOWMtNS4yLDIuNC0xNy42LDkuNy0yNC41LDEyLjdjLTYuOSwyLjktNDEtNTAuNy00OS42LTUzcy04NC4zLDgzLjMtMTAxLjQsNzUuMXMtMjYuOS0yLjMtMzUuNCwzLjUNCgljLTguNiw1LjktMTEsNS45LTE1LjksOC4ycy0xNy4xLTUuOS0xNy4xLTUuOVYyNjVjMCwwLDQwMCwwLjIsNDAwLDB2LTU4LjhINDAweiIvPg0KPHBhdGggZmlsbD0iIzdFOTZBNiIgZD0iTTMzMy40LDE3OWMtMTMuMS05LjMtNDAsNC42LTU1LjEsMTAuN2MtMjMuNiw5LjYtOTQtNTQuNC0xMDcuMi01OS43YzAsMC00LjIsMy43LTkuNiw3LjYNCgljLTMuNS0wLjQtOC40LTUuNy05LjktNC43Yy00LjYsMy4xLTE3LjgsMTUuNC0yOC4zLDI2LjZjLTEwLjUsMTEuMy0xMS43LDAtMTUuOC0wLjZjLTIuNS0wLjQtNTQuMSw0Mi41LTU4LjcsNDMuMQ0KCUMyMi4zLDIwNS4zLDAsMTk3LjUsMCwxOTcuNVYyNjVsNDAwLTAuMXYtNTMuM0M0MDAsMjExLjYsMzQ0LjgsMTg3LjEsMzMzLjQsMTc5eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTAsMjY0Ljl2LTU4LjZjMCwwLDguMiwxLjgsMTEuMyw1LjNjMy4xLDMuNiwyNi4xLTQuMiwyNi4xLDQuN3MwLjUsNC4yLDAuNSwxNC44YzAsMTAuNywyMy00LjIsMzguMS0xOC40DQoJczM0LjktNDkuMiwzNi0zNWMxLDE0LjItMTUuMSwzOS4yLTI0LDU2LjRDNzkuMSwyNTEuNCw1MS43LDI2NSw1MS43LDI2NUwwLDI2NC45eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTEwMCwyNjVjMCwwLDY2LjctMTI1LjEsNjguMy0xMTYuOHMtNi44LDI5LjcsMi4xLDI2LjFjOC45LTMuNiwxNC42LTE2LDE4LjgtOS41czE2LjIsMzguNiwyMS45LDMzLjgNCgljNS43LTQuNywyMS40LTEzLjEsMjIuNC02LjVjMSw2LjUtMSw1LjMtNS43LDIwLjJDMjIzLjEsMjI3LjEsMjAwLDI2NSwyMDAsMjY1aC0xMGMwLDAsNi0yNC44LDguNi0zNC45YzIuNi0xMC4xLTMuNy0xOS0xMi04LjMNCglzLTIzLDIyLTI0LDE3LjhzLTUuNy0zMC4zLTE4LjgtMTQuMmMtMTMsMTYtMzMuOCwzOS43LTMzLjgsMzkuN2gtMTBWMjY1eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTI0NSwyNjVjMCwwLDE5LjgtNTQuNywzMy40LTY0LjJzNTMuNy0yNy45LDQ2LjktMTMuNmMtNi44LDE0LjItMTEsMzQuNC0yMC4zLDQ5LjgNCgljLTkuNCwxNS40LTE4LjgsMjYuMS0xNC4xLDEzLjZjNC43LTEyLjUsNi40LTIzLjMsMy43LTIzLjFDMjcxLjMsMjI5LjEsMjYwLDI2NSwyNjAsMjY1SDI0NXoiLz4NCjwvc3ZnPg0K">
          </div><div class="u-over-slide u-shading u-valign-bottom u-over-slide-5"></div>
          </div><div class="u-effect-fade u-gallery-item u-gallery-item-6"><div class="u-back-slide"><img class="u-back-image u-back-image-6" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJkZWZhdWx0LWltYWdlLXNvbGlkIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDAwIDI2NSIgc3R5bGU9IndpZHRoOiA0MDBweDsgaGVpZ2h0OiAyNjVweDsiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyNjUiLz4NCjxwYXRoIGZpbGw9IiNEOUUzRTgiIGQ9Ik0zOTUuMyw5Ni4yYy01LTAuOC02LjEsMS4xLTguNSwyLjljLTEtMi4zLTIuNi02LjItNy43LTVjMS41LTUuMy0yLjYtOC40LTcuNy04LjRjLTAuNiwwLTEuMiwwLjEtMS44LDAuMg0KCWMtMS44LTQuMS02LTYuOS0xMC43LTYuOWMtNi41LDAtMTEuOCw1LjMtMTEuOCwxMS44YzAsMC40LDAsMC45LDAuMSwxLjNjLTEuMi0wLjgtMi41LTEuMy0zLjktMS4zYy00LjMsMC03LjksNC4yLTcuOSw5LjQNCgljMCwxLjIsMC4yLDIuNCwwLjYsMy41Yy0wLjUtMC4xLTEtMC4xLTEuNi0wLjFjLTYuOSwwLTEyLjUsNS41LTEyLjcsMTIuNGMtMC45LTAuMi0xLjktMC40LTIuOS0wLjRjLTYuNCwwLTExLjcsNS4yLTEyLjUsMTEuOA0KCWMtMS4yLTAuNC0yLjUtMC42LTMuOS0wLjZjLTUuOSwwLTEwLjgsMy44LTEyLjEsOC45Yy0yLjQtMi01LjUtMy4yLTguOS0zLjJjLTYsMC0xMS4xLDMuNy0xMi44LDguOGMtMS41LTEuNC0zLjgtMi4zLTYuMy0yLjMNCgljLTIuMSwwLTQuMSwwLjYtNS41LDEuN2gtMC4xYy0xLjMtNS41LTYuMi05LjUtMTIuMS05LjVjLTIuNCwwLTQuNywwLjctNi42LDEuOWMtMS40LTAuNy0zLTEuMi00LjgtMS4yYy0wLjMsMC0wLjUsMC0wLjgsMA0KCWMtMS41LTQuMS01LjItNy05LjUtN2MtMy4xLDAtNS45LDEuNS03LjgsMy45Yy0yLjItNC44LTYuOC04LjItMTIuMi04LjJjLTUuNiwwLTEwLjUsMy43LTEyLjUsOC44Yy0yLjEtMC45LTQuNC0xLjUtNi45LTEuNQ0KCWMtNi44LDAtMTIuNSwzLjktMTQuNSw5LjNjLTAuMiwwLTAuNSwwLTAuNywwYy01LjIsMC05LjYsMy4yLTExLjQsNy44Yy0yLjctMi44LTctNC41LTExLjgtNC41Yy0zLjMsMC02LjQsMC45LTguOSwyLjMNCgljLTIuMS02LjUtOC0xMi4yLTE4LjEtOS45Yy0yLjctMi4zLTYuMy0zLjctMTAuMS0zLjdjLTIuNSwwLTQuOCwwLjYtNi45LDEuNmMtMi4yLTUuOS03LjktMTAuMS0xNC42LTEwLjFjLTguNiwwLTE1LjYsNy0xNS42LDE1LjYNCgljMCwwLjksMC4xLDEuNywwLjIsMi41Yy0yLjYtNS03LjgtOC40LTEzLjgtOC40Yy04LjMsMC0xNS4xLDYuNS0xNS42LDE0LjZjLTIuOS0zLjItNy01LjMtMTEuNy01LjNjLTcuNCwwLTEzLjUsNS4xLTE1LjIsMTINCgljLTIuOS0zLjUtOS44LTYtMTQuNy02djExOS4yaDQwMFYxMDJDNDAwLDEwMiw0MDAsOTcsMzk1LjMsOTYuMnoiLz4NCjxwYXRoIGZpbGw9IiM4RUE4QkIiIGQ9Ik00MDAsMjA2LjJjMCwwLTI1LjMtMTkuMi0zMy42LTI1LjdjLTEzLjQtMTAuNi0yMy4xLTEyLjktMzEuNy03cy0yMy45LDE5LjctMjMuOSwxOS43cy01OC45LTYzLjktNjEuNS02Ni40DQoJYy0xLjUtMS40LTMuNi0xLjctNS41LTAuOWMtNS4yLDIuNC0xNy42LDkuNy0yNC41LDEyLjdjLTYuOSwyLjktNDEtNTAuNy00OS42LTUzcy04NC4zLDgzLjMtMTAxLjQsNzUuMXMtMjYuOS0yLjMtMzUuNCwzLjUNCgljLTguNiw1LjktMTEsNS45LTE1LjksOC4ycy0xNy4xLTUuOS0xNy4xLTUuOVYyNjVjMCwwLDQwMCwwLjIsNDAwLDB2LTU4LjhINDAweiIvPg0KPHBhdGggZmlsbD0iIzdFOTZBNiIgZD0iTTMzMy40LDE3OWMtMTMuMS05LjMtNDAsNC42LTU1LjEsMTAuN2MtMjMuNiw5LjYtOTQtNTQuNC0xMDcuMi01OS43YzAsMC00LjIsMy43LTkuNiw3LjYNCgljLTMuNS0wLjQtOC40LTUuNy05LjktNC43Yy00LjYsMy4xLTE3LjgsMTUuNC0yOC4zLDI2LjZjLTEwLjUsMTEuMy0xMS43LDAtMTUuOC0wLjZjLTIuNS0wLjQtNTQuMSw0Mi41LTU4LjcsNDMuMQ0KCUMyMi4zLDIwNS4zLDAsMTk3LjUsMCwxOTcuNVYyNjVsNDAwLTAuMXYtNTMuM0M0MDAsMjExLjYsMzQ0LjgsMTg3LjEsMzMzLjQsMTc5eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTAsMjY0Ljl2LTU4LjZjMCwwLDguMiwxLjgsMTEuMyw1LjNjMy4xLDMuNiwyNi4xLTQuMiwyNi4xLDQuN3MwLjUsNC4yLDAuNSwxNC44YzAsMTAuNywyMy00LjIsMzguMS0xOC40DQoJczM0LjktNDkuMiwzNi0zNWMxLDE0LjItMTUuMSwzOS4yLTI0LDU2LjRDNzkuMSwyNTEuNCw1MS43LDI2NSw1MS43LDI2NUwwLDI2NC45eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTEwMCwyNjVjMCwwLDY2LjctMTI1LjEsNjguMy0xMTYuOHMtNi44LDI5LjcsMi4xLDI2LjFjOC45LTMuNiwxNC42LTE2LDE4LjgtOS41czE2LjIsMzguNiwyMS45LDMzLjgNCgljNS43LTQuNywyMS40LTEzLjEsMjIuNC02LjVjMSw2LjUtMSw1LjMtNS43LDIwLjJDMjIzLjEsMjI3LjEsMjAwLDI2NSwyMDAsMjY1aC0xMGMwLDAsNi0yNC44LDguNi0zNC45YzIuNi0xMC4xLTMuNy0xOS0xMi04LjMNCglzLTIzLDIyLTI0LDE3LjhzLTUuNy0zMC4zLTE4LjgtMTQuMmMtMTMsMTYtMzMuOCwzOS43LTMzLjgsMzkuN2gtMTBWMjY1eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTI0NSwyNjVjMCwwLDE5LjgtNTQuNywzMy40LTY0LjJzNTMuNy0yNy45LDQ2LjktMTMuNmMtNi44LDE0LjItMTEsMzQuNC0yMC4zLDQ5LjgNCgljLTkuNCwxNS40LTE4LjgsMjYuMS0xNC4xLDEzLjZjNC43LTEyLjUsNi40LTIzLjMsMy43LTIzLjFDMjcxLjMsMjI5LjEsMjYwLDI2NSwyNjAsMjY1SDI0NXoiLz4NCjwvc3ZnPg0K">
          </div><div class="u-over-slide u-shading u-valign-bottom u-over-slide-6"></div>
          </div> -->
        </div>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-align-center u-black u-clearfix u-section-3 backgroud-news" id="carousel_5b1a">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1 edit-h2">
        <h2 class="u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">News</h2>
        <p class="u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"> Our team is committed to making a positive impact for our clients, their users, and our community.</p>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            @foreach($news_gundam as $news)
            <div class="u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-1 edit-news" data-animation-name="customAnimationIn" data-animation-duration="1500">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <!-- <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">2019</h3> -->
                <div class="edit-h3">
                  <h3 class="u-text u-text-default u-text-4 title-news">{{$news->news_titles}}</h3>
                </div>
                <p class="u-text u-text-default u-text-5 p-news">{{$news->news_des}}</p>
              </div>
            </div>
            @endforeach
            <!-- <div class="u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1500">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-6" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">2020</h3>
                <h3 class="u-text u-text-default u-text-grey-50 u-text-7">Sample Headline</h3>
                <p class="u-text u-text-default u-text-grey-50 u-text-8"> Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. </p>
              </div>
            </div>
            <div class="u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1500">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-9" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">2021</h3>
                <h3 class="u-text u-text-default u-text-grey-50 u-text-10">Sample Headline</h3>
                <p class="u-text u-text-default u-text-grey-50 u-text-11"> Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. </p>
              </div>
            </div>
            <div class="u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="1500">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-12" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">2022</h3>
                <h3 class="u-text u-text-default u-text-grey-50 u-text-13">Sample Headline</h3>
                <p class="u-text u-text-default u-text-grey-50 u-text-14"> Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. </p>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="u-align-center u-clearfix u-image u-section-4" id="carousel_3922" data-image-width="1980" data-image-height="1320" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center u-container-style u-image u-layout-cell u-size-32-lg u-size-33-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1" data-image-width="1510" data-image-height="1080" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
              <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-size-27-xl u-size-28-lg u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
              <div class="u-container-layout u-valign-middle-sm u-container-layout-2">
                <h2 class="u-align-center u-text u-text-1"> Partner with Codal <br>
                  <span class="u-text-palette-2-base">&amp; </span>
                  <span class="u-text-palette-2-base">strategize for the future</span>
                </h2>
                <div class="u-clearfix u-container-align-center u-group-elements u-valign-middle u-group-elements-1">
                  <p class="u-align-center u-text u-text-2"> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;​Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p class="u-align-center u-text u-text-3">Image from <a href="https://www.freepik.com/free-psd/tablet-screen-with-smartphone-mockup-perspective-view_19192707.htm" class="u-active-none u-border-1 u-border-active-palette-2-base u-border-grey-75 u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank">Freepik</a>
                  </p>
                  <a href="https://nicepage.com/html-website-builder" class="u-active-palette-2-base u-align-center u-black u-border-2 u-border-active-palette-2-base u-border-black u-border-hover-palette-2-base u-btn u-btn-round u-button-style u-hover-palette-2-base u-radius-10 u-text-active-white u-text-hover-white u-btn-2">contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- <section class="u-align-center u-black u-clearfix u-section-5" id="carousel_af01">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <h2 class="u-text u-text-default u-text-palette-2-base u-text-1">Meet The Team</h2>
        <p class="u-text u-text-2">Image by <a href="https://www.freepik.com/photos/people" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1">Freepik</a>
        </p>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div alt="" class="u-image u-image-circle u-image-1" data-image-width="598" data-image-height="598"></div>
                <div class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
                  <div class="u-container-layout">
                    <p class="u-align-left u-text u-text-grey-30 u-text-3">creative leader</p>
                    <h4 class="u-align-left u-text u-text-palette-2-base u-text-4">Bob Brown</h4>
                    <p class="u-align-left u-text u-text-body-color u-text-5">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <div alt="" class="u-image u-image-circle u-image-2" data-image-width="598" data-image-height="598"></div>
                <div class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-2">
                  <div class="u-container-layout">
                    <p class="u-align-left u-text u-text-default u-text-grey-30 u-text-6">sales manager</p>
                    <h4 class="u-align-left u-text u-text-default u-text-palette-2-base u-text-7">Mary Smith&nbsp;</h4>
                    <p class="u-align-left u-text u-text-body-color u-text-8">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <div alt="" class="u-image u-image-circle u-image-3" data-image-width="206" data-image-height="206"></div>
                <div class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-3">
                  <div class="u-container-layout">
                    <p class="u-align-left u-text u-text-default u-text-grey-30 u-text-9">manager</p>
                    <h4 class="u-align-left u-text u-text-default u-text-palette-2-base u-text-10">Jonh Rich</h4>
                    <p class="u-align-left u-text u-text-body-color u-text-11">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white">
              <div class="u-container-layout u-similar-container u-container-layout-7">
                <div alt="" class="u-image u-image-circle u-image-4" data-image-width="450" data-image-height="520"></div>
                <div class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-4">
                  <div class="u-container-layout">
                    <p class="u-align-left u-text u-text-default u-text-grey-30 u-text-12"> chief accountant</p>
                    <h4 class="u-align-left u-text u-text-default u-text-palette-2-base u-text-13"> Nat Reynolds</h4>
                    <p class="u-align-left u-text u-text-body-color u-text-14">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- <section class="u-align-center u-clearfix u-image u-valign-middle u-section-6" id="carousel_d74e" data-image-width="1980" data-image-height="1320" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-1">
                  <h2 class="u-text u-text-1"> We create and improve <span class="u-text-palette-2-base">web &amp; mobile products</span>
                  </h2>
                  <div class="u-clearfix u-group-elements u-group-elements-1">
                    <p class="u-align-justify u-text u-text-2"> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;​Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p class="u-text u-text-3">Image from <a href="https://www.freepik.com/free-psd/modern-smart-phones-mockup_11400033.htm" class="u-active-none u-border-1 u-border-active-palette-2-base u-border-grey-75 u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank">Freepik</a>
                    </p>
                    <a href="https://nicepage.com" class="u-active-palette-2-base u-align-center u-black u-border-2 u-border-active-palette-2-base u-border-black u-border-hover-palette-2-base u-btn u-btn-round u-button-style u-hover-palette-2-base u-radius-10 u-text-active-white u-text-hover-white u-btn-2">contact Us</a>
                  </div>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <img class="u-expanded-width u-image u-image-contain u-image-1" src="images/-min.png" data-image-width="900" data-image-height="850">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-black u-clearfix u-section-7" id="carousel_def0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Testimonials</h2>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <div alt="" class="u-border-12 u-border-palette-2-base u-image u-image-circle u-image-1" data-image-width="864" data-image-height="1080"></div>
                <p class="u-text u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <h6 class="u-text u-text-default u-text-palette-2-base u-text-3">stella larson</h6>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <div alt="" class="u-border-12 u-border-palette-2-base u-image u-image-circle u-image-2" data-image-width="980" data-image-height="1500"></div>
                <p class="u-text u-text-4">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <h6 class="u-text u-text-default u-text-palette-2-base u-text-5">nick jhonson</h6>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <div alt="" class="u-border-12 u-border-palette-2-base u-image u-image-circle u-image-3" data-image-width="1000" data-image-height="1500"></div>
                <p class="u-text u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <h6 class="u-text u-text-default u-text-palette-2-base u-text-7">olga ivanova</h6>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                <div alt="" class="u-border-12 u-border-palette-2-base u-image u-image-circle u-image-4" data-image-width="1260" data-image-height="698"></div>
                <p class="u-text u-text-8">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <h6 class="u-text u-text-default u-text-palette-2-base u-text-9">paul hudson</h6>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                <div alt="" class="u-border-12 u-border-palette-2-base u-image u-image-circle u-image-5" data-image-width="512" data-image-height="750"></div>
                <p class="u-text u-text-10">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <h6 class="u-text u-text-default u-text-palette-2-base u-text-11">cash hudson</h6>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                <div alt="" class="u-border-12 u-border-palette-2-base u-image u-image-circle u-image-6" data-image-width="1000" data-image-height="1500"></div>
                <p class="u-text u-text-12">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <h6 class="u-text u-text-default u-text-palette-2-base u-text-13">mike perry</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <section class="u-align-center u-clearfix u-image u-valign-middle u-section-8 backgroudsection" id="carousel_d050" data-image-width="1980" data-image-height="1321" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
      <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout divaboutus">
          <div class="u-layout-row">
            <div class="u-align-center u-container-style u-image u-image-default u-layout-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1" data-image-width="1500" data-image-height="1158">
              <div class="u-container-layout u-valign-middle u-container-layout-1 aboutus">
                <img src="{{asset('img-brand/MG.png') }}" alt="">
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-shape-rectangle u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2 aboutus">
                <h2 class="u-text u-text-default u-text-1">About Us</h2>
                <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-2">Sample Headline</h6>
                <p class="u-align-justify u-custom-font u-font-montserrat u-text u-text-3"> Article evident arrived express highest men did boy. Mistress sensible entirely am so. Quick can manor smart money hopes worth too. Comfort produce husband boy her had hearing. Law others theirs passed but wishes. You day real less till dear read. Considered use dispatched melancholy sympathize discretion led. Oh feel if up to till like.</p>
                <!-- <p class="u-text u-text-4">Image from <a href="https://www.freepik.com/free-psd/hands-holding-smartphone-device-mock-up-color-background_30587610.htm" class="u-active-none u-border-1 u-border-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-1" target="_blank">Freepik</a> -->
                </p>
                <a href="https://nicepage.com/c/blog-posts-website-mockup" class="u-black u-active-palette-2-base u-hover-palette-2-base u-align-center u-border-2 u-border-active-palette-2-base u-border-black u-border-hover-palette-2-base u-btn u-btn-round u-button-style u-radius-10 u-text-active-white u-text-hover-white u-btn-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-left u-container-style u-list-item u-palette-2-base u-radius-20 u-repeater-item u-shape-round u-list-item-1" data-animation-name="bounceIn" data-animation-duration="1500" data-animation-direction="Right" data-animation-delay="500">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3 coloraboutus">
              <h5 class="u-text u-text-5"><span class="u-file-icon u-icon u-text-white"><img src="images/597177-de35359a.png" alt=""></span>&nbsp;Call Us
              </h5>
              <p class="u-text u-text-6">1 (234) 567-891,<br>1 (234) 987-654
              </p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-palette-2-base u-radius-20 u-repeater-item u-shape-round u-list-item-2" data-animation-name="bounceIn" data-animation-duration="1500" data-animation-direction="Right" data-animation-delay="500">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4 coloraboutus">
              <h5 class="u-text u-text-7"><span class="u-file-icon u-icon u-text-white"><img src="images/484167-0f572cc8.png" alt=""></span>&nbsp;Location
              </h5>
              <p class="u-text u-text-8">121 Rock Sreet, 21 Avenue, New York, NY 92103-9000</p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-palette-2-base u-radius-20 u-repeater-item u-shape-round u-list-item-3" data-animation-name="bounceIn" data-animation-duration="1500" data-animation-direction="Right" data-animation-delay="500">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-5 coloraboutus">
              <h5 class="u-text u-text-9"><span class="u-file-icon u-icon u-text-white"><img src="images/1827379-21b799be.png" alt=""></span>&nbsp;Hours
              </h5>
              <p class="u-text u-text-10">Mon – Fri …… 11 am – 8 pm, Sat, Sun&nbsp;&nbsp;…… 6 am – 8 pm</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-section-9 bkackgroudemmail" src="" data-image-width="1610" data-image-height="1080" id="sec-9d25">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-radius-20 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
            <h2 class="u-text u-text-1">Be the first to know</h2>
            <p class="u-large-text u-text u-text-font u-text-variant u-text-2">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
            <div class="u-form u-form-1">
              <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-horizontal u-form-spacing-15 u-inner-form" source="email">
                <div class="u-form-email u-form-group">
                  <label for="email-7771" class="u-label">Email</label>
                  <input type="email" placeholder="Enter a valid email address" id="email-7771" name="email" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
                </div>
                <div class="u-form-group u-form-submit">
                  <a href="#" class="u-btn u-hover-palette-2-base u-btn-round u-btn-submit u-button-style u-black u-radius-50 u-btn-1">Submit</a>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                <input type="hidden" value="" name="recaptchaResponse">
                <input type="hidden" name="formServices" value="f9a69c88a0a1bc014b6513359c0d5eb6">
              </form>
            </div>
          </div>
        </div>
        <p class="u-text u-text-body-alt-color u-text-3">Image from <a href="https://www.freepik.com/photos/business" class="u-border-1 u-border-active-grey-5 u-border-hover-grey-5 u-border-no-left u-border-no-right u-border-no-top u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-2" target="_blank">Freepik</a>
        </p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-valign-middle u-section-10 backgroudsection" id="carousel_743f" data-image-width="1980" data-image-height="1320" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-image u-layout-cell u-size-35-lg u-size-35-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1" data-image-width="1500" data-image-height="1080">
              <!-- <div class="u-container-layout u-valign-middle u-container-layout-1"></div> -->
              <div class="u-container-layout u-valign-middle u-container-layout-1 aboutus">
                <img src="{{asset('img-brand/MG.png') }}" alt="">
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-size-25-lg u-size-25-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <h2 class="u-text u-text-1">Contact Us</h2>
                <h5 class="u-custom-font u-font-montserrat u-text u-text-2">
                  <span style="font-weight: 700;" class="u-text-palette-2-base"> Phone:</span>
                  <span class="u-text-palette-2-base"></span>(555)123-4567 <br>
                  <span class="u-text-palette-2-base">
                    <br>
                    <span style="font-weight: 700;">E-mail:</span>
                  </span> info@sample.com<br>
                  <br>
                  <span style="font-weight: 700;" class="u-text-palette-2-base">Address:</span>
                  <span class="u-text-palette-3-base">
                    <br>
                  </span>Alexandria, 32 Washingtorn str, 22303 <br>
                  <br>
                  <span style="font-weight: 700;" class="u-text-palette-2-base">Opening hours: </span>
                  <br>Monday — Thursday 10:00 – 23:00 <br>Friday — Sunday 10:00 – 19:00
                </h5>
                <p class="u-text u-text-black u-text-3">Image from&nbsp;<a href="https://www.freepik.com/free-photo/young-woman-trendy-stylish-glasses-bright-orange-oversized-jacket-white-background-holds-phone-with-blank-white-screen_23653243.htm#page=7&amp;query=phone%20mockup&amp;position=1&amp;from_view=search" class="u-border-1 u-border-active-palette-2-base u-border-grey-75 u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank">Freepik</a>
                </p>
                <a href="https://nicepage.com/k/home-improvement-website-templates" class="u-active-palette-2-base u-align-center u-black u-border-2 u-border-active-palette-2-base u-border-black u-border-hover-palette-2-base u-btn u-btn-round u-button-style u-hover-palette-2-base u-radius-10 u-text-active-white u-text-hover-white u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Book Consultation</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection