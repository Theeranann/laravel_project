@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">หน้าหลัก</a></li>
        <li class="breadcrumb-item active" aria-current="page">รายการจอง</li>
    </ol>
</nav>

<div class="d-flex bd-highlight mb-3">
    <div class="p-2 bd-highlight">
        <h1 class="h2 text-3xl font-bold underline">
            รายการจองทั้งหมด
        </h1>
    </div>
</div>

<div class="card-body bg-white rounded p-2">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">นามผู้จอง</th>
                <th scope="col">รถจักรยานยนต์</th>
                <th scope="col">วันที่จอง</th>
                <th scope="col">ราคาของรถ</th>
                <th scope="col">สถานะ</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reserve as $row)
            <tr>
                <td>{{ $row->name }} </td>
                <td>{{ $row->brands_name }} {{ $row->models_name }} </td>
                <td>{{ $row->created_at }} </td>
                <td>{{ $row->motorcycle_Price }} บาท</td>
                <td><span class="badge rounded-pill bg-warning text-dark">รอตรวจสอบการชำระค่าบริการ</span></td>
                <td><a type="button" class="btn btn-primary" href="reserve-sell-page/{{$row->id}}">ขายรถ</a>
                </td>
            </tr>
        @endforeach
            
        </tbody>
    </table>
</div>


@endsection