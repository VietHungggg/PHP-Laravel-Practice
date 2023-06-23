 

@extends('layouts.app')

@section('content')

    <h1>Update Food</h1>

    <a href="foods/create" 
        class="btn btn-primary" role="button"
        style="margin-bottom:20px">
        New Food
    </a>
    
    @foreach ($foods as $foods)

        <li class="list-group-item d-flex justify-content-between align-items">
            <div class="ms-2 me-auto" >
                <a href="/foods/{{ $foods->id }}">
                    {{ $foods->name }}
                </a>
                {{ $foods -> description }}
                <p style="margin-left: 20px">{{ 'Count: '.$foods -> count }}
                </p>
            </div>
            <form action="/foods/{{ $foods->id }}/edit">
                <button type="submit" class="btn btn-success" style="margin-right: 20px">Edit</button>
            </form>
            <form action="/foods/{{ $foods->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            {{-- <span class="badge bg-primary">
                {{ 'Count: '.$foods -> count }}
            </span> --}}
            {{-- <a href="foods/{{$foods->id}}/edit" style="margin-left: 20px"> Edit</a> --}}
        </li>
    @endforeach

@endsection