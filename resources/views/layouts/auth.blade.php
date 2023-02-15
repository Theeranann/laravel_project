<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Option 1: CoreUI for Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">

    <!-- Option 2: CoreUI PRO for Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.4.3/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-DN37sKXjXaUfTUzPFe9B4+RwDGdqbWhLExfnr8IeOt7w92aTL9JVv33fauH+K9Ok" crossorigin="anonymous"> -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hello, world!</title>
</head>

<body>
    @yield('content')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: CoreUI for Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/js/coreui.bundle.min.js" integrity="sha384-n0qOYeB4ohUPebL1M9qb/hfYkTp4lvnZM6U6phkRofqsMzK29IdkBJPegsyfj/r4" crossorigin="anonymous"></script>

</body>

</html>
<!-- ======================================================================= -->