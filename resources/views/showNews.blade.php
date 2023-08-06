@extends('layoutfrontend')
@section('content')
    <main class="container">
        <div class="row g-5 p-md-5">
            <div class="row col-md-8">
                <div class="p-md-3">
                    <h6>BLOG GUNDAM</h6>
                </div>
                <div class="p-md-3 mx-3">
                    <h6 class="text-muted">&nbsp;{{ \Carbon\Carbon::parse($news->created_at)->format('F d, Y') }}</h6>
                </div>
                <div class="row mx-3">
                    <h3>{{ $news->news_titles }}</h3>
                </div>
                <div class="mx-4 mb-4">
                    @foreach ($selected_tag as $tag)
                        <span class="post-category text-white bg-secondary rounded-2 px-1 py-1">{{ $tag->tag_name }}</span>
                    @endforeach
                </div>
                <div>
                    <p>
                        {!! $news->news_content !!}
                    </p>
                </div>
            </div>

            <div class="col-md-4 ps-5">
                <div class="position-sticky rounded" style="top: 2rem;">
                    <form action="{{ url('/news/search') }}" method="GET">
                        <div class="px-5 pt-5 mb-3">
                            <h4 class="fst-italic">Search</h4>
                            <div class="input-group pt-2">
                                <input name="titles" type="text" class="form-control">
                                <button type="submit" class="btn btn-outline-dark">Search</button>
                            </div>
                        </div>
                    </form>
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
