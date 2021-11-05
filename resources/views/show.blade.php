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
                        <h5 class="card-title">{{$post->name}}</h5>
                        <p class="card-text">{{$post->description}}</p>
                        <p class="card-text italic">{{'Category :: ' . $post->categories->name}}</p>
                        <hr>
                        <a href="/posts" class="btn btn-info mt-2">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
