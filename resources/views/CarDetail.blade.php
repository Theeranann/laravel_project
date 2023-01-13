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
                        <li class="breadcrumb-item active" aria-current="page">รายละเอียด</li>
                    </ol>
                </nav>
                <!-- <div class="container">
                    <h1 class="text-3xl font-bold underline">
                        {{ $detail->motorcycle_Models }} {{ $detail->motorcycle_Manufacturer }}
                    </h1>

                    <div class="container">
                        <div class="card-body">
                            <h5 class="card-title">{{ $detail->motorcycle_Year }} {{ $detail->motorcycle_Models }} {{ $detail->motorcycle_Manufacturer }}</h5>
                            <p class="card-text">Price: ${{ $detail->motorcycle_Price }}</p>
                            <a href="/Sell/{{$detail->motorcycle_ID}}" class="btn btn-primary">ขายรถ</a>
                        </div>
                    </div>
                </div> -->

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <img src="https://climate.onep.go.th/wp-content/uploads/2020/01/default-image.jpg" class="img-fluid" alt="car image">
                            <h5 class="mt-3">{{ $detail->motorcycle_Models }} {{ $detail->motorcycle_Manufacturer }}</h5>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>ยี่ห้อ:</th>
                                        <td>{{ $detail->motorcycle_Models }}</td>
                                    </tr>
                                    <tr>
                                        <th>รุ่น:</th>
                                        <td>{{ $detail->motorcycle_Manufacturer }}</td>
                                    </tr>
                                    <tr>
                                        <th>ปีของรถ:</th>
                                        <td>{{ $detail->motorcycle_Year }}</td>
                                    </tr>
                                    <tr>
                                        <th>เลขทะเบียน:</th>
                                        <td>{{ $detail->motorcycle_LicensePlate }}</td>
                                    </tr>
                                    <tr>
                                        <th>เลขไมล์:</th>
                                        <td>{{ $detail->motorcycle_mileage }} กิโลเมตร</td>
                                    </tr>
                                    <tr>
                                        <th>สีของรถ:</th>
                                        <td>{{ $detail->motorcycle_Corlor }}</td>
                                    </tr>
                                    <tr>
                                        <th>ราคา:</th>
                                        <td>{{ $detail->motorcycle_Price }} บาท</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="/Sell/{{$detail->motorcycle_ID}}" class="btn btn-primary">ขายรถ</a>
                        </div>
                    </div>
                </div>


            </main>
        </div>
    </div>
</div>


@endsection