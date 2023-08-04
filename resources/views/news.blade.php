@extends('layout.bloglayout')

@section('blogs')
    <div class="row g-5">
        <div class="row col-md-8">
            @if (count($news) < 1)
                <div class="p-5">
                    <h1>No Result.</h1>
                </div>
            @else
                @foreach ($news as $newsItem)
                    <div class="col-lg-6 mb-6 shadow-sm">
                        <div class="entry2">
                            <a href="{{ url("news/show/{$newsItem['news']->news_id}") }}">
                                <img src="{{ url('/images/news_images/' . $newsItem['news']->news_images) }}" alt="Image"
                                    class="img-fluid rounded"></a>
                            <div class="excerpt py-1">
                                @foreach ($newsItem['tags'] as $tag)
                                    <span
                                        class="post-category text-white bg-secondary mb-3 rounded-2 px-1">#{{ $tag }}</span>
                                @endforeach
                                <h3><a class="text-decoration-none fw-bold text-reset link-primary"
                                        href="{{ url("news/show/{$newsItem['news']->news_id}") }}">{{ $newsItem['news']->news_titles }}</a>
                                </h3>
                                <p>{{ $newsItem['news']->news_des }}</p>

                                <div class="row">
                                    <p class="col "><a href="{{ url("news/show/{$newsItem['news']->news_id}") }}">Read
                                            More</a></p>
                                    <div class="col d-flex flex-row-reverse">
                                        <span class="text-muted">&nbsp;
                                            {{ \Carbon\Carbon::parse($newsItem['news']->created_at)->format('F d, Y') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif


            <div class="row text-center pt-5 border-top">
                <div class="col-md-12">
                    <div class="custom-pagination">
                        <span>1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <span>...</span>
                        <a href="#">15</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 ps-5 bg-light">
            <div class="position-sticky rounded" style="top: 2rem;">
                <form action="{{ url('/news/search') }}" method="GET">
                    <div class="px-5 pt-5 mb-3">
                        <h4 class="fst-italic">Search</h4>
                        <div class="input-group pt-2">
                            <input name="titles" type="text" class="form-control">
                            <button type="submit" class="btn btn-outline-dark">Search</button>
                        </div>
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
@endsection
