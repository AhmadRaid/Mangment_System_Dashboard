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
                href="{{route('users.create')}}"
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
                    <th width="10.1%">الإسم</th>

                    <th width="10.1%">البريد الإلكترونى</th>
                    <th width="10.1%">الادوار</th>

                    <th width="10.1%">&nbsp;</th>
                    <th width="10.1%">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1?>
                @foreach($users as $user)
                    <tr class="odd gradeX">
                        <td><?php echo $i++ ?></td>

                        <td>{{$user -> name}}</td>

                        <td>{{$user -> email}}</td>


                        <td>
                            @if (!empty($user->getRoleNames()))
                                @foreach ($user->getRoleNames() as $v)
                                    <h6>{{ $v }}</h6>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <a
                                class="btn btn-warning btn-sm"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="عرض "
                                href="# "
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
                                href="{{route('users.edit',$user->id)}}"
                            >
                                <i class="fa fa-pen" aria-hidden="true"></i>
                            </a>

                            <a
                                class="btn btn-danger btn-sm"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="حذف "
                                href="{{route('users.delete',$user->id)}}"
                            >
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- end fourth section -->
    </div>
    <!-- end body(div) -->
    </div>

    <script
        type="text/javascript"
        src="https://cdn.datatables.net/v/bs5/dt-1.10.25/b-1.7.1/r-2.2.9/sp-1.3.0/sl-1.3.3/datatables.min.js"
    ></script>

