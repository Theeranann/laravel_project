@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            @include('partials.sidebar')
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active" aria-current="page">รายการรถจักรยานยนต์ทั้งหมด</li>
                    </ol>
                </nav>
                <div class="container">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <h1 class="h2 text-3xl font-bold underline">
                                รถจักรยานยนต์
                            </h1>
                            <!-- <p>รายการรถจักรยานยนต์ทั้งหมด</p> -->
                        </div>
                        <div class="ms-auto p-2 bd-highlight">
                            <a class="btn btn-primary" href="/addcar" role="button">เพิ่มรถจักรยานยนต์</a>
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

                        @foreach($motorcycle as $row)
                        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0 py-1">
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="https://climate.onep.go.th/wp-content/uploads/2020/01/default-image.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $row->motorcycle_Year }} {{ $row->brands_name }} {{ $row->models_name }}</h5>
                                    <p class="card-text">ราคา: {{ $row->motorcycle_Price }} บาท</p>
                                    <a href="/Detail/{{$row->motorcycle_ID}}" class="btn btn-primary">ดูรายละเอียด</a>
                                    <a href="/Sell/{{$row->motorcycle_ID}}" class="btn btn-success">ขายรถ</a>
                                    <a href="/SoftDeleteCar/{{$row->motorcycle_ID}}" class="btn btn-danger">ลบ</a>

                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
                <div class="py-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                @include('partials.footer')
            </main>
        </div>
    </div>

    @endsection