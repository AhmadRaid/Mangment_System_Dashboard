@extends('layouts.app')
@section('content')

    <div class="body">
        <!-- body title -->
        <div class="title first-section">
            <div class="d-flex">
                <div class="icon" style="margin-left: 15px">
                    <i class="fas fa-store fa-3x text-success"></i>
                </div>
                <div class="title">
                    <h2 class="mb-0">الادوار</h2>
                    <div class="det d-flex">
                        <i class="fas fa-home fa-small"></i>
                        <h6>
                            الرئيسية &nbsp &nbsp /
                            <span class="text-danger"> الأردن </span> &nbsp &nbsp /
                            <span>الادوار</span> &nbsp &nbsp /
                            <span class="text-danger">عرض الادوار</span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-end m-3 mb-1">
            <a href="{{route('roles.create')}}" class="btn btn-success col-lg-1 col-md-2 col-3"
            >إضافة</a
            >
        </div>
        <div class="table-data p-3 mt-3 expand">
            <div class="title d-flex align-items-center justify-content-between">
                <h4>عرض الأدوار</h4>
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
                    <th width="33.3333%">#</th>
                    <th width="33.3333%">الإسم</th>
                    <th width="33.3333%">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1 ?>
                @foreach($roles as $role)
                    <tr class="odd gradeX">
                        <td><?php echo $i++ ?></td>

                        <td>{{$role -> name}}</td>

                        <td class="center">
                            <a
                                class="btn btn-primary btn-sm"
                                data-toggle="tooltip"
                                data-placement="left"
                                title="عرض"
                                href="{{route('roles.show',$role -> id)}}"
                            >
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                            <a
                                class="btn btn-success btn-sm"
                                data-toggle="tooltip"
                                data-placement="left"
                                title="تعديل"
                                href="{{route('role.edit',$role -> id)}}"
                            >
                                <i class="fa fa-pen" aria-hidden="true"></i>
                            </a>

                            <a
                                class="btn btn-danger btn-sm"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="حذف "
                                href="{{route('roles.delete',$role -> id)}}"
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
    <script
        type="text/javascript"
        src="https://cdn.datatables.net/v/bs5/dt-1.10.25/b-1.7.1/r-2.2.9/sp-1.3.0/sl-1.3.3/datatables.min.js"
    ></script>

