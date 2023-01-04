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
            All motorcycle
        </h1>
        @foreach($motorcycle as $row)
        <div class="container">
            <div class="card" style="width: 18rem;">
                <!-- <img class="card-img-top" src="{{ $row->motorcycle_id }}" alt="Card image cap"> -->
                <div class="card-body">
                    <h5 class="card-title">{{ $row->motorcycle_Year }} {{ $row->motorcycle_Models }} {{ $row->motorcycle_Manufacturer }}</h5>
                    <p class="card-text">Price: ${{ $row->motorcycle_Price }}</p>
                    <a href="/Detail/{{$row->motorcycle_ID}}" class="btn btn-primary">ดูรายละเอียด</a>
                    <a href="/Sell/{{$row->motorcycle_ID}}" class="btn btn-primary">ขายรถ</a>
                    <a href="/SoftDeleteCar/{{$row->motorcycle_ID}}" class="btn btn-primary">ลบ</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>

</body>

</html>