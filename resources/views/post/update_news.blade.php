@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Create News
                </header>
                <div class="panel-body">
                    <div class="position-center">
                            <form role="form" action="{{ url('post_update_news/' . $edit_p->news_id) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" value="{{ $edit_p->news_titles }}" name="news_titles"
                                        class="form-control" id="product_name" placeholder="Name Product">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea class="form-control" name="news_des" id="product_description" placeholder="Description">{{ $edit_p->news_des }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Content</label>
                                    <textarea class="form-control" name="news_content" id="ckeditor" placeholder="Content">{{ $edit_p->news_content }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label><br>
                                    <img class="img-fluid" src="{{ url('/images/' . $edit_p->news_images) }}" /><br>
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                                        placeholder="Image" value="Image">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Category </label>
                                    @foreach ($categories as $category)
                                        @if (in_array($category->tag_id, $selected_tag))
                                            <input type="checkbox" name="category_id[]" value="{{ $category->tag_id }}"
                                                checked>{{ $category->tag_name }}
                                        @else
                                            <input type="checkbox" name="category_id[]"
                                                value="{{ $category->tag_id }}">{{ $category->tag_name }}
                                        @endif
                                    @endforeach
                                </div>
                                <div class="form-group-status">
                                    <label for="exampleInputPassword1">Status</label>
                                    <select name="news_status" class="form-control input-lg m-bot15" id="status_product">
                                        <?php
                                        if($edit_p->news_status==0)
                                        {
                                    ?>
                                        <option value="{{ $edit_p->news_status }}">Hide</option>
                                        <option value="1">Display</option>
                                        <?php
                                        }
                                        else{
                                    ?>
                                        <option value="{{ $edit_p->news_status }}">Display</option>
                                        <option value="0">Hide</option>
                                        <?php
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group-submit">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <?php
                                    $notification = Session::get('notification');
                                    if ($notification) {
                                        echo '<span class="text_notification">' . $notification . '</span>';
                                        Session::put('notification', null);
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
