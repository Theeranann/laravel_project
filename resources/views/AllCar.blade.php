@extends('layouts.app')

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
        <!-- <p>รายการรถจักรยานยนต์ทั้งหมด</p> -->
    </div>
    <div class="ms-auto p-2 bd-highlight">
        <a class="btn btn-primary" href="{{ route('motorcycle-add-page') }}" role="button">เพิ่มรถจักรยานยนต์</a>
    </div>
</div>

<!-- //select box for filter -->
<div class="row">
    <div class="container py-4 col-3">
        <select class="form-select bg-white" aria-label="Default select example">
            <option selected>ยี่ห้อของรถ</option>
            <option value="1">Honda</option>
            <option value="2">Yamaha</option>
        </select>
    </div>
    <div class="container py-4 col-3">
        <select class="form-select bg-white" aria-label="Default select example">
            <option selected>รุ่นของรถ</option>
            <option value="1">Click</option>
            <option value="2">Wave</option>
            <option value="3">XMAX</option>
            <option value="3">Finn</option>
        </select>
    </div>
    <div class="container py-4 col-3">
        <select class="form-select bg-white" aria-label="Default select example">
            <option selected>ปีของรถ</option>
            <option value="1">2022</option>
            <option value="2">2020</option>
            <option value="3">2012</option>
        </select>
    </div>
    <div class="container py-4 col-3">
        <select class="form-select bg-white" aria-label="Default select example">
            <option selected>ราคาของรถ</option>
            <option value="1">ต่ำสุดก่อน</option>
            <option value="2">มากสุดก่อน</option>
        </select>
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
                    <a href="/motorcycle-detail-page/{{$row->motorcycle_ID}}" class="btn btn-primary">ดูรายละเอียด</a>
                    <a href="/motorcycle-sell-page/{{$row->motorcycle_ID}}" class="btn btn-success">ขายรถ</a>
                    <a href="/SoftDeleteCar/{{$row->motorcycle_ID}}" class="btn btn-danger">ลบ</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

<br>
@endsection