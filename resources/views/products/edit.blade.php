@extends('layouts.app')
@section('css1')
    <link rel="stylesheet" href="{{asset('assets/css/add.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/products/addProduct.css')}}"/>
@endsection
@section('content')
    <div class="body">
        <div
            class="
						header
						d-flex
						align-items-center
						justify-content-between
						mb-4
						px-4
					"
        >
            <div class="header-title d-flex align-items-center">
                <div class="header-icon">
                    <i class="fab fa-product-hunt"></i>
                </div>
                <div class="header-text">
                    <h3 class="mb-0">المنتجات</h3>
                    <h6 class="my-auto">صفحة اضافة منتج</h6>
                </div>
            </div>
            <div class="view-all-adds">
                <a href="{{route('product')}}" class="btn btn-success btn-all-emp"
                >عرض الكل</a
                >
            </div>
        </div>

        <form action="{{route('product.update',$product -> id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="box mt-4 p-4">
                <div class="card">
                    <div class="card-body pt-0 row expand">
                        <div
                            class="
										title
										d-flex
										align-items-center
										justify-content-between
									"
                        >
                            <h4>بيانات المنتج</h4>
                            <div class="resize-icons d-flex">
                                <i class="fas fa-compress-alt"></i>
                                <i class="fas fa-expand-arrows-alt"></i>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="#product-name"
                            >إسم المنتج : <span class="text-danger">*</span></label
                            >
                            <input
                                type="text"
                                name="name"
                                id="product-name"
                                class="form-control form-control-sm"
                                value="{{$product -> name}}"
                            />
                        </div>

                        <div class="form-group col-sm-12 col-md-6">
                            <label for="#product-name"
                            >السعر : <span class="text-danger">*</span></label
                            >
                            <input
                                type="text"
                                name="price"
                                id="product-price"
                                class="form-control form-control-sm"
                                value="{{$product -> price}}"
                            />
                        </div>
                        <div class="form-group col-sm-12 col-md-6 mt-2 mt-md-0">
                            <label for="#product-store"
                            >المخزن : <span class="text-danger">*</span></label
                            >
                            <select
                                name="store_id"
                                id="product-store"
                                class="form-control form-control-sm"
                            >
                                @foreach($stores as $store)
                                    <option value="{{$store -> id}}"
                                            @if($store -> id == $product -> store_id) selected @endif
                                    >{{$store -> name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-sm-12 col-md-6 mt-2 mt-md-3">
                            <label for="#department-name"
                            >القسم : <span class="text-danger">*</span></label
                            >
                            <select
                                name="department_id"
                                id="department-name"
                                class="form-control form-control-sm"
                            >
                                @foreach($departments as $dep)
                                    <option value="{{$dep -> id}}"
                                            @if($dep -> id == $product -> department_id) selected @endif

                                    >{{$dep -> name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-sm-12 col-md-6 mt-2 mt-md-3">
                            <label for="available"
                            >تتبع المخزن: <span class="text-danger">*</span></label
                            >
                            <select
                                name="active"
                                id="available"
                                class="form-control form-control-sm"
                            >
                                <option value="1">متاح للبيع</option>
                                <option value="0">غير متاح للبيع</option>
                            </select>

                            <div class="quantity-field hidden mt-3">
                                <label for="quantity">أضف كمية</label>
                                <input
                                    type="text"
                                    name="quantity_stock"
                                    id="quantity"
                                    class="form-control form-control-sm"
                                />
                                @error("quantity_stock")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-sm-12 col-md-6 mt-2 mt-md-3">
                            <label for="#product-desc" class="d-block mb-2"
                            >وصف تفصيلي عن المنتج:
                                <span class="text-danger">*</span></label
                            >
                            <textarea
                                name="description"
                                id="product-desc"
                                rows="2"
                                class="col-12 form-control form-control-sm"

                            >{{$product -> description}}</textarea>
                            @error("description")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div
                            class="
										country-image-container
										col-sm-12 col-md-6
										mt-2 mt-md-5
										mb-3
									"
                        >
                            <div class="form-group add-image">
                                <label
                                    for="product-image"
                                    class="
												col-lg-5 col-md-8 col-sm-6 col-11
												d-flex
												align-items-center
												justify-content-between
												w-100
											"
                                >
                                    <span>صورة المنتج</span>
                                    <i class="fas fa-plus"></i>
                                </label>
                                <input
                                    type="file"
                                    name="photo"
                                    id="product-image"
                                    accept="image/*"
                                    value="{{$product -> photo}}"
                                    onchange="changeImage(event)"
                                />
                            </div>
                            <div class="img-box country-img-box mx-auto mt-3"></div>
                        </div>
                    </div>
                </div>

                <div class="card mt-3 card-body pt-0 expand">
                    <div
                        class="
									px-0
									title
									d-flex
									align-items-center
									justify-content-between
								"
                    >
                        <h4>الخصائص المتغيرة</h4>
                        <div class="resize-icons d-flex">
                            <i class="fas fa-compress-alt"></i>
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                    </div>
                    <div class="changing-properties mt-3 ask">
                        <div class="check">
                            <h5>هل يوجد خصائص متغيرة لهذا المنتج ؟</h5>
                            <div class="d-flex">
                                <div class="d-flex align-items-center m-2">
                                    <input type="radio" name="check" id="yes" value="1"/>
                                    <label for="yes">نعم</label>
                                </div>
                                <div class="d-flex align-items-center m-2">
                                    <input
                                        type="radio"
                                        name="check"
                                        id="no"
                                        value="0"
                                        checked
                                    />
                                    <label for="no">لا</label>
                                </div>
                            </div>
                        </div>

                        <div class="ask-box mt-5 hidden">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-3 col-12 mb-3">
                                    <label> القسم:<span class="text-danger">*</span></label>

                                    <select
                                        name="department2"
                                        id="department2"
                                        class="form-control form-control-sm"
                                    >
                                        <option value="الهواتف الجوالة">الهواتف الجوالة</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-12">إضافة كمية جديدة</div>
                                <div class="col-md-8 col-12">
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
                                        <tr class="odd gradeX">
                                            <td>4</td>

                                            <td>العراق</td>
                                            <td>العراق</td>
                                            <td>العراق</td>
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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="coin-box card expand mt-4 p-3 pt-0">
                    <div
                        class="
									px-0
									title
									d-flex
									align-items-center
									justify-content-between
								"
                    >
                        <h4>العمولة</h4>
                        <div class="resize-icons d-flex">
                            <i class="fas fa-compress-alt"></i>
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-12 row justify-content-between">
                            <div class="form-group col-sm-12 col-md-6 d-flex mb-3">
                                <label for="#product-quantity" class="col-4 mb-2"
                                >كمية البيع</label
                                >
                                <input
                                    type="text"
                                    name="product-quantity"
                                    id="product-quantity"
                                    class="form-control"

                                />
                            </div>

                            <div class="form-group col-sm-12 col-md-6 d-flex mb-3">
                                <label for="#product-quantity" class="col-4 mb-2"
                                >العمولة</label
                                >
                                <input
                                    type="text"
                                    name="product-quantity"
                                    id="product-quantity"
                                    class="form-control"

                                />
                            </div>

                            <div class="form-group col-sm-12 col-md-6 d-flex mb-3">
                                <label for="#product-quantity" class="col-4 mb-2"
                                >كمية البيع</label
                                >
                                <input
                                    type="text"
                                    name="product-quantity"
                                    id="product-quantity"
                                    class="form-control"

                                />
                            </div>

                            <div class="form-group col-sm-12 col-md-6 d-flex mb-3">
                                <label for="#product-quantity" class="col-4 mb-2"
                                >العمولة</label
                                >
                                <input
                                    type="text"
                                    name="product-quantity"
                                    id="product-quantity"
                                    class="form-control"

                                />
                            </div>

                            <div class="form-group col-sm-12 col-md-6 d-flex mb-3 field">
                                <label for="#product-quantity" class="col-4 mb-2"
                                >كمية البيع</label
                                >
                                <input
                                    type="text"
                                    name="product-quantity"
                                    id="product-quantity"
                                    class="form-control"

                                />
                            </div>

                            <div class="form-group col-sm-12 col-md-6 d-flex mb-3">
                                <label for="#product-quantity" class="col-4 mb-2"
                                >العمولة</label
                                >
                                <input
                                    type="text"
                                    name="product-quantity"
                                    id="product-quantity"
                                    class="form-control"

                                />
                            </div>

                            <div class="form-group col-sm-12 col-md-6 d-flex mb-3 dashed">
                                <label for="#product-quantity" class="col-4 mb-2"
                                >العمولة</label
                                >
                                <input
                                    type="text"
                                    name="product-quantity"
                                    id="product-quantity"
                                    class="form-control"

                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="buttons-footer text-center mt-5">
                <button class="btn btn-primary m-0 m-2">حفظ البيانات</button>
                <button class="btn btn-danger m-0 m-2">إلغاء</button>
            </div>
        </form>
        <!-- boxes that contain full statistics -->
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

    <!-- include datatable  -->
    <script
        type="text/javascript"
        src="https://cdn.datatables.net/v/bs5/dt-1.10.25/b-1.7.1/r-2.2.9/sp-1.3.0/sl-1.3.3/datatables.min.js"
    ></script>

    <script src="{{asset('assets/js/ask.js')}}"></script>
    <script src="{{asset('assets/js/displayImage.js')}}"></script>
    <script src="{{asset('assets/js/dataTable.js')}}"></script>
    <script>
        const select = document.querySelector("select#available");
        const quantityField = document.querySelector(".quantity-field");
        select.onchange = (event) => {
            quantityField.classList.toggle("hidden");
        };
    </script>
@endsection
