@extends('layouts.app')
@section('content')
    <div class="container" id="restaurants-container">
        <div class="row justify-content-center">
            <div class="col-12">
                <form action="{{ route('admin.restaurants.update', $restaurant) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">
                            Name
                        </label>
                        <input type="text" class="form-control" id="name"
                            placeholder="Change your restaurant's name" name="name"
                            value="{{ old('name', $restaurant->name) }}">
                    </div>

                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-5">
                        <label for="category_id" class="form-label">
                            Address
                        </label>
                        <input type="text" class="form-control" id="address"
                            placeholder="Change your restaurant's address" name="name"
                            value="{{ old('address', $restaurant->address) }}">
                    </div>

                    @error('city')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-5">
                        <label for="category_id" class="form-label">
                            City
                        </label>
                        <input type="text" class="form-control" id="city"
                            placeholder="Change your restaurant's location" name="name"
                            value="{{ old('city', $restaurant->city) }}">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="me-3">
                            Update post
                        </button>
                        <button type="reset">
                            Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
