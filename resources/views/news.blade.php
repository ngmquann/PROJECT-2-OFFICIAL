@extends('layout.layout2')

@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <main class="container">
        <div class="px-2 py-2">
            <div class="p-md-5 mb-1 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                        efficiently
                        about what’s most interesting in this post’s contents.</p>
                    <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
                </div>
            </div>

            <div class="row mb-2 p-md-5">
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">Featured post</h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content.</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%"
                                    y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>

                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h3 class="mb-0">Post title</h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                                additional content.</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%"
                                    y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="row col-md-8">
                    @foreach ($news as $newsItem)
                        <div class="col-lg-6 mb-6 shadow-sm">
                            <div class="entry2">
                                <a href="{{ url("news/show/{$newsItem['news']->news_id}") }}">
                                    <img src="{{ url('/images/news_images/' . $newsItem['news']->news_images) }}"
                                        alt="Image" class="img-fluid rounded"></a>
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
        </div>

    </main>
@endsection
