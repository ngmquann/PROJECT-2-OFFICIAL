<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('layout.layout')
@section('title', 'product index')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
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
                                    <th>News Id</th>
                                    {{-- <th>Tag</th> --}}
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($news_pr as $p)
                                    <tr>
                                        <td>{{ $p->news_id}}</td>
                                        {{-- <td>{{ $p->category_id}}</td> --}}
                                        <td>{{ $p->news_titles}}</td>
                                        <td>{{ $p->news_des}}</td>
                                        <td><img width="100px" src="{{ url("/images/news_images/{$p->news_images}")}}"/></td>
                                        <td>
                                            <?php
                                            if($p->news_status==0)
                                            {
                                            ?>
                                                <a href="{{url('/unactive_newsstatus/'.$p->news_id)}}"><span class="hides">Hide</span></a>
                                            <?php
                                            }
                                            else{
                                            ?>
                                                <a href="{{url('/active_newsstatus/'.$p->news_id)}}"><span class="display">Display</span>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td class="text-right">
                                            <!-- <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-folder"></i> View
                                            </a> -->
                                            <a class="btn btn-info btnsm" href="{{url("/update_news/{$p->news_id}")}}">
                                                <i class="fas fa-pencil-alt"></i> Edit </a>
                                            <a class="btn btn-danger btnsm" href="{{url("/delete_news/{$p->news_id}")}}">
                                                <i class="fas fa-trash"></i> Delete </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            {{-- <tfoot>
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
                            </tfoot> --}}
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
