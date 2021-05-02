@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card  mb-3">
                <div class="card-header">Edit Category</div>
                <div class="card-body text-primary">
                    <form action="{{route('categories.update', $category)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input type="text" value="{{$category->name}}" class="form-control @error('name') is-invalid @enderror" name="name"
                                   placeholder="Category">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-secondary">Update</button>
                            <a class="ml-2 text-warning" href="{{route('categories.index')}}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
