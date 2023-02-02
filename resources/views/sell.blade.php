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
                        <form class="row g-3" action="{{ route('add_sell') }}" method="POST">
                            @csrf

                            <div class="form-group col-md-4">
                                <label for="name">ชื่อ</label>
                                <input type="text" class="form-control bg-white" name="firstName" placeholder="ชื่อ">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="name">นามสกุล</label>
                                <input type="text" class="form-control bg-white" name="lastName" placeholder="นามสกุล">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="name">เพศ</label>
                                <input type="text" class="form-control bg-white" name="Gender" placeholder="เพศ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">วันเกิด</label>
                                <input type="text" class="form-control bg-white" name="BirthDate" placeholder="วันเกิด">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="tel">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control bg-white" name="phoneNumber" placeholder="เบอร์โทรศัพท์">
                            </div>

                            <div class="form-group">
                                <label for="name">ที่อยู่</label>
                                <input type="text" class="form-control bg-white" name="Address" placeholder="ที่อยู่">
                            </div>

                            <div class="col-12">
                                <hr>
                            </div>

                            <input type="hidden" class="form-control" name="motorcycle_ID" value="{{$sell->motorcycle_ID }}" >
                            
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
                                <input type="hidden" class="form-control disabled" name="Price" value="{{$sell->motorcycle_Price}}" >
                                <input type="text" class="form-control disabled" name="" value="{{$sell->motorcycle_Price}}" disabled>
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