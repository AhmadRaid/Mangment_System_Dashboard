@extends('layouts.app')
@section('css1')
    <style>
        .history {
            direction: rtl;

            background-color: #fff;
        }

        .search-history input {
            width: 130px;
            border: 1px solid rgba(0, 0, 0, 0.2);
        }

        .search-history {
            position: relative;
        }

        .search-history input {
            width: 300px;
            padding: 5px;
        }

        .search-history i {
            position: absolute;
            left: 7px;
            top: 10px;
            opacity: 0.5;
        }

        .blue-span {
            background-color: #00bcd4;
            padding: 5px;
            border-radius: 3px;
            color: #fff;
            font-size: 13px;
            font-weight: 200;
        }

        .green-span {
            background-color: #4caf50;

            padding: 5px;
            border-radius: 3px;
            color: #fff;
            font-size: 13px;
            font-weight: 200;
            margin-right: 3px;
        }

        .history-content h5 {
            font-weight: 600;
        }

        .event h6 {
            opacity: 0.8;
            text-transform: capitalize;
            font-weight: 600;
        }

        .event h6 span {
            opacity: 0.7;
            font-size: 15px;
        }

        .event:nth-child(2) {
            padding-right: 50px;
        }

        #email-span {
            text-transform: lowercase;
        }

        .second-event {
            padding-right: 30px;
        }

        .event {
            padding-right: 20px;
            position: relative;
        }

        .event::before {
            content: "\25CF";
            font-size: 45px;
            position: absolute;
            right: -12px;
            z-index: 1;
            top: -35px;
            color: #155ebc;
        }

        .event::after {
            content: "";
            position: absolute;
            right: 0;
            top: 0;
            border-right: 3px solid #e0ddef;
        }

        .event:nth-child(1)::after,
        .event:nth-child(2)::after {
            height: 140%;
        }

        .event:nth-child(3)::after {
            height: 100%;
        }

        .event:nth-child(2) h5 {
            font-size: 18px;
        }
    </style>
@endsection
@section('title')
    بيانات الطلب
@endsection
@section('content')
    <div class="body">
        <div class="display-order-container">
            <div class="display-order">
                <div class="order-header">
                    <div class="d-flex">
                        <h2 class="content-title mb-0 my-auto">البيانات</h2>
                        <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ بيانات
                                    الطلب</span>
                    </div>
                </div>


                <form id="selectForm">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h5>بيانات الزبون </h5>
                            <hr>
                            <div class="row ">
                                <div class="col-md-6  mt-2">
                                    <label>الاسم : <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-sm  " name="name"
                                           type="text" value="ahmed" disabled>
                                </div>

                                <div class="col-md-6  mt-2">
                                    <label> المحافظة: <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-sm " name="country"
                                           type="text" disabled value="egypt">
                                </div>
                            </div>


                            <div class="row  ">
                                <div class=" col-md-6   mt-2  ">
                                    <label>رقم الهاتف: <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-sm  " name="tel-num"
                                           type="text" disabled value="0524562017">
                                </div>

                                <div class=" col-md-6   mt-2">
                                    <label> العنوان التفصيلي: <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-sm  " name="address"
                                           type="text" disabled value="Egypt-Alexandria ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <h5>بيانات المنتج </h5>
                            <hr>
                            <div class="row ">
                                <div class="col-md-6  mt-2">
                                    <label>القسم : <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-sm  " name="department"
                                           type="text" value="الجوالات" disabled>
                                </div>

                                <div class="col-md-6  mt-2">
                                    <label> المنتج: <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-sm " name="product"
                                           type="text" disabled value="ايفون 12">
                                </div>
                            </div>


                            <div class="row  ">
                                <div class=" col-md-6   mt-2  ">
                                    <label> الكمية: <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-sm  " name="quantity"
                                           type="text" disabled value="3">
                                </div>

                                <div class=" col-md-6   mt-2">
                                    <label> العنوان التفصيلي: <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-sm  " name="address"
                                           type="text" disabled value="Egypt-Alexandria ">
                                </div>
                            </div>


                            <table class="table table-bordered mt-4 text-center p-5">
                                <thead>
                                <tr>
                                    <th scope="col">م</th>
                                    <th scope="col">المنتج</th>
                                    <th scope="col">تفاضيل المنتج</th>
                                    <th scope="col">الكمية</th>
                                    <th scope="col">السعر</th>
                                </tr>
                                </thead>
                                <tbody class="table-body">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>رولات الدهان</td>
                                    <td>لا يوجد</td>
                                    <td>
                                        1<span class="d-block">هذا المنتج غير متوفر</span>
                                    </td>
                                    <td>15</td>

                                </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>

                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <h5>بيانات اضافية </h5>
                            <hr>
                            <div class="row ">
                                <div class="col-md-6  mt-2">
                                    <label>مصدر البيعة : <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-sm  " name="selling-source"
                                           type="text" value="رسائل الصفحة" disabled>
                                </div>

                                <div class="col-md-6  mt-2">
                                    <label> حالة الطلب: <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-sm " name="order-status"
                                           type="text" disabled value="تم الطلب">
                                </div>
                            </div>


                            <div class="row  ">
                                <div class=" col-md-6   mt-2  ">
                                    <label> ملاحظات التوصيل: <span class="text-danger">*</span></label>
                                    <textarea class="form-control form-control-sm  " name="details1"
                                              disabled>bla bla bla bla bla
                                                </textarea>
                                </div>

                                <div class=" col-md-6   mt-2">
                                    <label> ملاحظات اضافية: <span class="text-danger">*</span></label>
                                    <textarea class="form-control form-control-sm  " name="details2" disabled
                                    >bla bla bla bla bla bla bla bla bla bla
                                                </textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="history-container  mt-md-0 mt-5 bg-white">
                    <div class="history col-12 mt-4 p-3">
                        <div class="history-head mb-4 d-flex justify-content-between">
                            <h4>السجل</h4>
                            <!-- <div class="search-history">
                                <input type="search" />
                                <i class="fas fa-search"></i>
                            </div> -->
                        </div>
                        <hr/>
                        @foreach($audits as $audit)
                            <div class="history-content mt-4">
                                <!-- start first event -->
                                <div class="event">
                                    <h5>
                                        تم تغير حالة الطلب الى
                                        <span class="blue-span"> {{$audit ->user->status_id}}/</span>
                                    </h5>
                                    <h6>by :(Rawan radi)</h6>
                                    <h6>في :<span> 23:03:44 16-6-2021 </span></h6>
                                    <h6>
                                        بواسطة <span>(rawan radi)</span> البريد الالكتروني
                                        <span id="email-span">rawan@gmail.com</span>
                                    </h6>
                                </div>
                                <!-- end first event -->

                                <!-- start second event -->
                                <div class="event mt-4">
                                    <h5>
                                        تم تغير حالة الطلب الى
                                        <span class="blue-span">جاري التجهيز</span
                                        ><span class="green-span">تم تبليغ العميل</span>
                                    </h5>
                                    <h6>في :<span> 23:03:44 16-6-2021 </span></h6>
                                </div>
                                <!-- end second event -->

                                <!-- start third event -->
                                <div class="event mt-4">
                                    <h5 class="mb-3">
                                        <span class="green-span">تم انشاء الطلب</span>
                                    </h5>
                                    <h6>في :<span> 23:03:44 16-6-2021 </span></h6>
                                </div>
                                <!-- end third event -->
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

        <!-- row closed -->
    </div>
    <!-- Container closed -->
@endsection
