

@extends('layouts.app')

@section('content')
    <h1>About page</h1>

    {{-- Nhúng code PHP vào view  --}}
    {{ $Ayaka = 16 }}
    @if ($Ayaka == 18)
        <h3>良かった</h3>
    @elseif ($Ayaka < 18) 
        <h3>10年</h3>
    @else 
        <h3>行こう</h3>
    @endif

    @unless (empty('$name'))
        <h3>Name is the not empty</h3>
    @endunless

    @empty(!$name)
        <h3>Not Empty</h3>
    @endempty

    @isset($name)
        <h3>Isset -> Not empty</h3>   
    @endisset

    {{ $Mia = 20 }}
    @switch($Mia)
        @case(18)
            <h3>良かった</h3>
            @break
        @case($Mia < 18)
            <h3>10年</h3>
            @break
        @default
            <h3>結婚する</h3>
    @endswitch


@endsection