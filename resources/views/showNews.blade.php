@extends('layout.layout2')
@section('content')
    <main class="container">
        <div class="row g-5 p-md-5">
            <div class="row col-md-9">
                <div class="p-md-3">
                    <h6>BLOG GUNDAM</h6>
                </div>
                <div class="row">
                    <h1>
                        <p>{{ $news->news_titles }}</p>
                    </h1>
                </div>
                <div class="mb-4 mx-4">
                    <span class="bg-black text-white">#tag</span>
                    <span class="bg-black text-white">#tag</span>
                    <span class="bg-black text-white">#tag</span>
                    <span class="bg-black text-white">#tag</span>
                </div>
                <div>
                    {!! $news->news_content !!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">Search</h4>
                        <input type="text">
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Tags</h4>
                        <input type="text">
                        <ol class="list-unstyled pt-2 mb-0">
                            <li><a href="#">March 2021</a></li>
                            <li><a href="#">February 2021</a></li>
                            <li><a href="#">January 2021</a></li>
                            <li><a href="#">December 2020</a></li>
                            <li><a href="#">November 2020</a></li>
                            <li><a href="#">October 2020</a></li>
                            <li><a href="#">September 2020</a></li>
                            <li><a href="#">August 2020</a></li>
                            <li><a href="#">July 2020</a></li>
                            <li><a href="#">June 2020</a></li>
                            <li><a href="#">May 2020</a></li>
                            <li><a href="#">April 2020</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
