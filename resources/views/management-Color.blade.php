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
            <form class="row g-3" action="motorcycle-color-insert" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">

                        <select name="Manufacturer" id="brand" class="form-select bg-white">
                            <option value="">Select Brand</option>
                            @foreach ($motorcycle_brand as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->brands_name }}</option>
                            @endforeach
                        </select>

                        <label for="model">Model:</label>
                        <select name="models" id="model" class="form-select bg-white">
                            <option value="">Select Model</option>
                        </select>

                        <label for="message-text" class="col-form-label">สีของรถ:</label>
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

<!-- Modal delete_brand -->
<div class="modal fade" id="modal_delete_brand" tabindex="-1" aria-labelledby="modal_delete_brand" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_delete_brand">ยืนยันการลบ</h5>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </div>
    </div>
</div>


<!-- Brands -->
<div class="p-3 mb-2 bg-body text-dark rounded">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <!-- <th scope="col">Brands</th> -->
                <!-- <th scope="col">Models</th> -->
                <th scope="col">Color</th>
                <th scope="col">Action</th>
            </tr>
            <div class="row justify-content-start ">
                <div class="ms-auto p-2 bd-highlight">
                    <!-- <a class="btn btn-primary" href="{{ route('motorcycle-add-page') }}" role="button">
                        เพิ่มยี่ห้อของรถ
                    </a> -->

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-coreui-toggle="modal" data-coreui-target="#exampleModal">
                        เพิ่มสีของรถ
                    </button>

                </div>
            </div>

        </thead>
        <tbody>
            @foreach($motorcycle_color as $color)
            <tr>
                <th scope="row">{{ $color->id }}</th>
                <!-- <td>{{ $color->brands_id }}</td> -->
                <!-- <td>{{ $color->models_id  }}</td> -->
                <td>{{ $color->color_name }}</td>
                <td>
                    <a href="#" class="btn btn-success">แก้ไข</a>
                    <a href="/SoftDelete-color/{{ $color->id }}" class="btn btn-danger">ลบ</a>
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