 

@extends('layouts.app')

@section('content')

    <h1>Update Food</h1>

    <a href="foods/create" 
        class="btn btn-primary" role="button">
        New Food
    </a>
    
    @foreach ($foods as $foods)

        <li class="list-group-item d-flex justify-content-between align-items">
            <div class="ms-2 me-auto">
                <a href="/foods/{{ $foods->id }}">
                    {{ $foods->name }}
                </a>
                {{ $foods -> description }}
            </div>
            <span class="badge bg-primary">
                {{ 'Count: '.$foods -> count }}
            </span>
            <a href="foods/{{$foods->id}}/edit"> Edit</a>
        </li>
        <form action="/foods/{{ $foods->id }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    @endforeach

@endsection