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
            <h2>الاحصائيات</h2>
            <div class="det d-flex">
                <i class="fas fa-home fa-small"></i>
                <h6>
                    احصائيات الموظف &nbsp - &nbsp
                    <span class="text-danger"> اسم الموظف </span>
                </h6>
            </div>
        </div>
        <div
            class="employee col-12 p-3 d-flex justify-content-between card"
            style="box-shadow: 0 0 5px rgba(0, 0, 0, 0.2)"
        >
            <div class="date-box mx-auto">
                <h4 class="text-center">الفترة من -الى :</h4>
                <form action="" class="d-flex mt-3 flex-column flex-sm-row">
                    <input
                        type="date"
                        name="from"
                        id="date-from"
                    />
                    <span class="mx-2">-</span>
                    <input
                        type="date"
                        name="to"
                        id="date-to"
                    />
                </form>
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
                            <h5>999</h5>
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
                            <h5>999</h5>
                            <p>عدد الطلبات المدخلة</p>
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
                            <h5>999</h5>
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
                            <h5>999</h5>
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
                            <h5>999</h5>
                            <p>نسبة الإلغاء</p>
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
                            <h5>999</h5>
                            <p>نسبة التسليم</p>
                        </div>
                        <i class="fas fa-money-bill fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of boxes -->

        <!-- start third section (charts) -->
        <div class="third-section mt-5 p-2">
            <div
                class="row flex-column-reverse flex-lg-row justify-content-between"
            >
                <div class="col-lg-6 col-sm-12 mt-3 expand">
                    <div class="quickProc p-2">
                        <div
                            class="
										title
										d-flex
										align-items-center
										justify-content-between
									"
                        >
                            <h4>العمولات</h4>
                            <div class="resize-icons d-flex">
                                <i class="fas fa-compress-alt"></i>
                                <i class="fas fa-expand-arrows-alt"></i>
                            </div>
                        </div>
                        <hr/>
                        <div class="funcitonality p-3">
                            <div class="row justify-content-center">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">الكمية</th>
                                        <th scope="col">العمولة</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>كمية1</td>
                                        <td>العمولة1</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
    </div>
</div>

<!-- include jquery  -->
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>
<!-- include bootstrab.js  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script>
    let from = "",
        to = "";
    const sendRequest = () => {
        if (from != "" && to != "") {
            $.ajax({
                url: '{{route('users.statistics.post')}}',
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    from: from,
                    to: to,
                },
                success: function (data) {
                    console.log(data);
                }
            });
        } else {
        }
    }

    $("#date-from").on("change", function () {
        var fromDate = new Date($(this).val());
        from = fromDate;
        sendRequest();
    });

    $("#date-to").on("change", function () {
        var toDate = new Date($(this).val());
        to = toDate;
        sendRequest();
    });


</script>
</body>
</html>
