<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index function controller</h1>
    {{-- <h2>Title : {{$title }}</h2> --}}
    {{-- <h3>{{ $name }}</h3> --}}

    {{-- Muốn lấy dữ liệu từ 1 array thì phải dùng foreach --}}
    @foreach ($info as $item)
        <h3>{{ $item }}</h3>
    @endforeach

    {{-- @foreach ($products as $item)
        <h3>{{ $item }}</h3>
    @endforeach     --}}

</body>
</html>