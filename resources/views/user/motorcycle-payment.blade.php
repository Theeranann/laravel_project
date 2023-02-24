@extends('layouts.guest')

@section('content')
<?php

use PromptPayQR\Builder; ?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">หน้าหลัก</a></li>
        <li class="breadcrumb-item"><a href="/motorcycle-overview">รายการรถจักรยานยนต์ทั้งหมด</a></li>
        <li class="breadcrumb-item"><a href="/motorcycle-overview">รายละเอียดรถจักรยานยนต์</a></li>
        <li class="breadcrumb-item"><a href="/motorcycle-overview">รายละเอียดการจอง</a></li>
        <li class="breadcrumb-item active" aria-current="page">ชำระค่าบริการ</li>

    </ol>
</nav>
<div class="container">

    @csrf
    <form class="row g-3" action="{{ route('insert-payment') }}" method="POST">
        @csrf
        <input type="hidden" name ="id" value="{{ $detail->motorcycle_ID }}">

        <div class="row py-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="card-header">
                                <h4 class="card-title"><em class="now-ui-icons loader_refresh spin"></em> ระบบอัตโนมัติกำลังรอให้ท่านโอนเงินเข้ามา.. </h4>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6 text-center">

                                <div class="card text-center">
                                    <div class="card-header">
                                        จำนวนเงินที่ต้องโอน
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title">200.00</h5>
                                    </div>
                                </div>

                                <br>

                                <div class="card text-center">
                                    <div class="card-header">
                                        ภายในเวลา
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title">29:10</h5>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="card text-center">
                                    <div class="card-header">
                                        รายละเอียดการชำระเงิน
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Order No: SO-2302-035197 &nbsp; </h5>
                                        <p class="card-text" style="color: red;">QR code นี้ใช้สำหรับคำสั่งซื้อนี้เท่านั้น และต้องโอนภายใน 21/2/2566 20:31:05 <br> หากเลยเวลา กรุณาทำรายการใหม่</p>
                                        <img src="https://promptpay.io/0640892686/200" class="card-img-top" alt="...">
                                    </div>
                                    <h4 class="card-title">ชื่อบัญชี บจก. ต.ยานยนต์ กรุ๊ป &nbsp; </h4>
                                    <div class="card-footer text-muted">
                                        ใช้สำหรับชำระค่าบริการบนเว็บไซต์เท่านั้น
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><br>
                                    <ui>
                                        <!-- <li class="text-muted"><span class="text-danger"><strong>ทศนิยมต้องตรง ห้ามปัดเศษเด็ดขาด</strong></span> ระบบตรวจสอบยอดของท่านจากเศษทศนิยม หากทศนิยมไม่ตรงระบบจะไม่ทราบว่าท่านได้โอนเข้ามาแล้ว </li> -->
                                        <li class="text-muted"> สามารถโอนเงินได้ทุกช่องทางทั้งคอมและมือถือ (ทศนิยมต้องตรง) </li>
                                        <li class="text-muted"> ท่านสามารถปิดหรือรีเฟรชหน้านี้ได้ โดยไม่ส่งผลกระทบต่อระบบ </li>
                                    </ui>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="card text-center">
                            <div class="card-header">
                                ยืนยันชำระค่าบริการ
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">หลังจากโอนเงินแล้วให้กดปุ่มยืนยัน</h5>
                                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                                <button type="submit" class="btn btn-primary">ยืนยัน</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </form>
</div>

@endsection