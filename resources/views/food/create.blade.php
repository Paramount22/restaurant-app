@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">

        <div class="col-md-8">
            @include('_partials.messages')
            <div class="card  mb-3">
                <div class="card-header">Add new food</div>
                <div class="card-body text-primary">
                    <form action="{{route('food.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name"
                                   value="{{old('name')}}"
                                   placeholder="Name">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" rows="3"
                              class="form-control @error('description') is-invalid @enderror"
                              placeholder="Description"
                            >{{old('description')}}</textarea>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror"
                                   name="price"
                                   value="{{old('price')}}"
                                   placeholder="Price">

                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category">Select Category</label>
                            <select class="form-control @error('category') is-invalid @enderror" id="category"
                                    name="category">
                                <option value="">Select category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                   name="image"
                                   placeholder="Price">

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-secondary">Submit</button>
                            <a class="ml-2 text-warning" href="{{route('food.index')}}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
