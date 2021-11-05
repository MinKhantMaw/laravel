@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- <a href="{{route('root')}}" class="btn btn-danger">Root</a> --}}

        <div class="row">
            <div class="col-md-12">
                <a href="/posts/create" class="btn btn-info mb-2">New Post</a>
                <div class="card shadow">
                    <div class="card-header text-center">
                        Content
                    </div>
                    <div class="card-body shadow">
                        @foreach ($data as $post)
                            <h5 class="card-title">{{ $post['name'] }}</h5>
                            <p class="card-text">{{ $post['description'] }}</p>
                            <a href="/posts/{{ $post['id'] }}" class="btn btn-primary">View</a>
                            <a href="/posts/{{ $post['id'] }}/edit" class="btn btn-warning">Edit</a>
                            <form action="/posts/{{ $post['id'] }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-2">Delete</button>
                            </form>

                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
