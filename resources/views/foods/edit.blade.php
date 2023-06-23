@extends('layouts.app')

@section('content')

    <h1>This is edit page</h1>

    <form action="/foods/{{ $foods->id }}" method="POST" enctype="multipart/form-data">
        {{-- Để tránh bị sửa dữ liệu, bắt buộc phải thêm csrf vào trong method --}}
        @csrf
        @method('PUT')
        <input 
            class="form-control" 
            type="file" 
            name="image"
            style="margin-bottom: 20px">
        <input
            class="form-control" 
            type="text"
            name="name"
            value="{{ $foods->name }}"
            placeholder="Enter food name">

            <input
            class="form-control" 
            type="text"
            name="description"
            value="{{ $foods->description }}"
            placeholder="Enter food description"
            style="margin-top: 20px">

            <input
            class="form-control" 
            type="text"
            name="count"
            value="{{ $foods->count }}"
            placeholder="Enter food count"
            style="margin-top: 20px; margin-bottom:20px">

            <div>
                <label>Choose a category</label>
                <select style="margin-bottom: 20px" name="category_id">
                    @foreach ($categories as $categories)
                        <option value="{{ $categories->id }}">
                            {{ $categories->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-primary" 
                type="submit">
                Update food
            </button>

    </form>

@endsection