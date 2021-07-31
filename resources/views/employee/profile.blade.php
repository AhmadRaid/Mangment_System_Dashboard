<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/employee.css')}}"/>

    <!-- bootstrab css files cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts [Almarai] -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet" />

    <title>مصادر</title>
</head>

<body>
    <div class="employee-page">
        <nav class="navbar fixed-top navbar-dark bg-dark p-3 text-right">
            <div class="icon">
                <i class="fas fa-bars text-warning fa-2x"></i>
            </div>
        </nav>
        <div class=" row">
            <!--start sidebar -->
            <div class="sidebar col-md-3">
                <div class="title">
                    <h3 class="text-center">لوحة التحكم</h3>
                </div>
                <div class="user text-center">
                    <img src="img.png" alt="" width="100px" />
                    <h5>مرحباً <span>Admin</span></h5>
                    <h6>أنت الآن في دولة <span>الأردن</span></h6>
                </div>
                <div class="navigations">
                    <ul class="lists list-unstyled">
                        <li class="">
                            <a href="/pages/index.html" class="d-flex">
                                <div class="icon"><i class="fas fa-home"></i></div>
                                <div class="anchor-name">الصفحة الرئيسية</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <div class="icon"><i class="fas fa-cog"></i></div>
                                <div class="anchor-name">الإعدادات العامة</div>
                            </a>
                        </li>
                        <li class="dropdown active">
                            <a class="w-100" data-bs-toggle="collapse" href="#Collapse1" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <i class="fas fa-store"></i>

                                المخازن (المنتجات)
                            </a>
                            <div class="collapse" id="Collapse1">
                                <div class="card card-body py-0">
                                    <ul>
                                        <li class="pb-0">
                                            <a href="/pages/Sources/addSources.html" class="d-flex">
                                                <div class="icon"><i class="fas fa-expand"></i></div>
                                                <div class="anchor-name">اضافة مصدر</div>
                                            </a>
                                        </li>

                                        <li class="pb-0">
                                            <a href="/pages/Sources/salesSources.html" class="d-flex">
                                                <div class="icon"><i class="fas fa-expand"></i></div>
                                                <div class="anchor-name">جميع المصادر</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <p class="m-0">
                                <a class="" data-bs-toggle="collapse" href="#Collapse2" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-store"></i>
                                    الطلبات
                                </a>
                            </p>
                            <div class="collapse" id="Collapse2">
                                <div class="card card-body py-0">
                                    <ul>
                                        <li class="pb-0">
                                            <a href="/pages/requests/requests.html" class="d-flex">
                                                <div class="icon"><i class="fas fa-expand"></i></div>
                                                <div class="anchor-name">اضافة طلب</div>
                                            </a>
                                        </li>
                                        <li class="pb-0">
                                            <a href="/pages/requests/addStatus.html" class="d-flex">
                                                <div class="icon"><i class="fas fa-expand"></i></div>
                                                <div class="anchor-name">اضافة حالة</div>
                                            </a>
                                        </li>
                                        <li class="pb-0">
                                            <a href="/pages/requests/status.html" class="d-flex">
                                                <div class="icon"><i class="fas fa-expand"></i></div>
                                                <div class="anchor-name">جميع الحالات</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                                <div class="anchor-name">طلبات تحتاج للتأكيد</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <div class="icon"><i class="fas fa-chart-bar"></i></div>
                                <div class="anchor-name">التقارير</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end sidebar -->

            <!-- start sales source (مصادر المبيعات) -->
            <div class="employee-container col-md-9 order-1 mt-md-1 pt-md-0 mt-5 pt-4">
                <!-- Start The data sources( المصادر) -->
                <h2>احصائيات الموظف</h2>
                <div class="employee col-12  p-3">
                    <div class="date-box mx-auto">
                        <h4>الفترة من -الى :</h4>
                        <form action="" class=" d-flex mt-3">
                            <input type="date" name="date-employee" id="date-employee" required>
                            <span class="mx-2">-</span>
                            <input type="date" name="date-employee" id="date-employee" required>
                        </form>
                    </div>
                    <div class="statistics row mt-3">
                        <div class="stat-div col-4">
                            <div class="stat-content  d-flex p-4 justify-content-between align-items-center">
                                <div class="stat-data d-flex flex-column justify-content-between"><span class="number">999</span><span
                                        class="title">عدد المبيعات</span>
                                </div>
                                <span class="span-icon"><i class="far fa-money-bill-alt"></i></span>
                            </div>
                        </div>
                        <div class="stat-div col-4">
                            <div class="stat-content d-flex p-4 justify-content-between align-items-center">
                                <div class="stat-data d-flex flex-column justify-content-between"><span class="number">999</span><span
                                        class="title">عدد الطلبات</span>
                                </div>
                                <span class="span-icon"><i class="fas fa-coins"></i></span>
                            </div>
                        </div>
                        <div class="stat-div col-4">
                            <div class="stat-content d-flex p-4 justify-content-between align-items-center">
                                <div class="stat-data d-flex flex-column justify-content-between"><span class="number">999</span><span
                                        class="title">عدد الطلبات الملغاه</span>
                                </div>
                                <span class="span-icon"><i class="far fa-window-close"></i></span>
                            </div>
                        </div>
                        <div class="stat-div col-4">
                            <div class="stat-content d-flex p-4 justify-content-between align-items-center">
                                <div class="stat-data d-flex flex-column justify-content-between"><span class="number">999</span><span
                                        class="title">نسبة الالغاء</span>
                                </div>
                                <span class="span-icon"><i class="fas fa-ban"></i></span>
                            </div>
                        </div>
                        <div class="stat-div col-4">
                            <div class="stat-content d-flex p-4 justify-content-between align-items-center">
                                <div class="stat-data d-flex flex-column justify-content-between"><span class="number">999</span><span
                                        class="title">نسبة التسليم</span>
                                </div>
                                <span class="span-icon"><i class="fas fa-check"></i></span>
                            </div>
                        </div>
                        <div class="stat-div col-4">
                            <div class="stat-content d-flex p-4 justify-content-between align-items-center">
                                <div class="stat-data d-flex flex-column justify-content-between"><span class="number">999</span><span
                                        class="title">العمولات</span>
                                </div>
                                <span class="span-icon"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <script src="../../js/script.js"></script>
</body>

</html>
