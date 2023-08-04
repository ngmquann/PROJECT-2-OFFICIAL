@extends('layout.layout2')
@section('content')
    <main class="container">
        <div class="row g-5 p-md-5">
            <div class="row col-md-8">
                <div class="p-md-3">
                    <h6>BLOG GUNDAM</h6>
                </div>
                <div>
                    <h6 class="text-muted">&nbsp;{{ \Carbon\Carbon::parse($news->created_at)->format('F d, Y') }}</h6>
                </div>
                <div class="row">
                    <h1>
                        <p>{{ $news->news_titles }}</p>
                    </h1>
                </div>
                <div class="mb-4 mx-4">
                    @foreach ($selected_tag as $tag)
                        <span class="text-muted">Tag:</span>
                        <span class="post-category text-white bg-secondary mb-3 rounded-2 px-1">{{$tag->tag_name}}</span>
                    @endforeach
                </div>
                <div>
                    {!! $news->news_content !!}
                </div>
            </div>

            <div class="col-md-4 ps-5">
                <div class="position-sticky bg-light rounded" style="top: 2rem;">
                    <div class="px-5 pt-5 mb-3">
                        <h4 class="fst-italic">Search</h4>
                        <div class="input-group pt-2">
                            <input type="text" class="form-control">
                            <button type="submit" class="btn btn-outline-dark">Search</button>
                        </div>
                    </div>

                    <div class="px-5 pt-4">
                        <h4 class="fst-italic">Tags</h4>
                        <ol class="list-unstyled mb-0">
                            @foreach ($tags as $tag)
                                <li><a href="/news/search?tag={{ $tag->tag_id }}">{{ $tag->tag_name }}</a></li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
