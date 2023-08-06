@extends('layout.bloglayout')

@section('blogs')
    <div class="row col-md-8 py-4 shadow">
        @if (count($news) < 1)
            <div class="p-5">
                <h1>No Result.</h1>
            </div>
        @else
            @foreach ($news as $newsItem)
                <div class="col-lg-6 mb-6">
                    <div class="entry2">
                        <a href="{{ url("news/show/{$newsItem['news']->news_id}") }}">
                            <img src="{{ url('/images/news_images/' . $newsItem['news']->news_images) }}" alt="Image"
                                class="img-fluid rounded"></a>
                        <div class="py-1">
                            @foreach ($newsItem['tags'] as $tag)
                                <strong
                                    class="d-inline-block mx-2 mt-1 text-primary fs-6 fst-italic">#{{ $tag }}</strong>
                                {{-- <span
                                        class="post-category text-white bg-secondary mb-3 rounded-2 px-1">#{{ $tag }}</span> --}}
                            @endforeach

                            <p><a class="text-decoration-none fw-bolder text-reset link-primary lh-1 fs-4"
                                    href="{{ url("news/show/{$newsItem['news']->news_id}") }}">{{ $newsItem['news']->news_titles }}</a>
                            </p>

                            <p class="fs-6">{{ $newsItem['news']->news_des }}</p>

                            <div class="row d-flex">
                                <p class="col align-self-end">
                                    <a href="{{ url("news/show/{$newsItem['news']->news_id}") }}">Read
                                        More</a>
                                </p>
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
@endsection
