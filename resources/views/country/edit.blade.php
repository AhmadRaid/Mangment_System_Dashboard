@extends('layouts.app')
@section('css1')
    <link rel="stylesheet" href="{{asset('assets/css/add.css')}}"/>
@endsection
@section('content')

    <div class="body">
        <!-- body container -->
        <div class="container-add">
            <div class="header d-flex align-items-center justify-content-between">
                <div class="header-title d-flex align-items-center">
                    <div class="header-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="header-text">
                        <h4>صفحة إضافة دولة</h4>
                    </div>
                </div>
                <div class="view-all-adds">
                    <a href="displayCountries.html" class="btn btn-success"
                    >كافة الدول</a
                    >
                </div>
            </div>

            <form action="{{route('country.update',$country ->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="add card p-0 mt-4 expand">
                    <div
                        class="title d-flex align-items-center justify-content-between">
                        <h4>اضافة دولة</h4>
                        <div class="resize-icons d-flex">
                            <i class="fas fa-compress-alt"></i>
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                    </div>
                    <div class="content-add row">
                        <div class="form-group col-md-6">
                            <label for="country-name"
                            >اسم الدولة :<span class="text-danger">*</span></label
                            >
                            <input
                                type="text"
                                name="name"
                                id="country-name"
                                class="form-control form-control-sm"
                                value="{{$country -> name}}"
                            />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="country-coin"
                            >اسم عملة الدولة:<span class="text-danger">*</span></label
                            >
                            <input
                                type="text"
                                name="currency"
                                id="country-coin"
                                value="{{$country -> currency}}"
                                class="form-control form-control-sm"
                            />
                        </div>

                        <div class="country-image-container my-3">
                            <div class="form-group add-image">
                                <label
                                    for="country-image"
                                    class="d-flex align-items-center justify-content-between"
                                >
                                    <span>صورة الدولة</span> <i class="fas fa-plus fa-lg"></i>
                                </label>
                                <input
                                    type="file"
                                    name="banner"
                                    id="country-image"
                                    accept="image/*"
                                    value="{{$country -> banner}}"
                                    onchange="changeImage(event)"
                                    required
                                />
                            </div>
                            <div class="img-box country-img-box mt-4"></div>
                        </div>
                    </div>
                    <div class="buttons-footer text-center">
                        <button class="btn btn-primary m-0 m-2">إضافة</button>
                        <button class="btn btn-danger m-0 m-2">الغاء</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>

    <!-- include charts.js  -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <!-- include jquery  -->
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    ></script>
    <!-- include bootstrab.js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/displayImage.js')}}"></script>
@endsection
