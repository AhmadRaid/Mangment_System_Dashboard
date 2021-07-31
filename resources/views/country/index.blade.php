.@extends('layouts.app')
@section('content')
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
                            <a href="#"><i class="fas fa-power-off fa-lg"></i></a>
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
                <h2>الدول</h2>
                <div class="det d-flex">
                    <i class="fas fa-home fa-small"></i>
                    <h6>
                        الرئيسية &nbsp &nbsp /
                        <span class="text-danger"> الأردن </span> &nbsp &nbsp /
                        <span>الدول</span> &nbsp &nbsp /
                        <span class="text-danger">عرض الدول</span>
                    </h6>
                </div>
            </div>

            <div class="row justify-content-end m-3 mb-1">
                <a
                    href="addCountry.html"
                    class="btn btn-success col-lg-1 col-md-2 col-3"
                >إضافة</a
                >
            </div>
            <div class="table-data p-3 mt-3 expand">
                <div class="title d-flex align-items-center justify-content-between">
                    <h4>عرض الدول</h4>
                    <div class="resize-icons d-flex">
                        <i class="fas fa-compress-alt"></i>
                        <i class="fas fa-expand-arrows-alt"></i>
                    </div>
                </div>
                <hr/>
                <table
                    id="dataTableExample1"
                    class="table table-bordered table-striped table-hover"
                >
                    <thead>
                    <tr>
                        <th width="10%">#</th>
                        <th>الإسم</th>
                        <th>العملة</th>
                        <th>العلم</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX">
                        <td>4</td>

                        <td>العراق</td>

                        <td class="center">
                            <span> دينار </span>
                        </td>
                        <td>
                            <img
                                id="blah"
                                src="https://itcore.me/projects/crm//resources/dist/img/avatar.png"
                                width="70"
                                height="50"
                            />
                        </td>
                        <td>
                            <a
                                class="btn btn-warning btn-sm"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="عرض "
                                href="#"
                            >
                                الاحصائيات
                            </a>
                        </td>
                        <td class="center">
                            <a
                                class="btn btn-primary btn-sm"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="إخفاء "
                                href="#"
                            >
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>

                            <a
                                class="btn btn-success btn-sm"
                                data-toggle="tooltip"
                                data-placement="left"
                                title="تعديل"
                                href="#"
                            >
                                <i class="fa fa-pen" aria-hidden="true"></i>
                            </a>

                            <a
                                class="btn btn-danger btn-sm"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="حذف "
                                href="#"
                            >
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!-- end fourth section -->
        </div>
        <!-- end body(div) -->
    </div>

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

    <script src="../../js/script.js"></script>
    <script src="../../js/dataTable.js"></script>

@endsection
