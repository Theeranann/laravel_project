@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">หน้าหลัก</a></li>
        <li class="breadcrumb-item"><a href="/motorcycle-overview">รายการรถจักรยานยนต์ทั้งหมด</a></li>
        <li class="breadcrumb-item active" aria-current="page">รายละเอียด</li>
    </ol>
</nav>

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
        <a href="/motorcycle-sell-page/{{$detail->motorcycle_ID}}" class="btn btn-primary">ขายรถ</a>
    </div>
</div>




@endsection