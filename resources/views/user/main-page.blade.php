@extends('layouts.guest')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">หน้าหลัก</a></li>
        <li class="breadcrumb-item active" aria-current="page">รายการรถจักรยานยนต์ทั้งหมด</li>
    </ol>
</nav>

<div class="d-flex bd-highlight mb-3">
    <div class="p-2 bd-highlight">
        <h1 class="h2 text-3xl font-bold underline">
            รถจักรยานยนต์
        </h1>
    </div>

</div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($motorcycle as $row)

        <div class="col">
            <div class="card h-100" style="width: 23rem;">
                <img src="https://climate.onep.go.th/wp-content/uploads/2020/01/default-image.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $row->motorcycle_Year }} {{ $row->brands_name }} {{ $row->models_name }}</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text">ราคา: {{ $row->motorcycle_Price }} บาท</p>
                    <a href="/motorcycle-detail/{{$row->motorcycle_ID}}" class="btn btn-primary">ดูรายละเอียด</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

<br>
@endsection