@include('partials.navbar')

<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h1 class="text-3xl font-bold underline">
            {{ $detail->motorcycle_Models }} {{ $detail->motorcycle_Manufacturer }}
        </h1>

        <div class="container">

            <!-- <img class="card-img-top" src="{{ $detail->motorcycle_id }}" alt="Card image cap"> -->
            <div class="card-body">
                <h5 class="card-title">{{ $detail->motorcycle_Year }} {{ $detail->motorcycle_Models }} {{ $detail->motorcycle_Manufacturer }}</h5>
                <p class="card-text">Price: ${{ $detail->motorcycle_Price }}</p>
                <a href="/Sell/{{$detail->motorcycle_ID}}" class="btn btn-primary">ขายรถ</a>
            </div>
        </div>

    </div>

</body>

</html>