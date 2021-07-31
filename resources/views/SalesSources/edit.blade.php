@extends('layouts.app')
@section('css1')
    <link rel="stylesheet" href="{{asset('assets/css/add.css')}}"/>
@endsection
@section('content')
    <div class="body">
        <div class="add-container">
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
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="header-text">
                        <h4 class="mb-0 my-auto">صفحة اضافة مصدر</h4>
                    </div>
                </div>
                <div class="view-all-adds">
                    <a href="{{route('SalesSources')}}" class="btn btn-success btn-all-emp"
                    >عرض الكل</a
                    >
                </div>
            </div>

            <div class="card expand">
                <div class="">
                    <div
                        class="title d-flex align-items-center justify-content-between"
                    >
                        <h4>اضافة مصدر</h4>
                        <div class="resize-icons d-flex">
                            <i class="fas fa-compress-alt"></i>
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                    </div>
                    <form class="" id="form-source" method="POST"
                          action="{{route('SalesSources.update',$Sales_Sources->id)}}">
                        @csrf
                        <div class="px-4 mt-3">
                            <label for="store-name">اسم المصدر </label>
                            <input style="margin-right : 0 !important"
                                   id="store-name"
                                   class="form-control form-control-sm d-flex mr-0"
                                   name="name"
                                   value="{{$Sales_Sources -> name}}"/>
                            @error('name')
                            <span class="text-danger d-block"> {{$message}}</span>
                            @enderror
                        </div>

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

    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="../../js/script.js"></script>
@endsection
