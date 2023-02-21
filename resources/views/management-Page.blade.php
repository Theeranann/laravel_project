@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">หน้าหลัก</a></li>
        <li class="breadcrumb-item active" aria-current="page">เพิ่มข้อมูล</li>
    </ol>
</nav>

<div class="d-flex bd-highlight mb-3">
    <div class="p-2 bd-highlight">
        <h1 class="h2 text-3xl font-bold underline">
            เพิ่มข้อมูล
        </h1>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มยี่ห้อของรถ</h5>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="row g-3" action="motorcycle-brand-insert" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">ยี่ห้อของรถ:</label>
                        <div class="form-group">
                            <input type="text" class="form-control bg-white" name="name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Brands -->
<div class="p-3 mb-2 bg-body text-dark rounded">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            <div class="row justify-content-start ">
                <div class="ms-auto p-2 bd-highlight">
                    <!-- <a class="btn btn-primary" href="{{ route('motorcycle-add-page') }}" role="button">
                        เพิ่มยี่ห้อของรถ
                    </a> -->

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-coreui-toggle="modal" data-coreui-target="#exampleModal">
                        เพิ่มยี่ห้อของรถ
                    </button>

                </div>
            </div>

        </thead>
        <tbody>
            @foreach($motorcycle_brand as $brand)

            <!-- Modal delete_brand -->
            <div class="modal fade" id="modal_delete_brand" tabindex="-1" aria-labelledby="modal_delete_brand" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal_delete_brand">ยืนยันการลบ</h5>
                            <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <p>คุณต้องการที่จะลบ {{ $brand->brands_name }} ใช่หรือไม่?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </div>
                </div>
            </div>

            <tr>
                <th scope="row">{{ $brand->id }}</th>
                <td>{{ $brand->brands_name }}</td>
                <td>
                    <a href="#" class="btn btn-success">แก้ไข</a>
                    <a href="/SoftDelete-brand/{{ $brand->id }}" class="btn btn-danger">ลบ</a>
                    <!-- <button type="button" class="btn btn-danger" data-coreui-toggle="modal" data-coreui-target="#modal_delete_brand">
                        ลบ
                    </button> -->
                </td>

            </tr>

            @endforeach
        </tbody>
    </table>
</div>

<br>


<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.coreui.modal', () => {
        myInput.focus()
    })

    const delete_brand = document.getElementById('delete_brand')
    const delete_brand_input = document.getElementById('delete_brand_input')

    delete_brand.addEventListener('shown.coreui.modal_delete_brand', () => {
        delete_brand_input.focus()
    })
</script>
@endsection