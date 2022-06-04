<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    @foreach ($data as $d)
        <a href="/products/{{ $d }}/{{ isset($num) ? $num : '0'}}"><p>{{ $d }}</p></a>        
    @endforeach
    {{-- <p>{{ $title }}</p> --}}
    {{-- <p>{{ $description }}</p> --}}
</body>
</html>