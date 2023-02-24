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
            จัดการสิทธิผู้ใช้งาน
        </h1>
    </div>
</div>


<!-- Brands -->
<div class="p-3 mb-2 bg-body text-dark rounded">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
            <div class="row justify-content-start ">
                <div class="ms-auto p-2 bd-highlight">

                </div>
            </div>

        </thead>
        <tbody>
            @foreach($user as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>@if ($user->is_admin == 1)
                    Admin
                    @else
                    User
                    @endif

                </td>
                <td>
                    <!-- <a href="#" class="btn btn-success">แก้ไข</a> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success editRole" data-coreui-toggle="modal" data-coreui-target="#exampleModal" data-id="{{ $user->id }}">
                        แก้ไข
                    </button>

                </td>

            </tr>

            @endforeach
        </tbody>
    </table>
</div>

<br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">จัดการสิทธิผู้ใช้งาน</h5>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="row g-3" action="permission-change" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">

                        <!-- <p>Modal content goes here.</p> -->
                        <input type="hidden" id="modal-id" name="user_id" value="">

                        <select name="Role" id="Role" class="form-select bg-white">
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                        </select>

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


<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.coreui.modal', () => {
        $(document).on("click", ".btn-success", function() {
            var id = $(this).data('id');
            $("#modal-id").val(id);
        });
        myInput.focus()
    })


    const delete_brand = document.getElementById('delete_brand')
    const delete_brand_input = document.getElementById('delete_brand_input')

    delete_brand.addEventListener('shown.coreui.modal_delete_brand', () => {
        delete_brand_input.focus()
    })
</script>
@endsection