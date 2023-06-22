@extends('layouts.app')

@section('content')

    <h1>This is create page</h1>

    <form action="/foods/{{ $foods->id }}" method="POST">
        {{-- Để tránh bị sửa dữ liệu, bắt buộc phải thêm csrf vào trong method --}}
        @csrf
        @method('PUT')
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

            <button class="btn btn-primary" 
                style="margin-bottom:20px"
                type="submit">
                Update food
            </button>

    </form> 

@endsection