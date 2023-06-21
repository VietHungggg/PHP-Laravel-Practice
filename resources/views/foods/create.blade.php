@extends('layouts.app')

@section('content')

    <h1>This is create page</h1>

    <form action="/foods" method="POST">
        {{-- Để tránh bị sửa dữ liệu, bắt buộc phải thêm csrf vào trong method --}}
        @csrf
        <input
            class="form-control" 
            type="text"
            name="name"
            placeholder="Enter food name">

            <input
            class="form-control" 
            type="text"
            name="description"
            placeholder="Enter food description"
            style="margin-top: 20px">

            <input
            class="form-control" 
            type="text"
            name="count"
            placeholder="Enter food count"
            style="margin-top: 20px; margin-bottom:20px">

            <button class="btn btn-primary" 
                style="margin-bottom:20px"
                type="submit">
                Submit
            </button>

    </form>

@endsection