<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>

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
    <style>
        .choose-country .title i {
            font-size: 40px;
            color: #72ab8e;
        }

        .choose-country .title .text {
            margin-right: 10px;
        }

        .choose-country .title .text h2 {
            color: #000656;
        }

        .choose-country .title .text h5 {
            font-weight: 900;
            opacity: 0.5;
        }

        .choose-country .country-flag {
            background-color: white;
        }

        .choose-country .country-flag img {
            width: 80%;
            height: 170px;
            margin: auto;
            display: block;
        }

        .choose-country .country-name {
            background-color: #f7f9fa;
            border: 2px solid #e5e9f1;
        }

        .choose-country .country-name h5 {
            font-weight: 900 !important;
            color: #6aada0;
        }

        .choose-country label {
            cursor: pointer;
        }

        .choose-country input[type="radio"] {
            display: none;
        }

        .box.checked .country-name,
        .box.checked .country-flag {
            background-color: rgb(178, 180, 184);
        }

    </style>
    <title>إختيار الدولة</title>
</head>
<body>
<div class="choose-country page p-5">
    <div class="container">
        <div class="title d-flex">
            <div class="icon">
                <i class="fas fa-home"></i>
            </div>
            <div class="text">
                <h2>نظام الادارة</h2>
                <h5>اضغط على أي دولة للدخول إلى النظام الخاص بالدولة</h5>
            </div>
        </div>

        <!-- countries -->
        <div class="row mt-5">
            @foreach($countries as $country)
                @can($country->name)
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="box  mb-4">
                            <div class="country-flag py-3">
                                <a href="{{route('country.SendCountry',$country ->id)}}"> <img
                                        src="{{$country -> banner}}" alt=""/> </a>
                            </div>
                            <div class="country-name p-2">
                                <h5>{{$country->name}}</h5>
                            </div>
                        </div>
                    </div>
                @endcan
            @endforeach
        </div>
    </div>
</div>

<!-- include jquery  -->
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script>
    document.onchange = function (e) {
        document.querySelector(".box.checked").classList.remove("checked");
        e.target.labels[0].querySelector(".box").classList.add("checked");
    };
</script>
</body>
</html>
