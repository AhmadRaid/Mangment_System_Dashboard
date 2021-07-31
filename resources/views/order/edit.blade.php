<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/orders/addOrder.css')}}"/>

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
    <!--  datatables [Almarai] -->


    <title>
        تعديل طلب
    </title>
</head>
<body>
@include('includes.header')
@include('includes.sidebare')
<div class="body">

    <div class="add-container">
        <div class="
							header
							d-flex
							align-items-center
							justify-content-between
							mb-4
						">
            <div class="header-title d-flex align-items-center">
                <div class="header-icon">
                    <i class="fab fa-first-order-alt"></i>
                </div>
                <div class="header-text">
                    <h4 class="mb-0 my-auto">صفحة اضافة طلب</h4>
                </div>
            </div>
            <div class="view-all-adds">
                <a href=" " class="btn btn-success btn-all-emp">عرض الكل</a>
            </div>
        </div>
        <form method="POST" action="{{route('order.update', $order -> id)}}">
        @csrf
        <!-- بدء بيانات الزبون -->
            <div class="card expand">
                <div class="card-body">
                    <div class="
									title
									d-flex
									align-items-center
									justify-content-between
									p-0
								">
                        <h4>بيانات الزبون</h4>
                        <div class="resize-icons d-flex">
                            <i class="fas fa-compress-alt"></i>
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                    </div>

                    <div class="row justify-content-between pt-3">
                        <div class="form-group col-md-6">
                            <label for="#customer-name">الإسم: <span class="text-danger">*</span></label>
                            <input type="text" name="customer_name" id="customer-name"
                                   class="form-control form-control-sm" value="{{$order->customer}}"/>
                        </div>
                        <div class="form-group col-md-6 pt-md-0 pt-3">
                            <label for="#customer-state">المحافظة: <span class="text-danger">*</span></label>
                            <select name="governorate_id" id="customer-state" class="form-control form-control-sm">
                                @foreach($governorate as $gov)
                                    <option value="{{$gov->id}}"
                                            data-delivery="{{$gov->commission}}"
                                            @if($gov -> id == $order -> governrate_id) selected @endif
                                    >{{$gov -> name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6 pt-3">
                            <label for="customer-phone">رقم الهاتف: <span class="text-danger">*</span></label>
                            <input type="text" name="phone" id="customer-phone"
                                   class="form-control form-control-sm phone" value="{{$order->phone}}"
                            />
                            <small class="number hidden"> هذا الرقم ليده طلب سابق<a href=""> عرض
                                    الطلب </a></small>
                        </div>
                        <div class="form-group col-md-6 pt-3">
                            <label for="#customer-place">العنوان التفصيلي: <span
                                    class="text-danger">*</span></label>
                            <input name="address" id="customer-place"
                                   class="form-control form-control-sm" value="{{$order->address}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <!--انتهاء بيانات الزبون -->

            <!-- بدء بيانات المنتج -->
            <div class="card expand mt-3">
                <div class="card-body">
                    <div class="
									title
									d-flex
									align-items-center
									justify-content-between
									p-0
								">
                        <h4>بيانات المنتج</h4>
                        <div class="resize-icons d-flex">
                            <i class="fas fa-compress-alt"></i>
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 pt-2">
                            <label for="product-sector">القسم: <span class="text-danger">*</span></label>
                            <select name="department_id" id="product-sector" class="form-control form-control-sm">
                                <option disabled selected="true">اختر القسم</option>
                                @foreach($departments as $dep)
                                    <option value="{{$dep->id}}"
                                            @if($dep -> id == $order -> department_id) selected @endif
                                    >{{$dep -> name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6 pt-md-2 pt-3">
                            <label for="product-nameproduct-name">المنتج: <span class="text-danger">*</span></label>
                            <select name="product_id" id="product-name" class="form-control form-control-sm">
                                @foreach($products as $product)
                                    <option value="{{$product->id}}"
                                            @if($product -> id == $order -> governrate_id) selected @endif
                                    >{{$product -> name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <!-- second line *********-->
                        <div class="form-group col-md-12 pt-3 row">
                            <div class="col-sm-4 col-6">
                                <label for="#product-quantity">الكمية: <span class="text-danger">*</span></label>
                                <input type="text" name="product_quantity" id="product-quantity"
                                       class="form-control form-control-sm"
                                       value="{{$order->product_quantity}}"/>
                            </div>
                            <div class="
											col-sm-2 col-4
											d-flex
											justify-content-end
											align-items-end
											pl-0
										">
                                    <span class="btn btn-success add-quantity">
                                        اضافة
                                    </span>
                            </div>

                        </div>
                        <div class="bg-warning msg p-1 mt-1"
                             style="width: 150px;margin-right : 15px; display : none">
                            أدخل قيمة صحيحة
                        </div>

                        <!-- start table ******* -->

                        <table class="table table-bordered mt-4 text-center p-5">
                            <thead>
                            <tr>
                                <th scope="col">م</th>
                                <th scope="col">المنتج</th>
                                <th scope="col">تفاصيل المنتج</th>
                                <th scope="col">الكمية</th>
                                <th scope="col">السعر</th>
                            </tr>
                            </thead>
                            <tbody class="table-body">

                            </tbody>
                        </table>
                        <input type="hidden" class="price_after_all" name="price_after_all" value="">
                        <!-- end table ************* -->
                    </div>
                </div>
            </div>
            <!-- انتهاء بيانات المنتج -->

            <!-- بدء بيانات اضافية -->
            <div class="card expand mt-3 pb-5">
                <div class="card-body">
                    <div class="
									title
									d-flex
									align-items-center
									justify-content-between
									p-0
								">
                        <h4>بيانات اضافية</h4>
                        <div class="resize-icons d-flex">
                            <i class="fas fa-compress-alt"></i>
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="#sale-source">مصدر البيعة: <span class="text-danger">*</span></label>
                            <select name="salesource_id" id="sale-source" class="form-control form-control-sm">
                                @foreach($sales_source as $salessource)
                                    <option value="{{$salessource->id}}"
                                            @if($salessource -> id == $order -> sale_source_id) selected @endif
                                    >{{$salessource -> name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="#request-status">حالة الطلب: <span class="text-danger">*</span></label>
                            <select name="order_status_id" id="request-status" class="form-control form-control-sm">
                                @foreach($status as $status_order)
                                    <option value="{{$status_order->id}}"
                                            @if($status_order -> id == $order -> status_id) selected @endif
                                    >{{$status_order -> name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="delivre-notes">ملاحظات التوصيل</label>
                            <textarea name="shipping_note" id="delivre-notes" class="form-control form-control-sm"
                                      rows="5">{{$order -> shipping_note}}</textarea>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="internal-notes">ملاحظات داخلية</label>
                            <textarea name="internal_notes" id="internal-notes"
                                      class="form-control form-control-sm"
                                      rows="5">{{$order -> internal_notes}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-5 ">
                        <div class="radio mt-3 col-md-6 ask delivery">
                            <h5 class="mb-3 p-2"> هل التوصيل مجاني ؟</h5>
                            <input type="radio" name="shipping_method" id="free" value="0"
                                   @if($order -> shipping_method == 0 ) checked @endif
                            />
                            <label for="free">مجاني</label>
                            <input type="radio" name="shipping_method" id="paid" value="1"
                                   @if($order -> shipping_method == 1 ) checked @endif
                            />
                            <label for="payed">مدفوع</label>
                            <div class="ask-box mt-3 hidden">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>قيمة التوصيل : <span class="text-danger delivery-commission">5</span>
                                        </h6>
                                        <div class="edit  d-flex justify-content-between">
                                            <h6>هل تريد التعديل على قيمة التوصيل ؟</h6>
                                            <input type="checkbox" class="checkbox-edit"/>
                                        </div>

                                        <div class="fields d-flex hidden justify-content-between">
                                            <input type="text" class="edit-field" name="edit_commission"
                                                   value="{{$order -> edit_commission}}"
                                            />
                                            <span class="btn btn-success">تعديل</span>
                                        </div>


                                        <h6> سعر المنتج : <span
                                                class=" text-danger original-price">لم يتم تحديد القيمة بعد</span>
                                        </h6>
                                        <h6> قيمة الفاتورة الخاصة بك : <span class="text-danger bill">لم يتم تحديد القيمة بعد</span>
                                        </h6>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="radio mt-3 col-md-6 ask">
                            <h5 class="mb-3 p-2"> هل يوجد خصم؟</h5>
                            <input type="radio" name="delivery" id="yes" value="1"
                                   @if($order -> price_discount > 0 ) checked @endif
                            />
                            <label for="yes">نعم</label>
                            <input type="radio" name="delivery" id="no" value="0"
                                   @if($order -> price_discount <= 0 ) checked @endif
                            />
                            <label for="no">لا</label>
                            <div class="ask-box mt-3 hidden card card-body">
                                <div class="d-flex flex-sm-column flex-lg-row align-items-center">
                                    <h6>أدخل قيمة الخصم</h6>
                                    <input type="text" name="discount_value" id="discount-value" class=" mt-2"
                                           value="{{$order -> price_discount}}"
                                    />
                                    <span class="btn btn-success mt-2" onclick="addDiscount(event)">إضافة خصم
                                        </span>
                                </div>
                                <div class="bg-warning p-1 mt-2 discount-msg" style="width: 180px;display : none">لم
                                    تقم
                                    بادخال اي منتج بعد
                                </div>
                                <div class="discountInfo hidden mt-5 ">
                                    <h6> السعر قبل الخصم : <span class="text-danger before-discount">لم يتم تحديد القيمة بعد</span>
                                    </h6>
                                    <h6> السعر بعد الخصم : <span class="text-danger after-discount">لم يتم تحديد القيمة بعد</span>
                                    </h6>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="btns w-50 mx-auto mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary m-2">
                    <b>حفظ البيانات</b></button
                >
                <button type="submit" class="btn btn-danger m-2">
                    <b>الغاء</b>
                </button>
            </div>
        </form>
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
<script src="{{asset('assets/js/addOrder.js')}}"></script>

</body>
</html>
