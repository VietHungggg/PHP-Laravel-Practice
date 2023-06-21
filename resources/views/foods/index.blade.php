 

@extends('layouts.app')

@section('content')

    <h1>This is food page</h1>

    <a href="foods/create" 
        class="btn btn-primary" role="button">
        New Food
    </a>
    
    @foreach ($foods as $foods)

        <li class="list-group-item d-flex justify-content-between align-items">
            <div class="ms-2 me-auto">
                <div class="fw-bold"> {{ $foods->name }}</div>
                {{ $foods -> description }}
            </div>
            <span class="badge bg-primary">
                {{ 'Count: '.$foods -> count }}
            </span>
        </li>

    @endforeach

@endsection