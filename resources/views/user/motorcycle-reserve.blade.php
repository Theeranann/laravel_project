@extends('layouts.guest')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">หน้าหลัก</a></li>
        <li class="breadcrumb-item"><a href="/motorcycle-overview">รายการรถจักรยานยนต์ทั้งหมด</a></li>
        <li class="breadcrumb-item"><a href="/motorcycle-overview">รายละเอียดรถจักรยานยนต์</a></li>
        <li class="breadcrumb-item active" aria-current="page">รายละเอียดการจอง</li>
    </ol>
</nav>

<div class="row">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-8">

                <div class="card">

                    <div class="card-header text-center">
                        <p class="h3">เงื่อนไขการให้บริการ</p>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <ui class="terms-ulst">
                                    <ul class="text-muted"> - <span class="text-danger"><strong>Lorem ipsum dolor sit amet.</strong></span> Lorem, ipsum. </ul>
                                    <ul class="text-muted"> - <span class="text-danger"><strong>Lorem ipsum dolor sit.</strong></span> Lorem ipsum dolor sit amet consectetur adipisicing. </ul>
                                    <ul class="text-muted"> - หากสถานะขึ้นว่า สำเร็จ กรุณารอ 5 - 60 นาที สถานะถึงจะเปลี่ยน </ul>
                                    <ul class="text-muted"> - <span class="text-danger"><strong>ไม่มีการยกเลิกรายการ</strong></span> หรือ ขอคืนเงิน หลังการทำรายการแล้ว </ul>
                                    <ul class="text-muted"> - Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur earum exercitationem optio perferendis sit eaque. </ul>
                                    <ul class="text-muted"> - หากไม่ตรงระบบจะไม่ดำเนินการ และต้องนำหลักฐานการโอนเงินมาให้ทางทีมงานตรวจสอบ (มีระยะการดำเนินการ) </ul>
                                </ui>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-header">
                                <h4 class="card-title">รายละเอียดการจอง</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row terms-prodoct-info">
                            <div class="col-4"><b>ชื่อรถ</b></div>
                            <div class="col-8">{{ $detail->motorcycle_Models }} {{ $detail->motorcycle_Manufacturer }}</div>
                        </div>

                        <div class="row terms-prodoct-info">
                            <div class="col-4"><b>วิธีการชำระเงิน</b></div>
                            <div class="col-8">โอนเงินธนาคาร</div>
                        </div>

                        <div class="row terms-prodoct-info">
                            <div class="col-4"><b>เลขทะเบียน</b></div>
                            <div class="col-8">847682659</div>
                        </div>

                        <div class="row terms-prodoct-info">
                            <div class="col-4"><b>ชื่อผู้จอง</b></div>
                            <div class="col-8">User</div>
                        </div>

                        <br>

                        <div class="row terms-prodoct-info">
                            <div class="col-4"><b>ชื่อบัญชี</b></div>
                            <div class="col-8">บจก. ต.ยานยนต์ กรุ๊ป</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-8">ราคาสินค้า</div>
                            <div class="col-4 text-right">200.00</div>
                            <div class="col-8">ส่วนลด</div>
                            <div class="col-4 text-right">0</div>
                            <div class="col-8">ยอดชำระเงินทั้งหมด</div>
                            <div class="col-4 text-right" style="color: rgb(238, 77, 45);">200.00</div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="col-md-12">
                                    <a href="/motorcycle-reserve-payment/{{$detail->motorcycle_ID}}" class="btn btn-primary" style="width: 100%; margin-bottom: 10px;">
                                        ดำเนินการต่อ
                                    </a>
                                    <!-- <button type="button" class="btn btn-primary" style="width: 100%; margin-bottom: 10px;">ดำเนินการต่อ</button> -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 10px;">ย้อนกลับ</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-outline-danger" style="width: 100%;">ยกเลิกการจอง</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



@endsection