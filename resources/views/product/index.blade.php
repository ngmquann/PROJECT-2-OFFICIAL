<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('layout.layout')
@section('title', 'product index')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTable Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li> -->
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
        <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="cardtitle"></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="product" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Product Name</th>
                                    <th>New Price</th>
                                    <th>Old Price</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product_pr as $p)
                                    <tr>
                                        <td>{{ $p->product_id}}</td>
                                        <td>{{ $p->category_name}}</td>
                                        <td>{{ $p->brand_name}}</td>
                                        <td>{{ $p->product_name}}</td>
                                        <td>{{ $p->product_price}}</td>
                                        <td>{{ $p->sale}}</td>
                                        <td><img width="100px" src="{{ url("/images/{$p->image}")}}"/></td>
                                        <td> 
                                            <?php
                                            if($p->product_status==0)
                                            {
                                            ?>
                                                <a href="{{url('/unactive_productstatus/'.$p->product_id)}}"><span class="hides">Hide</span></a>
                                            <?php
                                            }
                                            else{
                                            ?>
                                                <a href="{{url('/active_productstatus/'.$p->product_id)}}"><span class="display">Display</span>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td class="text-right">
                                            <!-- <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-folder"></i> View
                                            </a> -->
                                            <a class="btn btn-info btnsm" href="{{url("/update_product/{$p->product_id}")}}">
                                                <i class="fas fa-pencil-alt"></i> Edit </a>
                                            <a class="btn btn-danger btnsm" href="{{url("/delete_product/{$p->product_id}")}}">
                                                <i class="fas fa-trash"></i> Delete </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    @endsection
    @section('script-section')
    <script>
        $(document).ready(function() 
        {
            $('#product').DataTable({
                paging: true,
                lengthChange: false,
                searching: false,
                ordering: true,
                info: true,
                autoWidth: false,
            });
        });
    </script>
@endsection