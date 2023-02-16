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
            <form class="row g-3" action="motorcycle-model-insert" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <select name="Manufacturer" id="brand" class="form-select bg-white">
                            <option value="">Select Brand</option>
                            @foreach ($motorcycle_brand as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->brands_name }}</option>
                            @endforeach
                        </select>
                        <label for="message-text" class="col-form-label">รุ่นของรถ:</label>
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


<!-- Models -->
<div class="p-3 mb-2 bg-body text-dark rounded">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Brands</th>
                <th scope="col">Models</th>
                <th scope="col">Action</th>
            </tr>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-coreui-toggle="modal" data-coreui-target="#exampleModal">
                เพิ่มรุ่นของรถ
            </button>

        </thead>
        <tbody>
            @foreach($motorcycle_model as $model)
            <tr>
                <th scope="row">{{ $model->id }}</th>
                <td>{{ $model->brands_id }}</td>
                <td>{{ $model->models_name	 }}</td>
                <td>
                    <a href="#" class="btn btn-success">แก้ไข</a>
                    <a href="#" class="btn btn-danger">ลบ</a>
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