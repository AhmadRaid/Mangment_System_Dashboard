<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/main/main.css')}}"/>
    <!--<link rel="stylesheet" href="../../css/home.css" /> -->
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

    <title>الرئيسية</title>
</head>
<body>
<div class="main-page page">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-end justify-content-between w-100">
            <div class="right d-flex align-items-center">
                <div class="nav-title text-center"><h3>لوحة التحكم</h3></div>
                <div class="icon">
                    <i class="fas fa-expand fa-lg"></i>
                    <i class="fas fa-bars fa-lg d-none"></i>
                </div>
            </div>
            <div class="left">
                <ul class="list-unstyled d-flex">
                    <li>
                        <a href=""><i class="far fa-comment-alt fa-lg"></i></a>
                    </li>
                    <li>
                        <i class="fas fa-user-plus fa-lg"></i>
                    </li>
                    <li class="off-btn">
                        <a href=""><i class="fas fa-power-off fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- start sidebar ************************************ -->
    <aside class="sidebar">
        <div class="sidebar-header d-flex flex-column align-items-center">
            <div class="image"><img src="" alt=""/></div>
            <h6>مرحبا <span>Admin</span></h6>
            <h5>أنت الإن في دولة <span>العراق</span></h5>
        </div>
        <div class="sidebar-lists mt-5">
            <ul class="list-unstyled">
                <li class="active">
                    <a href="#" class="d-flex">
                        <div class="icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h6>الصفحة الرئيسية</h6>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <div class="icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <h6>الاعدادات العامة</h6>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <div class="icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <h6>المخازن (المنتجات)</h6>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <div class="icon">
                            <i class="fas fa-expand"></i>
                        </div>
                        <h6>مصادر المبيعات</h6>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <div class="icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <h6>الطلبات</h6>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <div class="icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <h6>طلبات تحتاج للتأكيد</h6>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- end of sidebar ************************************-->

    <!-- start body ************************************-->
    <div class="body">
        <!-- body title -->
        <div class="title first-section">
            <h2>الصفحة الرئيسية</h2>
            <div class="det d-flex">
                <i class="fas fa-home fa-small"></i>
                <h6>
                    الصفحة الرئيسية &nbsp - &nbsp
                    <span class="text-danger"> الأردن </span>
                </h6>
            </div>
        </div>
        <!-- boxes that contain full statistics -->
        <div class="full mt-5 second-section">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div
                        class="
									full-stat
									d-flex
									align-items-center
									justify-content-between
								"
                    >
                        <div class="name">
                            <h5>{{$sold}}</h5>
                            <p>إجمالي المبيعات الكلي</p>
                        </div>
                        <i class="fas fa-money-bill fa-2x"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div
                        class="
									full-stat
									d-flex
									align-items-center
									justify-content-between
									text-center
								"
                    >
                        <div class="name">
                            <h5>{{$order}}</h5>
                            <p>عدد الطلبات الكلي</p>
                        </div>
                        <i class="fas fa-database fa-2x"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div
                        class="
									full-stat
									d-flex
									align-items-center
									justify-content-between
									text-center
								"
                    >
                        <div class="name">
                            <h5>{{$delivered}}</h5>
                            <p>الطلبات التي تم تسليمها</p>
                        </div>
                        <i class="fas fa-shipping-fast fa-2x"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div
                        class="
									full-stat
									d-flex
									align-items-center
									justify-content-between
									text-center
								"
                    >
                        <div class="name">
                            <h5>{{$canceled}}</h5>
                            <p>الطلبات الملغية</p>
                        </div>
                        <i class="far fa-minus-square fa-2x"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div
                        class="
									full-stat
									d-flex
									align-items-center
									justify-content-between
									text-center
								"
                    >
                        <div class="name">
                            <h5>{{$employee}}</h5>
                            <p>عدد الموظفين</p>
                        </div>

                        <i class="fas fa-user-friends fa-2x"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div
                        class="
									full-stat
									d-flex
									align-items-center
									justify-content-between
									text-center
								"
                    >
                        <div class="name">
                            <h5>{{$product}}</h5>
                            <p>المنتجات</p>
                        </div>
                        <i class="fas fa-money-bill fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of boxes -->

        <!-- start third section (charts) -->
        <div class="third-section mt-5 p-2">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-8 col-sm-12 charts mt-3 p-2 expand">
                    <div
                        class="title d-flex align-items-center justify-content-between"
                    >
                        <h4>إجمالي المبيعات لكل شهر</h4>
                        <div class="resize-icons d-flex">
                            <i class="fas fa-compress-alt"></i>
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                    </div>
                    <hr/>
                    <canvas id="myChart" width="100%"></canvas>
                </div>
                <div class="col-lg-4 col-sm-12 mt-3 expand">
                    <div class="quickProc p-2">
                        <div
                            class="
										title
										d-flex
										align-items-center
										justify-content-between
									"
                        >
                            <h4>إجراءات سريعة</h4>
                            <div class="resize-icons d-flex">
                                <i class="fas fa-compress-alt"></i>
                                <i class="fas fa-expand-arrows-alt"></i>
                            </div>
                        </div>
                        <hr/>
                        <div class="funcitonality">
                            <div class="row justify-content-center">
                                <div
                                    class="
												procedBox
												d-flex
												flex-column
												align-items-center
												justify-content-center
											"
                                >
                                    <div class="icon">
                                        <i class="fas fa-cart-plus fa-lg"></i>
                                    </div>
                                    <div class="title">إضافة منتج</div>
                                </div>
                                <div
                                    class="
												procedBox
												d-flex
												flex-column
												align-items-center
												justify-content-center
											"
                                >
                                    <div class="icon">
                                        <i class="fas fa-warehouse fa-lg"></i>
                                    </div>
                                    <div class="title">إضافة مخزن</div>
                                </div>
                                <div
                                    class="
												procedBox
												d-flex
												flex-column
												align-items-center
												justify-content-center
											"
                                >
                                    <div class="icon">
                                        <i class="fas fa-file fa-lg"></i>
                                    </div>
                                    <div class="title">إضافة طلب</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end third section (charts) -->

        <!-- start fourth section  -->
        <div class="fourth-section mt-5 p-2 expand">
            <div class="title d-flex align-items-center justify-content-between">
                <h4>الطلبات الأخيرة</h4>
                <div class="resize-icons d-flex">
                    <i class="fas fa-compress-alt"></i>
                    <i class="fas fa-expand-arrows-alt"></i>
                </div>
            </div>
            <hr/>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">الكود</th>
                    <th scope="col">العميل</th>
                    <th scope="col">المبلغ</th>
                    <th scope="col">تاريخ الانشاء</th>
                    <th scope="col">الحالة</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td>مصطفى</td>
                    <td>50</td>
                    <td>56161</td>
                    <td>تم</td>
                    <td>[ <a href="#">عرض</a>]</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- end fourth section -->
    </div>
