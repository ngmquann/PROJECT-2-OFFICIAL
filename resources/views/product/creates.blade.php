@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                Create Product
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{url('/product/postCreate') }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name Product</label>
                                <input type="text" name="name_product" class="form-control" id="product_name" placeholder="Name Product">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Price</label>
                                <input type="text" name="price_product" class="form-control" id="product_price" data-inputmask="'alias': 'currency'" placeholder="Price"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Sale</label>
                                <input type="text" name="sale" class="form-control" id="sale">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea class="form-control" name="des_product" id="product_description" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Content</label>
                                <textarea class="form-control" name="content_product" id="ckeditor" placeholder="Content"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Image" value="Image">
                            </div>
                            <div class="form-group-status">
                                <label for="exampleInputPassword1">Category</label>
                                <select name="category_pr" class="form-control input-lg m-bot15" id="status_category">
                                
                                    @foreach($category_pr as $cate_pr)
                                        <option value="{{$cate_pr->category_id}}">{{$cate_pr->category_name}}</option>
                                    @endforeach
                                    
                                </select>
                                <label for="exampleInputPassword1">Brand</label>
                                <select name="brand_pr" class="form-control input-lg m-bot15" id="status_brand">
                                @foreach($brand_pr as $brand)
                                    <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                @endforeach
                                </select>
                                <label for="exampleInputPassword1">Status</label>
                                <select name="status_product" class="form-control input-lg m-bot15" id="status_product">
                                    <option value="0">Hide</option>
                                    <option value="1">Display</option>
                                </select>
                            </div>
                            <div class="form-group-submit">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <?php
                                    $notification=Session::get('notification');
                                    if($notification)
                                    {
                                        echo '<span class="text_notification">'.$notification.'</span>';
                                        Session::put('notification',null);
                                    }
                                ?>
                            </div>
                        </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection