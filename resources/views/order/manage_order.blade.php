@extends('layout.layout')
@section('content')
<div class="row">
    
    <div class="col-lg-12">
    <!-- <section class="wrapper"> -->
        <!-- <section class="panel"> -->
            <header class="panel-heading">
                LIST ORDER
            </header>
            <div class="table-agile-info">
            <div class="panel panel-default">
                <?php
                    $message_status=Session::get('message_status');
                    if($message_status)
                    {
                        echo'<span class="message_status">'.$message_status.'</span>';
                        Session::put('message_status',null);
                    }
                ?>
                <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control w-sm inline v-middle">
                    <option value="0">Bulk Display</option>
                    <option value="1">Delete selected</option>
                    <option value="2">Bulk Hide</option>
                    <!-- <option value="3">Export</option> -->
                    </select>
                    <button class="btn btn-sm btn-default">Apply</button>                
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
                </div>
                <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;">
                        <label class="i-checks m-b-none">
                            <input type="checkbox"><i></i>
                        </label>
                        </th>
                        <th>Orderer's name</th>
                        <th>Total</th>
                        <th>Status</th>
                        
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_order as $order)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>{{$order->customer_name}}</td>
                        <td>{{$order->order_total}}</td>
                        <td><span class="text-ellipsis">
                            
                        <?php
                        if($order->order_status==0)
                        {
                        ?>
                            <a href="{{url('/unactive_orderstatus/'.$order->order_id)}}"><span class="hides">out stock</span></a>
                        <?php
                        }
                        else{
                        ?>
                            <a href="{{url('/active_orderstatus/'.$order->order_id)}}"><span class="display">in stock</span>
                        <?php
                        }
                        ?>
                        </span></td>
                        <td><span class="text-ellipsis">{{$order->created_at}}</span></td>
                        <td>
                        
                        <div class="active">
                            <a class="btn btn-info btnsm" href="#">
                                                    <i class="fas fa-pencil-alt"></i> Edit </a>
                            <a onclick="return confirm('Are you sure you want to delete it?')" class="btn btn-danger btnsm" href="{{url('/delete_order/'.$order->order_id)}}">
                                                    <i class="fas fa-trash"></i> Delete </a>
                        </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <footer class="panel-footer">
                <div class="row">
                    
                    <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">                
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    </div>
                </div>
                </footer>
            </div>
            </div>
        <!-- </section> -->
        <!-- </section> -->
    </div>
</div>
@endsection