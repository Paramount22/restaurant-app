@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        @foreach($categories as $category)
        <div class="col-md-12">
            <h3>{{$category->name}}</h3>
            <div class="jumbotron">
                <div class="row">
                    @forelse($category->food as $food)
                    <div class="col-md-3">
                        <img src="{{asset('images')}}/{{$food->image}}" width="200" height="155" alt="{{$food->name}}">
                        <p class="text-center"> {{$food->name}}
                            <span>{{$food->price}}</span>
                        </p>
                        <p class="text-center">
                            <a class="btn btn-outline-danger" href="{{route('food.show', $food)}}">view</a>
                        </p>
                    </div>
                     @empty
                        <div class="alert alert-danger" role="alert">
                            No food in this category yet.
                        </div>

                    @endforelse
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
