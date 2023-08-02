@extends('layout.layout')

@section('content')
    <div class="p-2 col-10 mx-auto">
        <section class="panel">
            <header class="panel-heading">
                Tags
            </header>
            <div class="table-agile-info">
                <form action="{{ url('/admin_news/save_tag') }}" method="post">
                    @csrf
                    <div class="input-group mb-3 col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Tag Name</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Username" name="tag_name"
                            aria-describedby="basic-addon1">
                        <button class="btn btn-success mx-2" type="submit">Create</button>
                    </div>
                </form>
                <div class="table-responsive">
                    <div class="panel panel-default">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tags as $tag)
                                    <tr>
                                        <th scope="row">{{ $tag->tag_id }}</th>
                                        <td>{{ $tag->tag_name }}</td>
                                        <td class="">
                                            {{-- <a class="btn btn-info btnsm"
                                            href="{{ url("/news/update/{$blog->news_id}") }}">
                                            <i class="fas fa-pencil-alt"></i> Edit </a> --}}
                                            <a class="btn btn-danger btnsm"
                                                href="{{ url("/admin_news/delete_tags/{$tag->tag_id}") }}">
                                                <i class="fas fa-trash"></i> Delete </a>
                                        </td>
                                    </tr>
                                @empty
                                    <p>No tags</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
