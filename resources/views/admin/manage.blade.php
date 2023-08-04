<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('layout.layout')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Order</h1>
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
                                    <th>Customer Name</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_order as $order)
                                    <tr>
                                        <td>{{ $order->customer_name}}</td>
                                        <td>{{ $order->order_total}}</td>
                                        <td>{{ $order->order_status}}</td>
                                        <td class="text-right">
                                            <a class="btn btn-info btnsm" href="{{url('/view-order/'. $order->order_id)}}">
                                                <i class="fas fa-pencil-alt"></i> Edit </a>
                                            <a class="btn btn-danger btnsm" href="{{url('/delete_order/'. $order->order_id)}}">
                                                <i class="fas fa-trash"></i> Delete </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    {{$all_order->links()}}
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection