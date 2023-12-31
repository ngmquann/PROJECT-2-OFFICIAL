@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                Create Category
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ url('/save_category') }}" method="POST">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name Category</label>
                                <input type="text" name="name_category" class="form-control" id="exampleInputEmail1" placeholder="Name Category">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea class="form-control" name="des_category" id="exampleInputPassword1" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group-status">
                                <label for="exampleInputPassword1">Status</label>
                                <select name="status_category" class="form-control input-lg m-bot15">
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
    <div class="col-lg-12">
    <!-- <section class="wrapper"> -->
        <!-- <section class="panel"> -->
            <header class="panel-heading">
                LIST CATEGORY
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
                        <th>Name</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $cate)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>{{$cate->category_name}}</td>
                        <td><span class="text-ellipsis">
                            
                        <?php
                        if($cate->category_status==0)
                        {
                        ?>
                            
                            <a href="{{url('/unactive_categorystatus/'.$cate->category_id)}}"><span class="hides">Hide</span></a>
                        <?php
                        }
                        else{
                        ?>
                            <a href="{{url('/active_categorystatus/'.$cate->category_id)}}"><span class="display">Display</span>
                        <?php
                        }
                        ?>
                        </span></td>
                        <td><span class="text-ellipsis">{{$cate->category_date}}</span></td>
                        <td>
                        <!-- <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a> -->
                        <div class="active">
                            <a class="btn btn-info btnsm" href="{{url('/update_category/'.$cate->category_id)}}">
                                                    <i class="fas fa-pencil-alt"></i> Edit </a>
                            <a onclick="return confirm('Are you sure you want to delete it?')" class="btn btn-danger btnsm" href="{{url('/delete_category/'.$cate->category_id)}}">
                                                    <i class="fas fa-trash"></i> Delete </a>
                        </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$datas->links()}}
                </div>
            </div>
            </div>
        <!-- </section> -->
        <!-- </section> -->
    </div>
</div>
@endsection