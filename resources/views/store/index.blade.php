@extends('layouts.app')
@section('css1')
    <link
        rel="stylesheet"
        href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css"
    />
@endsection
@section('content')
    <div class="body">
        <!-- body title -->
        <div class="title first-section">
            <div class="d-flex">
                <div class="icon" style="margin-left: 15px">
                    <i class="fas fa-warehouse fa-3x text-success"></i>
                </div>
                <div class="title">
                    <h2 class="mb-0">المخازن</h2>
                    <div class="det d-flex">
                        <i class="fas fa-home fa-small"></i>
                        <h6>
                            الرئيسية &nbsp &nbsp /
                            <span class="text-danger"> الأردن </span> &nbsp &nbsp /
                            <span>المخازن</span> &nbsp &nbsp /
                            <span class="text-danger">عرض المخازن</span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-end m-3 mb-1">
            <a
                href="{{route('store.create')}}"
                class="btn btn-success col-lg-1 col-md-2 col-3"
            >إضافة</a
            >
        </div>
        <div class="table-data p-3 mt-3 expand">
            <div class="title d-flex align-items-center justify-content-between">
                <h4>عرض المخازن</h4>
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
                    <th width="2%">#</th>
                    <th>الإسم</th>
                    <th>المدينة</th>
                    <th>المحافظة</th>
                    <th>العنوان</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($stores as $store)
                    <tr class="odd gradeX">
                        <td><?php echo $i++ ?></td>
                        <td>{{$store->name}}</td>
                        <td>{{$store->country->name}}</td>
                        <td>{{$store->governorate -> name}}</td>
                        <td>{{$store->address}}</td>

                        <td class="center">
                            <a
                                class="btn btn-success btn-sm"
                                data-toggle="tooltip"
                                data-placement="left"
                                title="تعديل"
                                href="{{route('store.edit', $store -> id)}}"
                            >
                                <i class="fa fa-pen" aria-hidden="true"></i>
                            </a>

                            <a
                                class="btn btn-danger btn-sm"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="حذف "
                                href="{{route('store.delete',$store -> id)}}"
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



@endsection