</div>

<!-- include charts.js  -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
<!-- include jquery  -->
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>
<!-- include bootstrab.js  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script>
    var ctx = document.getElementById("myChart").getContext("2d");
    $.ajax({
        url: `{{route('chart')}}`,
        type: "GET",
        data: {
            _token: "{{ csrf_token() }}",
        },
        success: function (months) {
            let arrayOfMonths = [];
            for (let i = 0; i < 11; ++i) {
                let month = months.find((month) => month.month - 1 === i);
                arrayOfMonths[i] = month ? month.Solid : 0;
            }
            var myChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: [
                        "يناير",
                        "فبراير",
                        "مارس",
                        "ابريل",
                        "مايو",
                        "يونيو",
                        "يوليو",
                        "أغسطس",
                        "سبتمبر",
                        "أكتوبر",
                        "نوفمبر",
                        "ديسمبر",
                    ],
                    datasets: [
                        {
                            label: "المبيعات",
                            // data: [...arrayOfMonths],
                            data: [...arrayOfMonths],
                            backgroundColor: ["#98CEF3"],
                            barThickness: 40,
                        },
                    ],
                },
                options: {
                    scales: {
                        yAxes: [
                            {
                                display: true,
                                ticks: {
                                    beginAtZero: true, // minimum value will be 0.
                                    suggestedMin: 0,
                                    suggestedMax: 1000,
                                    stepSize: 1, // 1 - 2 - 3 ...
                                },
                            },
                        ],
                    },
                },
            });
        },
    });
</script>
<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
