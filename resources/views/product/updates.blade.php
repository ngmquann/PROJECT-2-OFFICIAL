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
                    @foreach($edit_ps as $edit_p)
                        <form role="form" action="{{url('/post_update_product/'.$edit_p->product_id) }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name Product</label>
                                <input type="text" value="{{$edit_p->product_name}}" name="name_product" class="form-control" id="product_name" placeholder="Name Product">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Price</label>
                                <input type="text" value="{{$edit_p->product_price}}" name="price_product" class="form-control" id="product_price" data-inputmask="'alias': 'currency'" placeholder="Price"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Sale</label>
                                <input type="text" value="{{$edit_p->sale}}" name="sale" class="form-control" id="sale">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea class="form-control" name="des_product" id="product_description" placeholder="Description">{{$edit_p->product_des}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Content</label>
                                <textarea id="myeditorinstance" class="form-control ckeditor" name="content_product"  placeholder="Content">{{$edit_p->product_content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label><br>
                                <img class="img-fluid" src="{{ url('/images/'.$edit_p->image) }}"/><br>
                                <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Image" value="Image">
                            </div>
                            <div class="form-group-status">
                                <label for="exampleInputPassword1">Category</label>
                                <select name="category_pr" class="form-control input-lg m-bot15" id="status_category">
                                    @foreach($category as $cat)
                                        <option value="{{$cat->category_id}}" {{$cat->category_id == $edit_p->category_id ? 'selected' : null}}>{{$cat->category_name}}</option>
                                    @endforeach
                                </select>
                                <label for="exampleInputPassword1">Brand</label>
                                <select name="brand_pr" class="form-control input-lg m-bot15" id="status_brand">
                                    @foreach($edit_brand as $cate_brand_product)
                                        <option value="{{$cate_brand_product->brand_id}}" {{$cate_brand_product->brand_id == $edit_p->brand_id ? 'selected' : null}}>{{$cate_brand_product->brand_name}}</option>
                                    @endforeach
                                </select>
                                <label for="exampleInputPassword1">Status</label>
                                <select name="status_product" class="form-control input-lg m-bot15" id="status_product">
                                <?php
                                        if($edit_p->product_status==0)
                                        {
                                    ?>
                                    <option value="{{$edit_p->product_status}}">Hide</option>
                                    <option value="1">Display</option>
                                    <?php
                                        }
                                        else{
                                    ?>
                                    <option value="{{$edit_p->product_status}}">Display</option>
                                    <option value="0">Hide</option>
                                    <?php
                                        }
                                    ?>
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
                        @endforeach
                    </div>

                </div>
            </section>

    </div>

</div>
@endsection
