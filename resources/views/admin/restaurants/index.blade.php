@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">

                <table class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($restaurants as $restaurant)
                            <tr>
                                <th>
                                    {{ $restaurant->id }}
                                </th>
                                <td>
                                    {{ $restaurant->name }}
                                </td>
                                <td>
                                    <strong>
                                        {{ $restaurant->address }}
                                    </strong>
                                </td>
                                <td>
                                    {{ $restaurant->city }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.restaurants.show', $restaurant) }}"
                                        class="btn btn-sm btn-primary">
                                        View
                                    </a>
                                    <a href="{{ route('admin.restaurants.edit', $restaurant) }}"
                                        class="btn btn-sm btn-success">
                                        Edit
                                    </a>
                                    {{-- <form class="d-inline-block" action="{{ route('admin.restaurants.destroy', $restaurant) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-warning">
                                            Delete
                                        </button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>
        </div>
    </div>
@endsection
