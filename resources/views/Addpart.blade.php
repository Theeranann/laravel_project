@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">หน้าหลัก</a></li>
        <li class="breadcrumb-item"><a href="/AllCar">รายการอะไหล่ทั้งหมด</a></li>
        <li class="breadcrumb-item active" aria-current="page">เพิ่มอะไหล่</li>
    </ol>
</nav>

<!-- Content here -->
<div class="container">
    <h1>เพิ่มรายละเอียดของอะไหล่</h1>
    @csrf
    <form class="row g-3" action="part-insert" method="POST">
        @csrf

        <div class="form-group col-md-5">
            <label for="Name">ชื่อ</label>
            <input type="text" class="form-control bg-white" name="Name" placeholder="ชื่ออะไหล่">
        </div>

        <div class="form-group col-md-5">
            <label for="Price">ราคา</label>
            <input type="text" class="form-control bg-white" name="Price" placeholder="ราคาอะไหล่">
        </div>

        <div class="form-group col-md-5">
            <label for="Unit">จำนวน</label>
            <input type="text" class="form-control bg-white" name="Unit" placeholder="จำนวนอะไหล่">
        </div>

        <div class="form-group col-md-5">
            <label for="Descript">คำอธิบาย</label>
            <input type="text" class="form-control bg-white" name="Descript" placeholder="คำอธิบาย">
        </div>

        <div class="form-group col-md-5">
            <label for="img">อัพโหลดรูปภาพของอะไหล่</label>
            <input type="text" class="form-control bg-white" name="img">
        </div>

        <!-- <div class="col-md-10 mb-3">
                                <label for="img" class="form-label">อัพโหลดรูปภาพของอะไหล่</label>
                                <input class="form-control bg-white" type="file" id="img">
                            </div> -->

        <div class="col-12">
            <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
        </div>

    </form>
</div>

@endsection