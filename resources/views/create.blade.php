@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header text-center">
                        Post Create
                    </div>
                    {{-- All Validation Code --}}
                    @if ($errors->any())
                        <div class="alert alert-danger m-2 shadow">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="/posts" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                    placeholder="Enter Post Name">
                                {{-- Simple Validation Code --}}
                                {{-- @error('name')
                                <div class="alert alert-danger mt-2 rounded">{{$message}}</div>
                                @enderror --}}
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" cols="20" rows="5"
                                    placeholder="Enter Post Description">{{ old('description') }}</textarea>
                                {{-- Simple Validation Code --}}
                                {{-- @error('description')
                                 <div class="alert alert-danger mt-2 rounded">{{$message}}</div>
                                 @enderror --}}
                            </div>
                            <div class="form-group">
                                <select name="category"  class="form-control mt-2">
                                    <option class="form-control" value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Create</button>
                            <a href="/posts/" class="btn btn-info mt-3">Back</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
