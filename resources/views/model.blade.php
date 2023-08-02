@extends('layout.layout2')
@section('content')
<div class="container">
      <div class="row mb-5">
        <div class="col-md-3">
        <div class="card mb-4">
        <div class="card-header">Categories</div>
        <ul class="list-group">
          <a href="{{url('model')}}" class="list-group-item list-group-item-action view-all"><b>View all</b></a>
          @foreach($brand as $item)
          <li class="list-group-item list-group-item-action">
            <a href="{{url('model')}}?brand={{$item->brand_name}}" class="link-offset-2 link-underline link-underline-opacity-0">{{$item->brand_name}}</a>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="card mb-4">
        <form>
          <div class="card-header">Filter</div>
          <div class="card-body p-1">
            <div class="card border-0 b-3">
              <div id="slider-range" class="mt-3"></div>
              <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
              <input type="hidden" name="start_price" id="start_price">
              <input type="hidden" name="end_price" id="end_price">
            </div>
          </div>
          <div class="card-footer">
            <input type="submit" name="filter-price" value="Filter" class="btn btn-primary">
          </div>
        </form>
      </div>
      <div class="card">
        <form>
          <div class="card-header">Sort by</div>
          <div class="card-body p-1">
            <div class="card border-0 b-3">
              <ul class="list-group">
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="radio" name="sort_by" value="atoz" id="firstRadio">
                  <label class="form-check-label" for="firstRadio">Name (A - Z)</label>
                </li>
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="radio" name="sort_by" value="ztoa" id="secondRadio">
                  <label class="form-check-label" for="secondRadio">Name (Z - A)</label>
                </li>
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="radio" name="sort_by" value="lowtohigh" id="thirdRadio">
                  <label class="form-check-label" for="thirdRadio">Price (Low > High)</label>
                </li>
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="radio" name="sort_by" value="hightolow" id="fourthRadio">
                  <label class="form-check-label" for="thirdRadio">Price (High > Low)</label>
                </li>
              </ul>
            </div>
          </div>
          <div class="card-footer">
            <input type="submit" name="sort-by" value="Sort" class="btn btn-primary">
          </div>
        </form>
      </div>
      </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-6">
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-secondary active" id="grid"><i class="fas fa-th"></i></button>
                    <button type="button" class="btn btn-secondary" id="list"><i class="fas fa-th-list"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div id="filtered-products">
            @if($filter->count() >= 1)
            <div class="card-body">
              <div class="row">
                @foreach ($filter as $item)
                <div class="item col-xs-12 col-md-6 col-lg-4 mt-3">
                  <a href="{{url('product_detail/'.$item->product_id)}}" class="item col-xs-12 col-md-6 col-lg-4 mt-3 detail">
                  <div class="card">
                    <img class="card-img-top" src="{{ asset("/img-product/$item->image") }}" alt="" />
                    <div class="card-body">
                      <p class="h6"><small class="text-muted filter-brand">{{$item->brand_name}}</small></br>{{$item->product_name}}</p>
                      <!-- <p class="m-0">
                        <i class="fa-xs far fa-star"></i>
                        <i class="fa-xs far fa-star"></i>
                        <i class="fa-xs far fa-star"></i>
                        <i class="fa-xs far fa-star"></i>
                        <i class="fa-xs far fa-star"></i>
                      </p> -->
                      <p class="h5 m-0">${{$item->product_price}}
                        @if ($item->sale == null)
                        <s class="lead text-muted" hidden>${{$item->sale}}</s>
                        @else
                        <s class="lead text-muted">${{$item->sale}}</s>
                        @endif
                      </p>
                    </div>
                    <div class="card-footer p-0">
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-light">
                          <i class="fas fa-cart-plus"></i>
                          <span>Add Cart</span>
                        </button>
                        <button type="button" class="btn btn-light">
                          <i class="fas fa-shopping-cart"></i>
                        </button>
                        <button type="button" class="btn btn-light">
                          <i class="fas fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-light">
                          <i class="fas fa-sync-alt"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </a>
                </div>
                @endforeach
              </div>
            </div>
            @else
            <div class="item col-md-6 col-lg-4 mt-3">
              <h2>Nothing Found</h2>
            </div>
            @endif
            </div>
            <div class="card-footer p-3">
              <div class="row">
                <div class="col-md-12">
                  {{$filter->links()}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('addCSS')
  <link rel="stylesheet" href="{{asset('css/model.css') }}">
@endsection

@section('addJS')
  <script src="{{asset('js/model.js') }}"></script>
@endsection

