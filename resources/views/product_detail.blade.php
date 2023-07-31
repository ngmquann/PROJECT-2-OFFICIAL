@extends('layout.layout2')
@section('content')
<div class="u-body u-xl-mode">
@foreach($filter as $item)
<section class="u-clearfix u-grey-5 u-section-1" id="sec-2dd8" style="background-color: #fff;">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><!--product--><!--product_options_json--><!--{"source":""}--><!--/product_options_json--><!--product_item-->
        <div class="u-container-style u-expanded-width u-product u-product-1">
          <div class="u-container-layout u-valign-top-xs u-container-layout-1"><!--product_gallery--><!--options_json--><!--{"maxItems":""}--><!--/options_json-->
            <div class="u-carousel u-expanded-width-sm u-expanded-width-xs u-gallery u-layout-thumbnails u-lightbox u-no-transition u-product-control u-show-text-none u-thumbnails-position-bottom u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-1d4a">
              <div class="u-carousel-inner u-gallery-inner" role="listbox"><!--product_gallery_item-->
                <div class="active u-active u-carousel-item u-gallery-item u-shape-rectangle">
                  <div class="u-back-slide">
                    <img class="u-back-image u-expanded" src="{{ asset("/img-product/$item->image") }}">
                  </div>
                  <div class="u-over-slide u-over-slide-1">
                    <h3 class="u-gallery-heading">Sample Title</h3>
                    <p class="u-gallery-text">Sample Text</p>
                  </div>
                </div><!--/product_gallery_item--><!--product_gallery_item-->
                <div class="u-carousel-item u-gallery-item u-shape-rectangle">
                  <div class="u-back-slide">
                    <img class="u-back-image u-expanded" src="data:image/svg+xml;base64,DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9Im1hbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHdpZHRoPSIyNTZweCIgaGVpZ2h0PSIyNTZweCIgdmlld0JveD0iMCAwIDI1NiAyNTYiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDI1NiAyNTYiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjI1NiIgaGVpZ2h0PSIyNTYiLz4NCjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xMTAuOCw0My45Yy0yLjIsMTUuNi0xNS45LDI5LTE5LjUsNDMuOWMtMy4zLDE0LjEtMi45LDI4LjktMy43LDQzLjRjLTAuNywxMy40LTEuMSwyNy0xLjEsNDAuNQ0KCWMwLDYuNS0yLjYsMzEuNC0xLjgsMzdjMTQuNywxNy42LDc0LjgsNy44LDc3LjEsNC40YzEuMy0xLjktMS40LTE4LTAuNy0yNi45Yy0xLjItMjIuMSwwLjUtNTEuNiwxLjEtNjYuMQ0KCWMwLjUtMTMuNCwzLjMtMjUuOSwzLjMtMzkuNHMtMy44LTIzLjgtMTAuMy0zNS4zYy0yLjMtNC4xLTQuOC04LTgtMTEuNWMtNC40LTQuOC00LjktNC4yLTEwLTAuN2MtMy44LDIuNi02LjYsNS4xLTExLDYuNg0KCWMtMy42LDEuMy05LjQsMy4zLTE1LjgsNC4yIi8+DQo8cGF0aCBmaWxsPSIjQzZEOEUxIiBkPSJNMTU3LDExOC44YzQuOS0yOS4zLDIuMy00OC43LTcuOC01Ny43Yy04LjEtNy4yLTE3LjgtNS0xOS4zLTQuNmMtNC42LDAuNi04LjUsMi45LTExLjMsNi44DQoJYy0xMS40LDE1LjYtNC45LDUyLjEtNC4yLDU2LjJ2MC4xdjAuMWwwLjIsMC44aDAuMWMyLDQuNSwxMy44LDUuNywyMSw1LjdzMTkuMS0xLjMsMjEtNS44bDAsMGwwLDBjMC4yLTAuNCwwLjMtMC44LDAuMy0xLjMNCglDMTU3LDExOC45LDE1NywxMTguOSwxNTcsMTE4Ljh6IE0xMzUuNywxMjJjLTEwLjgsMC0xNi4xLTIuMi0xNy4yLTMuMWMxLjEtMC45LDYuMy0zLjEsMTcuMi0zLjFzMTYuMSwyLjIsMTcuMiwzLjENCglDMTUxLjgsMTE5LjgsMTQ2LjUsMTIyLDEzNS43LDEyMnogTTEyMS43LDY1LjZjMi4yLTMsNS4xLTQuNyw4LjctNS4yaDAuNWwwLjEtMC4xYzEuMi0wLjMsOS0xLjksMTUuNCwzLjhjNiw1LjQsMTEuOSwxOC42LDcuMSw1MC44DQoJYy00LjUtMi4yLTEyLjQtMi45LTE3LjgtMi45Yy01LjUsMC0xMy42LDAuNy0xOC4xLDNDMTE2LDEwMy4zLDExMy40LDc3LDEyMS43LDY1LjZ6Ii8+DQo8cGF0aCBmaWxsPSIjQzZEOEUxIiBkPSJNMTQ3LjUsMzIuNmwtMi0wLjJsLTAuMiwwLjljLTAuNSwyLjUtNS43LDYuMy0xNC40LDEwLjNjLTYuNywzLjQtMTYsNS4zLTE5LjksNC4ybC0xLTAuM2wtMS4zLDMuOGwxLDAuMw0KCWMxLjEsMC4zLDIuMywwLjQsMy45LDAuNGM1LjQsMCwxMy4zLTIsMTkuMi00LjljMTUuMy03LjIsMTYuMy0xMS41LDE2LjYtMTMuMmwwLjItMUwxNDcuNSwzMi42eiIvPg0KPC9zdmc+DQo=">
                  </div>
                  <div class="u-over-slide u-over-slide-2">
                    <h3 class="u-gallery-heading">Sample Title</h3>
                    <p class="u-gallery-text">Sample Text</p>
                  </div>
                </div><!--/product_gallery_item-->
              </div>
              <a class="u-black u-carousel-control u-carousel-control-prev u-icon-rectangle u-opacity u-opacity-70 u-spacing-15 u-text-body-alt-color u-text-hover-grey-40 u-carousel-control-1" href="#carousel-1d4a" role="button" data-u-slide="prev">
                <span aria-hidden="true">
                  <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
                </span>
                <span class="sr-only">
                  <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
                </span>
              </a>
              <a class="u-black u-carousel-control u-carousel-control-next u-icon-rectangle u-opacity u-opacity-70 u-spacing-15 u-text-body-alt-color u-text-hover-grey-40 u-carousel-control-2" href="#carousel-1d4a" role="button" data-u-slide="next">
                <span aria-hidden="true">
                  <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
                </span>
                <span class="sr-only">
                  <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
                </span>
              </a>
              <ol class="u-carousel-thumbnails u-spacing-25 u-carousel-thumbnails-1"><!--product_gallery_thumbnail-->
                <li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-1d4a" data-u-slide-to="0">
                    <img class="u-carousel-thumbnail-image u-image" src="{{ asset("/img-product/$item->image") }}">
                </li><!--/product_gallery_thumbnail--><!--product_gallery_thumbnail-->
                <li class="u-carousel-thumbnail u-carousel-thumbnail-2" data-u-target="#carousel-1d4a" data-u-slide-to="1">
                  <img class="u-carousel-thumbnail-image u-image" src="data:image/svg+xml;base64,DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9Im1hbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHdpZHRoPSIyNTZweCIgaGVpZ2h0PSIyNTZweCIgdmlld0JveD0iMCAwIDI1NiAyNTYiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDI1NiAyNTYiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjI1NiIgaGVpZ2h0PSIyNTYiLz4NCjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xMTAuOCw0My45Yy0yLjIsMTUuNi0xNS45LDI5LTE5LjUsNDMuOWMtMy4zLDE0LjEtMi45LDI4LjktMy43LDQzLjRjLTAuNywxMy40LTEuMSwyNy0xLjEsNDAuNQ0KCWMwLDYuNS0yLjYsMzEuNC0xLjgsMzdjMTQuNywxNy42LDc0LjgsNy44LDc3LjEsNC40YzEuMy0xLjktMS40LTE4LTAuNy0yNi45Yy0xLjItMjIuMSwwLjUtNTEuNiwxLjEtNjYuMQ0KCWMwLjUtMTMuNCwzLjMtMjUuOSwzLjMtMzkuNHMtMy44LTIzLjgtMTAuMy0zNS4zYy0yLjMtNC4xLTQuOC04LTgtMTEuNWMtNC40LTQuOC00LjktNC4yLTEwLTAuN2MtMy44LDIuNi02LjYsNS4xLTExLDYuNg0KCWMtMy42LDEuMy05LjQsMy4zLTE1LjgsNC4yIi8+DQo8cGF0aCBmaWxsPSIjQzZEOEUxIiBkPSJNMTU3LDExOC44YzQuOS0yOS4zLDIuMy00OC43LTcuOC01Ny43Yy04LjEtNy4yLTE3LjgtNS0xOS4zLTQuNmMtNC42LDAuNi04LjUsMi45LTExLjMsNi44DQoJYy0xMS40LDE1LjYtNC45LDUyLjEtNC4yLDU2LjJ2MC4xdjAuMWwwLjIsMC44aDAuMWMyLDQuNSwxMy44LDUuNywyMSw1LjdzMTkuMS0xLjMsMjEtNS44bDAsMGwwLDBjMC4yLTAuNCwwLjMtMC44LDAuMy0xLjMNCglDMTU3LDExOC45LDE1NywxMTguOSwxNTcsMTE4Ljh6IE0xMzUuNywxMjJjLTEwLjgsMC0xNi4xLTIuMi0xNy4yLTMuMWMxLjEtMC45LDYuMy0zLjEsMTcuMi0zLjFzMTYuMSwyLjIsMTcuMiwzLjENCglDMTUxLjgsMTE5LjgsMTQ2LjUsMTIyLDEzNS43LDEyMnogTTEyMS43LDY1LjZjMi4yLTMsNS4xLTQuNyw4LjctNS4yaDAuNWwwLjEtMC4xYzEuMi0wLjMsOS0xLjksMTUuNCwzLjhjNiw1LjQsMTEuOSwxOC42LDcuMSw1MC44DQoJYy00LjUtMi4yLTEyLjQtMi45LTE3LjgtMi45Yy01LjUsMC0xMy42LDAuNy0xOC4xLDNDMTE2LDEwMy4zLDExMy40LDc3LDEyMS43LDY1LjZ6Ii8+DQo8cGF0aCBmaWxsPSIjQzZEOEUxIiBkPSJNMTQ3LjUsMzIuNmwtMi0wLjJsLTAuMiwwLjljLTAuNSwyLjUtNS43LDYuMy0xNC40LDEwLjNjLTYuNywzLjQtMTYsNS4zLTE5LjksNC4ybC0xLTAuM2wtMS4zLDMuOGwxLDAuMw0KCWMxLjEsMC4zLDIuMywwLjQsMy45LDAuNGM1LjQsMCwxMy4zLTIsMTkuMi00LjljMTUuMy03LjIsMTYuMy0xMS41LDE2LjYtMTMuMmwwLjItMUwxNDcuNSwzMi42eiIvPg0KPC9zdmc+DQo=">
                </li><!--/product_gallery_thumbnail-->
              </ol>
            </div><!--/product_gallery--><!--product_title-->
            <h3 class="u-product-control u-text u-text-default u-text-1">
              {{$item->product_name}} 
              <br>
              <span style="font-size: 1.3rem; font-style: italic;">{{$item->brand_name}}</span>
            </h3><!--/product_title--><!--product_price--> 
            <div class="u-product-control u-product-price u-product-price-1">
              <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              @if ($item->sale == null)
                <div class="u-hide-price u-old-price" style="text-decoration: line-through !important;"><!--product_old_price_content-->${{$item->sale}}<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
              @else
                <div class="u-old-price" style="text-decoration: line-through !important;"><!--product_old_price_content-->${{$item->sale}}<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
              @endif
                <div class="u-price" style="font-size: 1.5rem; font-weight: 700;"><!--product_regular_price_content-->${{$item->product_price}}<!--/product_regular_price_content--></div><!--/product_regular_price-->
              </div>
            </div><!--/product_price-->
            <!--product_variations-->
            <div class="u-product-control u-product-variations u-product-variations-1"><!--product_variation-->
              <div class="u-product-variant">
                <div class="col-12">
                  <b>Amount: </b>
                  <button class="btn btn-light" id="btn-minus"><i class="fa-solid fa-minus"></i></button>
                  <input id="value" type="text" style="width: 50px; text-align: center" value="1">
                  <button class="btn btn-light" id="btn-plus"><i class="fa-solid fa-plus"></i></button>
                </div>
              </div><!--/product_variation-->
            </div><!--/product_variations-->
            <div class="u-product-control u-product-price u-product-price-1">
              <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                @if($item->product_status == 1)
                <div class="u-price" style="font-size: 1rem;">
                  <b>Status: <i>Stocking</i></b>
                </div>
                @else
                <div class="u-price" style="font-size: 1rem;">
                  <b>Status: <i>Sold out</i></b>
                </div>
                @endif
              </div>
            </div><!--/product_price-->
            <!--product_content-->
            <div class="u-product-control u-product-desc u-text u-text-2"><!--product_content_content-->
                <p>{{$item->product_des}}</p><!--/product_content_content-->
            </div><!--/product_content--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
            <a href="#" class="u-black u-btn u-button-style u-product-control u-btn-1"><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
          </div>
        </div><!--/product_item--><!--/product-->
        <h3 style="text-align: center;">Product Description</h3>
        <hr>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-aa2f">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="fr-view u-align-center u-clearfix u-rich-text u-text u-text-1">
            <h2 style="text-align: center;">{{$item->product_name}}</h2>
          <p style="text-align: center;">
            <span style="line-height: 2.0;">
            {{$item->product_content}}
              <img width="570" align="center" style="width: 366px;" class="fr-dib fr-fic" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJkZWZhdWx0LWltYWdlLXNvbGlkIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDAwIDI2NSIgc3R5bGU9IndpZHRoOiA0MDBweDsgaGVpZ2h0OiAyNjVweDsiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyNjUiLz4NCjxwYXRoIGZpbGw9IiNEOUUzRTgiIGQ9Ik0zOTUuMyw5Ni4yYy01LTAuOC02LjEsMS4xLTguNSwyLjljLTEtMi4zLTIuNi02LjItNy43LTVjMS41LTUuMy0yLjYtOC40LTcuNy04LjRjLTAuNiwwLTEuMiwwLjEtMS44LDAuMg0KCWMtMS44LTQuMS02LTYuOS0xMC43LTYuOWMtNi41LDAtMTEuOCw1LjMtMTEuOCwxMS44YzAsMC40LDAsMC45LDAuMSwxLjNjLTEuMi0wLjgtMi41LTEuMy0zLjktMS4zYy00LjMsMC03LjksNC4yLTcuOSw5LjQNCgljMCwxLjIsMC4yLDIuNCwwLjYsMy41Yy0wLjUtMC4xLTEtMC4xLTEuNi0wLjFjLTYuOSwwLTEyLjUsNS41LTEyLjcsMTIuNGMtMC45LTAuMi0xLjktMC40LTIuOS0wLjRjLTYuNCwwLTExLjcsNS4yLTEyLjUsMTEuOA0KCWMtMS4yLTAuNC0yLjUtMC42LTMuOS0wLjZjLTUuOSwwLTEwLjgsMy44LTEyLjEsOC45Yy0yLjQtMi01LjUtMy4yLTguOS0zLjJjLTYsMC0xMS4xLDMuNy0xMi44LDguOGMtMS41LTEuNC0zLjgtMi4zLTYuMy0yLjMNCgljLTIuMSwwLTQuMSwwLjYtNS41LDEuN2gtMC4xYy0xLjMtNS41LTYuMi05LjUtMTIuMS05LjVjLTIuNCwwLTQuNywwLjctNi42LDEuOWMtMS40LTAuNy0zLTEuMi00LjgtMS4yYy0wLjMsMC0wLjUsMC0wLjgsMA0KCWMtMS41LTQuMS01LjItNy05LjUtN2MtMy4xLDAtNS45LDEuNS03LjgsMy45Yy0yLjItNC44LTYuOC04LjItMTIuMi04LjJjLTUuNiwwLTEwLjUsMy43LTEyLjUsOC44Yy0yLjEtMC45LTQuNC0xLjUtNi45LTEuNQ0KCWMtNi44LDAtMTIuNSwzLjktMTQuNSw5LjNjLTAuMiwwLTAuNSwwLTAuNywwYy01LjIsMC05LjYsMy4yLTExLjQsNy44Yy0yLjctMi44LTctNC41LTExLjgtNC41Yy0zLjMsMC02LjQsMC45LTguOSwyLjMNCgljLTIuMS02LjUtOC0xMi4yLTE4LjEtOS45Yy0yLjctMi4zLTYuMy0zLjctMTAuMS0zLjdjLTIuNSwwLTQuOCwwLjYtNi45LDEuNmMtMi4yLTUuOS03LjktMTAuMS0xNC42LTEwLjFjLTguNiwwLTE1LjYsNy0xNS42LDE1LjYNCgljMCwwLjksMC4xLDEuNywwLjIsMi41Yy0yLjYtNS03LjgtOC40LTEzLjgtOC40Yy04LjMsMC0xNS4xLDYuNS0xNS42LDE0LjZjLTIuOS0zLjItNy01LjMtMTEuNy01LjNjLTcuNCwwLTEzLjUsNS4xLTE1LjIsMTINCgljLTIuOS0zLjUtOS44LTYtMTQuNy02djExOS4yaDQwMFYxMDJDNDAwLDEwMiw0MDAsOTcsMzk1LjMsOTYuMnoiLz4NCjxwYXRoIGZpbGw9IiM4RUE4QkIiIGQ9Ik00MDAsMjA2LjJjMCwwLTI1LjMtMTkuMi0zMy42LTI1LjdjLTEzLjQtMTAuNi0yMy4xLTEyLjktMzEuNy03cy0yMy45LDE5LjctMjMuOSwxOS43cy01OC45LTYzLjktNjEuNS02Ni40DQoJYy0xLjUtMS40LTMuNi0xLjctNS41LTAuOWMtNS4yLDIuNC0xNy42LDkuNy0yNC41LDEyLjdjLTYuOSwyLjktNDEtNTAuNy00OS42LTUzcy04NC4zLDgzLjMtMTAxLjQsNzUuMXMtMjYuOS0yLjMtMzUuNCwzLjUNCgljLTguNiw1LjktMTEsNS45LTE1LjksOC4ycy0xNy4xLTUuOS0xNy4xLTUuOVYyNjVjMCwwLDQwMCwwLjIsNDAwLDB2LTU4LjhINDAweiIvPg0KPHBhdGggZmlsbD0iIzdFOTZBNiIgZD0iTTMzMy40LDE3OWMtMTMuMS05LjMtNDAsNC42LTU1LjEsMTAuN2MtMjMuNiw5LjYtOTQtNTQuNC0xMDcuMi01OS43YzAsMC00LjIsMy43LTkuNiw3LjYNCgljLTMuNS0wLjQtOC40LTUuNy05LjktNC43Yy00LjYsMy4xLTE3LjgsMTUuNC0yOC4zLDI2LjZjLTEwLjUsMTEuMy0xMS43LDAtMTUuOC0wLjZjLTIuNS0wLjQtNTQuMSw0Mi41LTU4LjcsNDMuMQ0KCUMyMi4zLDIwNS4zLDAsMTk3LjUsMCwxOTcuNVYyNjVsNDAwLTAuMXYtNTMuM0M0MDAsMjExLjYsMzQ0LjgsMTg3LjEsMzMzLjQsMTc5eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTAsMjY0Ljl2LTU4LjZjMCwwLDguMiwxLjgsMTEuMyw1LjNjMy4xLDMuNiwyNi4xLTQuMiwyNi4xLDQuN3MwLjUsNC4yLDAuNSwxNC44YzAsMTAuNywyMy00LjIsMzguMS0xOC40DQoJczM0LjktNDkuMiwzNi0zNWMxLDE0LjItMTUuMSwzOS4yLTI0LDU2LjRDNzkuMSwyNTEuNCw1MS43LDI2NSw1MS43LDI2NUwwLDI2NC45eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTEwMCwyNjVjMCwwLDY2LjctMTI1LjEsNjguMy0xMTYuOHMtNi44LDI5LjcsMi4xLDI2LjFjOC45LTMuNiwxNC42LTE2LDE4LjgtOS41czE2LjIsMzguNiwyMS45LDMzLjgNCgljNS43LTQuNywyMS40LTEzLjEsMjIuNC02LjVjMSw2LjUtMSw1LjMtNS43LDIwLjJDMjIzLjEsMjI3LjEsMjAwLDI2NSwyMDAsMjY1aC0xMGMwLDAsNi0yNC44LDguNi0zNC45YzIuNi0xMC4xLTMuNy0xOS0xMi04LjMNCglzLTIzLDIyLTI0LDE3LjhzLTUuNy0zMC4zLTE4LjgtMTQuMmMtMTMsMTYtMzMuOCwzOS43LTMzLjgsMzkuN2gtMTBWMjY1eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTI0NSwyNjVjMCwwLDE5LjgtNTQuNywzMy40LTY0LjJzNTMuNy0yNy45LDQ2LjktMTMuNmMtNi44LDE0LjItMTEsMzQuNC0yMC4zLDQ5LjgNCgljLTkuNCwxNS40LTE4LjgsMjYuMS0xNC4xLDEzLjZjNC43LTEyLjUsNi40LTIzLjMsMy43LTIzLjFDMjcxLjMsMjI5LjEsMjYwLDI2NSwyNjAsMjY1SDI0NXoiLz4NCjwvc3ZnPg0K">tas congue. Vitae ultricies leo integer malesuada nunc. Nibh praesent tristique magna sit amet purus gravida. Diam volutpat commodo sed egestas. Gravida dictum fusce ut placerat orci nulla pellentesque. Ornare massa eget egestas purus viverra. Morbi enim nunc faucibus a pellentesque sit amet porttitor. Mattis pellentesque id nibh tortor id aliquet lectus proin nibh. Molestie nunc non blandit massa enim nec dui. Felis imperdiet proin fermentum leo vel orci porta. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. 
            </span>
          </p>
        </div>
        <h3 style="text-align: center;">Related Product</h3>
        <hr>
      </div>
    </section>
