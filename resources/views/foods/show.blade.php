
@extends('layouts.app')

@section('content')
    <h1>Show detail food</h1>
    <h3>Name : {{ $foods->name }}</h3>
    <h3>Description : {{ $foods->description }}</h3>
    <h3>Count : {{ $foods->count }}</h3>
    <h3>Category ID : {{ $foods->category_id }}</h3>
    <h3>Food category : {{ $foods->category->name }}</h3>
    <h3>Food image : </h3>    
    <img src="{{ asset('images/' . $foods->image_path) }}" 
        alt="" 
        width="500px" 
        height="300px" 
        style="margin-bottom:30px">
@endsection