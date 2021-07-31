@extends('layouts.app')
@section('css1')
    <link rel="stylesheet" href="{{asset('assets/css/add.css')}}"/>
@endsection
@section('content')
    <div class="body">
        <div class="add-status-container">
            <div class="add-status">
                <div
                    class="
                header
                d-flex
                align-items-center
                justify-content-between
                mb-4
              "
                >
                    <div class="header-title d-flex align-items-center">
                        <div class="header-icon">
                            <i class="far fa-eye"></i>
                        </div>
                        <div class="header-text">
                            <h4 class="mb-0 my-auto">صفحة اضافة حالة</h4>

                        </div>
                    </div>
                    <div class="view-all-adds">
                        <a href="displayStatuses.html" class="btn btn-success btn-all-emp">عرض الكل</a>
                    </div>
                </div>

                <div class="card expand">
                    <div class="">
                        <div
                            class="
                    title
                    d-flex
                    align-items-center
                    justify-content-between
                  "
                        >
                            <h4>اضافة حالة</h4>
                            <div class="resize-icons d-flex">
                                <i class="fas fa-compress-alt"></i>
                                <i class="fas fa-expand-arrows-alt"></i>
                            </div>
                        </div>
                        <form class="parsley-style-1" id="selectForm2" method="POST"
                              action="{{route('orderStatus.store')}}">
                            @csrf
                            <div class="">
                                <div class="px-4  mt-3">
                                    <label for="add-status"
                                    >اسم الحالة: </label
                                    >
                                    <input
                                        id="add-status"
                                        class="form-control form-control-sm"
                                        name="name"

                                    />
                                </div>


                                <!-- <div class="col-12 text-center mt-3">
                                  <button class="btn btn-primary" type="submit">تاكيد</button>
                                </div> -->
                                <div class="buttons-footer text-center mt-5">
                                    <button class="btn btn-primary m-0 m-2">إضافة</button>
                                    <button class="btn btn-danger m-0 m-2">الغاء</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
