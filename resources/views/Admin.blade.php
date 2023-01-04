@include('partials.navbar')

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <a href="/dashboard">Home</a>
    <h1 class="text-3xl font-bold underline">
        All motorcycle
    </h1>
    @foreach($motorcycle as $row)
    <p>{{$row->motorcycle_Models}}</p>
    <p>{{$row->motorcycle_Manufacturer}}</p>
    <p>{{$row->motorcycle_Price}}</p>
    <a href="/Sell/{{$row->motorcycle_ID}}">ขายรถ</a>
    <hr>
    @endforeach
</body>
</html>