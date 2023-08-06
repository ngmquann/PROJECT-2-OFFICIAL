@extends('layoutfrontend')

@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    {{-- @dd($news[0]) --}}
    <main class="container">
        <div class="px-2 py-2">
            <div class="carousel slide row mb-2 p-md-5" id="carouselExampleControls" style="min-height: 35rem"
                data-bs-ride="carousel">
                <div class="carousel-inner p-md-5 mb-1 text-white rounded bg-dark d-flex">

                    <div class="carousel-item active ps-5">
                        <div class="col-md-8 ps-5">
                            <a href="{{ url("news/show/{$news[0]->news_id}") }}"
                                class="text-decoration-none fw-bold text-reset link-primary">
                                <h2 class="display-4 fst-italic">{{ $news[0]->news_titles }}</h2>
                            </a>
                            <p class="lead my-3">{{ $news[0]->news_des }}</p>
                            <p class="lead mb-0"><a href="{{ url("news/show/{$news[0]->news_id}") }}"
                                    class="link-primary">Continue reading...</a>
                            </p>
                        </div>
                    </div>
                    @for ($x = 1; $x < count($news); $x++)
                        <div class="carousel-item ps-5">
                            <div class="col-md-8 px-0 ps-5">
                                <a href="{{ url("news/show/{$news[$x]->news_id}") }}"
                                    class="text-decoration-none fw-bold text-reset link-primary">
                                    <h2 class="display-4 fst-italic">{{ $news[$x]->news_titles }}</h2>
                                </a>
                                <p class="lead my-3">{{ $news[$x]->news_des }}</p>
                                <p class="lead mb-0"><a href="{{ url("news/show/{$news[$x]->news_id}") }}"
                                        class="link-primary">Continue reading...</a>
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="row g-5">
                {{-- there --}}
                @yield('blogs')
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

        </div>
        </div>

    </main>
@endsection
