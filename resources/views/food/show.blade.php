@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="card" style="width: 30rem;">
            <img src="{{asset('images')}}/{{$food->image}}" class="card-img-top" alt="{{$food->name}}">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">{{$food->name}}</h5>
                    <span class="badge badge-secondary">{{$food->category->name}}</span>
                </div>
                <hr>
                <p class="card-text">{{$food->description}}</p>

                <div class="d-flex justify-content-between align-items-center">
                    <p>{{$food->price}} &#128;</p>
                    <a href="{{url('/')}}">Back</a>
                </div>

            </div>
        </div>
    </div>



@endsection
