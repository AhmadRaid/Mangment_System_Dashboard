@extends('layouts.app')
@section('content')
    <div class="body">
        <!-- body title -->
        <div class="title first-section">
            <h2>الموظفين</h2>
            <div class="det d-flex">
                <i class="fas fa-home fa-small"></i>
                <h6>
                    الموظفين &nbsp &nbsp /
                    <span class="text-danger"> الأردن </span> &nbsp &nbsp /
                    <span>الطلبات</span> &nbsp &nbsp /
                    <span class="text-danger">عرض الطلبات</span>
                </h6>
            </div>
        </div>

        <div class="row justify-content-end m-3 mb-1">
            <a
                href="addEmplyee.html"
                class="btn btn-success col-lg-1 col-md-2 col-3"
            >إضافة</a
            >
        </div>
        <div class="table-data p-3 mt-5 expand">
            <div class="title d-flex align-items-center justify-content-between">
                <h4>إجمالي المبيعات لكل شهر</h4>
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
                    <th width="5%">#</th>
                    <th width="10.1%">الصورة</th>
                    <th width="10.1%">الإسم</th>

                    <th width="10.1%">البريد الإلكترونى</th>

                    <th width="10.1%">الحالة</th>
                    <th width="10.1%">&nbsp;</th>
                    <th width="10.1%">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <tr class="odd gradeX">
                    <td>1</td>
                    <td>
                        <img
                            id="blah"
                            src="https://itcore.me/projects/crm//uploads/users/45c48cce2e2d7fbdea1afc51c7c6ad26.png"
                            width="70"
                            height="50"
                        />
                    </td>
                    <td>sale user</td>

                    <td>34reqq11qq@uuuu.hio</td>

                    <td class="center">
                        <span style="color: red !important"> غير نشط </span>
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
                            title="عرض "
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
                <tr class="odd gradeX">
                    <td>2</td>
                    <td>
                        <img
                            id="blah"
                            src="https://itcore.me/projects/crm//resources/dist/img/avatar.png"
                            width="70"
                            height="50"
                        />
                    </td>
                    <td>call center user</td>
                    <td>sadas3d@jjj.com</td>
                    <td class="center">
                        <span style="color: green !important"> نشط </span>
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
                            <i class="fas fa-pen"></i>
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
                <tr class="odd gradeX">
                    <td>3</td>
                    <td>
                        <img
                            id="blah"
                            src="https://itcore.me/projects/crm//resources/dist/img/avatar.png"
                            width="70"
                            height="50"
                        />
                    </td>
                    <td>dsadsd</td>
                    <td>sadasd@jjj.com</td>
                    <td class="center">
                        <span style="color: green !important"> نشط </span>
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

@endsection
