<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>เพิ่มรถ</title>
</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="/dashboard">home</a>
        </li>
    </ul>

    <!-- <p>{{$sell->motorcycle_Models}}</p>
    <p>{{$sell->motorcycle_Manufacturer}}</p>
    <p>{{$sell->motorcycle_Price}}</p> -->

    <div class="container">
        <!-- Content here -->
        <div class="container">
            <h1 class="text-3xl font-bold underline">
                เพิ่มรายละเอียดการขายรถ
            </h1>
            @csrf
            <form action="add_sell" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="name">นามผู้ซื้อ</label>
                    <input type="text" class="form-control" name="name" placeholder="นามผู้ซื้อ">
                </div>

                <div class="form-group">
                    <label for="tel">เบอร์โทรศัพท์</label>
                    <input type="text" class="form-control" name="name" placeholder="เบอร์โทรศัพท์">
                </div>

                <div class="form-group">
                    <label for="name">ที่อยู่</label>
                    <input type="text" class="form-control" name="address" placeholder="ที่อยู่">
                </div>

                <div class="form-group">
                    <label for="LicensePlate">เลขทะเบียน</label>
                    <input type="text" class="form-control" name="LicensePlate" value="{{$sell->motorcycle_LicensePlate}}" disabled>
                </div>

                <div class="form-group">
                    <label for="models">ยี่ห้อ</label>
                    <input type="text" class="form-control" name="models" value="{{$sell->motorcycle_Models}}" disabled>
                </div>

                <div class="form-group">
                    <label for="Manufacturer">รุ่น</label>
                    <input type="text" class="form-control" name="Manufacturer" value="{{$sell->motorcycle_Manufacturer}}" disabled>
                </div>

                <div class="form-group">
                    <label for="Year">ปี</label>
                    <input type="text" class="form-control" name="Year" value="{{$sell->motorcycle_Year}}" disabled>
                </div>

                <div class="form-group">
                    <label for="mileage">เลขไมล์</label>
                    <input type="text" class="form-control" name="mileage" value="{{$sell->motorcycle_mileage}}" disabled>
                </div>

                <div class="form-group">
                    <label for="Price">ราคา</label>
                    <input type="text" class="form-control" name="Price" value="{{$sell->motorcycle_Price}}">
                </div>

                <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>