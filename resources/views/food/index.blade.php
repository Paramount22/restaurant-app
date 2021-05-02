@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            @include('_partials.messages')
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    Food
                    <a href="{{route('food.create')}}">New food</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col" style="width: 10%;">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($food as $key=> $item)
                            <tr>
                                <td><img src="{{asset('images')}}/{{$item->image}}" alt="{{$item->name}}"
                                         width="100"></td>
                                <td>{{ $item->name  }}</td>
                                <td>{{ $item->description  }}</td>
                                <td>{{ $item->price  }} &#128; </td>
                                <td> <span class="badge badge-info">{{ $item->category->name  }}</span> </td>
                                <td><a href="{{route('food.edit', $item)}}">
                                        <button class="btn btn-sm btn-outline-success">Edit</button>
                                    </a>
                                </td>

                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal"
                                            data-target="#exampleModal-{{$item->id}}">
                                        Delete
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="{{route('food.destroy', $item)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure ?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Food will be deleted.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <td class="alert alert-secondary" role="alert">
                                No food yet!
                            </td>
                        @endforelse

                        </tbody>
                    </table>
                    {{ $food->links() }}
                </div>

            </div>
        </div>
    </div>

@endsection
