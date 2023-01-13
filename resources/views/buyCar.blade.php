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
                        <li class="breadcrumb-item active" aria-current="page">รายการรับซื้อ</li>
                    </ol>
                </nav>
                <div class="container">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <h1 class="h2 text-3xl font-bold underline">
                                รายการรับซื้อทั้งหมด
                            </h1>
                            <!-- <p>รายการรถจักรยานยนต์ทั้งหมด</p> -->
                        </div>
                        <div class="ms-auto p-2 bd-highlight">
                            <a class="btn btn-primary" href="/addcar" role="button">เพิ่มรายการรับซื้อ</a>
                        </div>
                    </div>

                    <div class="card-body bg-white rounded p-2">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">นามผู้ขาย</th>
                                    <th scope="col">รถจักรยานยนต์</th>
                                    <th scope="col">วันที่ขาย</th>
                                    <th scope="col">ราคาของรถ</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>John</td>
                                    <td>Honda wave</td>
                                    <td>08/04/2022</td>
                                    <td>28,500 บาท</td>
                                    <td><a type="button" class="btn btn-warning" href="#">แก้ไข</a>
                                        <a type="button" class="btn btn-primary" href="#">ใบเสร็จ</a>
                                        <a type="button" class="btn btn-danger" href="#">ลบ</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>John</td>
                                    <td>Honda wave</td>
                                    <td>08/04/2022</td>
                                    <td>28,500 บาท</td>
                                    <td><a type="button" class="btn btn-warning" href="#">แก้ไข</a>
                                        <a type="button" class="btn btn-primary" href="#">ใบเสร็จ</a>
                                        <a type="button" class="btn btn-danger" href="#">ลบ</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>John</td>
                                    <td>Honda wave</td>
                                    <td>08/04/2022</td>
                                    <td>28,500 บาท</td>
                                    <td><a type="button" class="btn btn-warning" href="#">แก้ไข</a>
                                        <a type="button" class="btn btn-primary" href="#">ใบเสร็จ</a>
                                        <a type="button" class="btn btn-danger" href="#">ลบ</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </main>
        </div>
    </div>

    @endsection