<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>

@yield('css1')
<!-- bootstrab css files cdn -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />

    <!-- font-awesome cdn -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <!-- google fonts [Almarai] -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Almarai&display=swap"
        rel="stylesheet"
    />
    <!--  datatables [Almarai] -->

    <link
        rel="stylesheet"
        href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css"
    />


    <title>
        @yield('title')
    </title>
</head>
<body>

@include('includes.header')
@include('includes.sidebare')
@yield('content')
<!-- include jquery  -->
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>
<!-- include bootstrab.js  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

<!-- include datatable  -->
<script
    type="text/javascript"
    src="https://cdn.datatables.net/v/bs5/dt-1.10.25/b-1.7.1/r-2.2.9/sp-1.3.0/sl-1.3.3/datatables.min.js"
></script>


<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/ask.js')}}"></script>
<script src="{{asset('assets/js/displayImage.js')}}"></script>
<script src="{{asset('assets/js/dataTable.js')}}"></script>
</body>
</html>
