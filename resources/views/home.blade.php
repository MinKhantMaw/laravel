@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        Content
                    </div>
                    <div class="card-body">
                        @foreach ($data as $post)
                            <h5 class="card-title">{{ $post['name'] }}</h5>
                            <p class="card-text">{{ $post['description'] }}</p>
                            <a href="#" class="btn btn-primary">View</a>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
