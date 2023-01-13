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
                        <li class="breadcrumb-item"><a href="/AllCar">รายการรถจักรยานยนต์ทั้งหมด</a></li>
                        <li class="breadcrumb-item active" aria-current="page">เพิ่มรายละเอียดการขายรถ</li>
                    </ol>
                </nav>
                <div class="container">
                    <!-- Content here -->
                    <div class="container">
                        <h1 class="text-3xl font-bold underline">
                            เพิ่มรายละเอียดการขายรถ
                        </h1>
                        @csrf
                        <form class="row g-3" action="add_sell" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">นามผู้ซื้อ</label>
                                <input type="text" class="form-control" name="name" placeholder="นามผู้ซื้อ">
                            </div>

                            <div class="form-group">
                                <label for="tel">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" name="name" placeholder="เบอร์โทรศัพท์">
                            </div>

                            <div class="form-group">
                                <label for="name">ที่อยู่</label>
                                <input type="text" class="form-control" name="address" placeholder="ที่อยู่">
                            </div>

                            <div class="col-12">
                                <hr>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="models">ยี่ห้อ</label>
                                <input type="text" class="form-control" name="models" value="{{$sell->motorcycle_Models}}" disabled>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="Manufacturer">รุ่น</label>
                                <input type="text" class="form-control" name="Manufacturer" value="{{$sell->motorcycle_Manufacturer}}" disabled>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="Year">ปี</label>
                                <input type="text" class="form-control" name="Year" value="{{$sell->motorcycle_Year}}" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="LicensePlate">เลขทะเบียน</label>
                                <input type="text" class="form-control" name="LicensePlate" value="{{$sell->motorcycle_LicensePlate}}" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="mileage">เลขไมล์</label>
                                <input type="text" class="form-control" name="mileage" value="{{$sell->motorcycle_mileage}}" disabled>
                            </div>

                            <div class="col-12">
                                <hr>
                            </div>

                            <div class="form-group">
                                <label for="Price">ราคา</label>
                                <input type="text" class="form-control" name="Price" value="{{$sell->motorcycle_Price}}">
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">เพิ่มข้อมูลการขาย</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

@endsection