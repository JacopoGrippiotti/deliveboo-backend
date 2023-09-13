@extends('layouts.app')


@section('content')
    <div class="container" id="posts-container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <h4 class="card-header">
                        {{ $restaurant->user->name }}
                    </h4>
                    <h5 class="card-header"> ID: {{ $restaurant->id }} - {{ $restaurant->name }}
                    </h5>
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $restaurant->address }}
                        </h5>
                        <p class="card-text">
                            {{ $restaurant->city }}
                        </p>
                        <a href="{{ route('admin.restaurants.edit', $restaurant) }}" class="btn btn-sm btn-success">
                            Edit
                        </a>
                        <form class="d-inline-block" action="{{ route('admin.restaurants.destroy', $restaurant) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-warning">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
