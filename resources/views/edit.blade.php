@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        Post Edit
                    </div>
                    {{-- All Validation Code --}}
                    @if ($errors->any())
                        <div class="alert alert-danger mt-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="/posts/{{ $post->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{old('name',$post->name)}}" class="form-control"
                                    placeholder="Enter Post Name">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" cols="20"
                                    rows="5">{{old('description',$post->description)}}</textarea>
                            </div>
                            <div class="form-group">
                                <select name="category"  class="form-control mt-2">
                                    <option class="form-control" value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" {{$category->id == $post->category_id ? ' selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                            <a href="/posts/" class="btn btn-info mt-2">Back</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
