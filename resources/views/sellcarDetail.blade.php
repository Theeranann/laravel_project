@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">หน้าหลัก</a></li>
        <li class="breadcrumb-item active" aria-current="page">รายการขายทั้งหมด</li>
    </ol>
</nav>


<div class="d-flex bd-highlight mb-3">
    <div class="p-2 bd-highlight">
        <h1 class="h2 text-3xl font-bold underline">
            รายการขายทั้งหมด
        </h1>
    </div>
    <div class="ms-auto p-2 bd-highlight">
        <a class="btn btn-primary" href="/motorcycle-overview" role="button">เพิ่มรายการขาย</a>
    </div>
</div>

<div class="card-body bg-white rounded p-2">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">นามผู้ซื้อ</th>
                <th scope="col">รถจักรยานยนต์</th>
                <th scope="col">วันที่ขาย</th>
                <th scope="col">ราคาของรถ</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($orders as $order)

            <tr>
                <td>{{ $order->customers_firstName }} {{ $order->customers_lastName }}</td>
                <td>{{ $order->brands_name }} {{ $order->models_name }}</td>
                <td>{{ $order->created_at}}</td>
                <td>{{ $order->Order_Price }}</td>
                <td><a type="button" class="btn btn-warning" href="#">แก้ไข</a>
                    <a type="button" class="btn btn-primary" href="#">ใบเสร็จ</a>
                    <a type="button" class="btn btn-danger" href="#">ลบ</a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>



@endsection