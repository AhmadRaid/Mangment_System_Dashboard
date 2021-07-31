@extends('layouts.app')
@section('content')
    <div class="body">
        <!-- body title -->
        <div class="title first-section">
            <h2>الطلبات</h2>
            <div class="det d-flex">
                <i class="fas fa-home fa-small"></i>
                <h6>
                    الرئيسية &nbsp &nbsp /
                    <span class="text-danger"> الأردن </span> &nbsp &nbsp /
                    <span>الطلبات</span> &nbsp &nbsp /
                    <span class="text-danger">عرض الطلبات</span>
                </h6>
            </div>
        </div>

        <div class="row justify-content-end m-3 mb-1">
            <a
                href="addOrder.html"
                class="btn btn-success col-lg-1 col-md-2 col-3"
            >إضافة</a
            >
        </div>
        <div class="table-data p-3 mt-5 expand">
            <div class="title d-flex align-items-center justify-content-between">
                <h4>جميع الطلبات</h4>
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
                    <th>كود الطلب</th>
                    <th>اسم الزبون</th>
                    <th>رقم الهاتف</th>
                    <th>المحافظة</th>
                    <th>مصدر المبيعة</th>
                    <th>حالة الطلب</th>
                    <th>تاريخ إنشاء الطلب</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1?>
                @foreach($orders as $order)
                    <tr class="odd gradeX">
                        <td><?php echo $i++ ?></td>

                        <td>{{$order->id}}</td>
                        <td>{{$order->customer}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->governorate -> name}}</td>
                        <td>{{$order->sale_source -> name}}</td>
                        <td>{{$order->status_order -> name}}</td>
                        <td>{{$order->created_at}}</td>


                        <td>
                            <a
                                class="btn btn-warning btn-sm"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="عرض "
                                href=""
                            >
                                الاحصائيات
                            </a>
                        </td>
                        <td class="center">
                            <a
                                class="btn btn-primary btn-sm"
                                data-toggle="tooltip"
                                data-placement="left"
                                title="عرض"
                                href="{{route('order.show',$order->id)}}"
                            >
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                            <a
                                class="btn btn-success btn-sm"
                                data-toggle="tooltip"
                                data-placement="left"
                                title="تعديل"
                                href="{{route('order.edit',$order->id)}}"
                            >
                                <i class="fa fa-pen" aria-hidden="true"></i>
                            </a>

                            <a
                                class="btn btn-danger btn-sm"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="حذف "
                                href="{{route('order.delete',$order->id)}}"
                            >
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