@endforeach    
    <section class="u-align-center u-clearfix u-section-3" id="sec-dff5">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-products u-products-1">
          <div class="u-repeater u-repeater-1">
            @foreach($relate as $item)
            <div class="u-align-center u-container-style u-products-item u-repeater-item">
              <a href="#" class="u-product-title-link">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-1" src="{{ asset("/img-product/$item->image") }}">
                <h4 class="u-align-center u-product-control u-text u-text-1 hidden">
                  <a class="u-product-title-link" href="#">{{$item->product_name}}</a>
                </h4><!--/product_title--><!--product_price-->
                <div class="u-product-control u-product-price u-product-price-1">
                  <div class="u-price-wrapper u-spacing-10">
                  @if ($item->sale == null)
                    <div class="u-hide-price u-old-price" style="text-decoration: line-through !important;"><!--product_old_price_content-->${{$item->sale}}<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                  @else
                    <div class="u-old-price" style="text-decoration: line-through !important;"><!--product_old_price_content-->${{$item->sale}}<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                  @endif
                    <div class="u-price" style="font-size: 1.5rem; font-weight: 700;"><!--product_regular_price_content-->${{$item->product_price}}<!--/product_regular_price_content--></div><!--/product_regular_price-->
                  </div>
                </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
                <a href="" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-1"><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
              </div>
            </a>
            </div><!--/product_item--><!--product_item-->
            @endforeach
          </div>
        </div><!--/products-->
      </div>
    </section>
</div>
@endsection

@section('addCSS')
  <link rel="stylesheet" href="{{asset('css/product_detail.css') }}" media="screen">
  <link rel="stylesheet" href="{{asset('css/product_detail1.css') }}" media="screen">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Contact">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
@endsection

@section('addJS')
  <script class="u-script" type="text/javascript" src="{{asset('js/jquery.js') }}" defer=""></script>
  <script class="u-script" type="text/javascript" src="{{asset('js/nicepage.js') }}" defer=""></script>
  <script src="{{asset('js/product_detail.js') }}"></script>
@endsection