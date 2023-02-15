@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">หน้าหลัก</a></li>
        <li class="breadcrumb-item"><a href="/AllCar">รายการรถจักรยานยนต์ทั้งหมด</a></li>
        <li class="breadcrumb-item active" aria-current="page">เพิ่มรถ</li>
    </ol>
</nav>

<div class="d-flex bd-highlight mb-3">
    <div class="p-2 bd-highlight">
        <h1 class="h2 text-3xl font-bold underline">
            เพิ่มรายละเอียดของรถ
        </h1>
    </div>
</div>


<!-- Content here -->
<div class="container">

    @csrf
    <form class="row g-3" action="motorcycle-insert" method="POST">
        @csrf

        <div class="form-group col-md-4">
            <label for="brand">Brand:</label>

            <select name="Manufacturer" id="brand" class="form-select bg-white">
                <option value="">Select Brand</option>
                @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->brands_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="model">Model:</label>
            <select name="models" id="model" class="form-select bg-white">
                <option value="">Select Model</option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="Year">ปี</label>
            <input type="text" class="form-control bg-white" name="Year" placeholder="ปีของรถ">
        </div>

        <div class="form-group col-md-6">
            <label for="LicensePlate">เลขทะเบียน</label>
            <input type="text" class="form-control bg-white" name="LicensePlate" placeholder="เลขทะเบียนของรถ">
        </div>

        <div class="form-group col-md-4">
            <label for="color">Color:</label>
            <select name="color" id="color" class="form-select bg-white">
                <option value="">Select Color</option>
            </select>
        </div>

        <div class="form-group col-md-2">
            <label for="mileage">เลขไมล์</label>
            <input type="text" class="form-control bg-white" name="mileage" placeholder="เลขไมล์ของรถ">
        </div>

        <div class="col-12">
            <hr>
        </div>

        <div class="form-group col-md-10">
            <label for="EngineNumber">หมายเลขเครื่อง</label>
            <input type="text" class="form-control bg-white" name="EngineNumber">
            <div id="passwordHelpBlock" class="form-text">
                เลขเครื่องยนต์ของรถ
            </div>
        </div>

        <div class="form-group col-md-10">
            <label for="VinNumber">หมายเลขประจำรถ</label>
            <input type="text" class="form-control bg-white" name="VinNumber">
            <div id="passwordHelpBlock" class="form-text">
                หมายเลขประจำรถจักรยานยนต์
            </div>
        </div>

        <div class="col-12">
            <hr>
        </div>

        <div class="col-md-10 mb-3">
            <label for="formFile" class="form-label">อัพโหลดรูปภาพของรถ</label>
            <input class="form-control bg-white" type="file" id="formFile">
        </div>

        <div class="form-group col-md-10">
            <label for="Price">ราคา</label>
            <input type="text" class="form-control bg-white" name="Price">
            <div id="passwordHelpBlock" class="form-text">
                ราคาของรถ
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
        </div>

    </form>
    <br>
</div>



{{-- AJAX CDN --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#brand').change(function() {

            var id = $(this).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // alert(id);
            //call models on Brand selected
            $.ajax({
                dataType: 'json',
                url: "/getBrand/" + id,
                type: "GET",
                success: function(data) {

                    console.log(data);

                    $('select[name="models"]').empty();
                    $.each(data, function(key, data) {
                        $('select[name="models"]').append('<option value="' + data.id + '">' + data.models_name + '</option>');
                    });

                },
                error: function(error) {
                    console.log(error);
                }
            });

            //call color on models selected
            $('#model').change(function() {
                let id = $(this).val();
                $.ajax({
                    dataType: 'json',
                    url: "/getColor/" + id,
                    type: "GET",
                    success: function(data) {
                        console.log(data);
                        $('select[name="color"]').empty();
                        $.each(data, function(key, data) {
                            $('select[name="color"]').append('<option value="' + data.id + '">' + data.color_name + '</option>');
                        });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    });
</script>

@endsection