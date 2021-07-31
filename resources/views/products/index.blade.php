@extends('layouts.app')
@section('content')
    <div class="body">
        <!-- body title -->
        <div class="title first-section">
            <h2>المنتجات</h2>
            <div class="det d-flex">
                <i class="fas fa-home fa-small"></i>
                <h6>
                    الرئيسية &nbsp &nbsp /
                    <span class="text-danger"> الأردن </span> &nbsp &nbsp /
                    <span>المنتجات</span> &nbsp &nbsp /
                    <span class="text-danger">عرض المنتجات</span>
                </h6>
            </div>
        </div>

        <div class="row justify-content-end m-3 mb-1">
            <a
                href="{{route('product.create')}}"
                class="btn btn-success col-lg-1 col-md-2 col-3"
            >إضافة</a
            >
        </div>
        <div class="table-data p-3 mt-5 expand">
            <div class="title d-flex align-items-center justify-content-between">
                <h4>جميع المنتجات</h4>
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
                    <th>صورة</th>
                    <th>الاسم</th>
                    <th>المخزن</th>
                    <th>السعر</th>
                    <th>الحالة</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($products as $product)
                    <tr class="odd gradeX">
                        <td><?php echo $i++ ?></td>
                        <td>
                            <img
                                id="blah"
                                src="{{$product -> photo}}"
                                width="70"
                                height="50"
                            />
                        </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product-> store -> name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->active}}</td>

                        <td class="center">
                            <a
                                class="btn btn-primary btn-sm"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="إخفاء "
                                href=""
                            >
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>

                            <a
                                class="btn btn-success btn-sm"
                                data-toggle="tooltip"
                                data-placement="left"
                                title="تعديل"
                                href="{{route('product.edit',$product -> id)}}"
                            >
                                <i class="fa fa-pen" aria-hidden="true"></i>
                            </a>

                            <a
                                class="btn btn-danger btn-sm"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="حذف "
                                href={{route('product.delete',$product -> id)}}"
                            >
                                <i class=" fa fa-trash" aria-hidden="true"></i>
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
    {{--    <script src="{{asset('assets/js/dataTable.js')}}"></script>--}}

@endsection
