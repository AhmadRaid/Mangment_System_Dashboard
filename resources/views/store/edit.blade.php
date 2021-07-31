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
                        <i class="fas fa-warehouse text-success"></i>
                    </div>
                    <div class="header-text">
                        <h4>صفحة إضافة مخزن</h4>
                    </div>
                </div>
                <div class="view-all-adds">
                    <a href="{{route('store')}}" class="btn btn-success"
                    >كافة المخازن</a
                    >
                </div>
            </div>

            <form method="POST" action="{{route('store.update' , $stores -> id)}}">
                @csrf
                <input type="hidden" name="country_id"
                       value="{{\Illuminate\Support\Facades\Auth::user()->country_id}}">
                <div class="add card p-0 mt-4 expand">
                    <div
                        class="title d-flex align-items-center justify-content-between"
                    >
                        <h4>اضافة مخزن</h4>
                        <div class="resize-icons d-flex">
                            <i class="fas fa-compress-alt"></i>
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                    </div>
                    <div class="content-add row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="store-name"
                            >اسم المخزن :<span class="text-danger">*</span></label
                            >
                            <input
                                type="text"
                                name="name"
                                id="store-name"
                                class="form-control form-control-sm"
                                value="{{$stores -> name}}"
                            />
                            @error('name')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group col-md-6 mb-3">
                            <label for="city-name"
                            > المحافظة:<span class="text-danger">*</span></label
                            >
                            <select
                                type="text"
                                name="governorate_id"
                                id="city-name"
                                class="form-control form-control-sm"
                            >
                                @foreach($governrate as $gov)
                                    <option value="{{$gov -> id}}"
                                            @if($gov -> id == $stores -> governrate_id) selected @endif
                                    >{{$gov->name}}</option>
                                @endforeach
                            </select>
                            @error('governorate_id')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="address"
                            >العنوان التفصيلي:<span class="text-danger">*</span></label
                            >
                            <input
                                type="text"
                                name="address"
                                id="address"
                                class="form-control form-control-sm"
                                value="{{$stores -> address}}"
                            />
                            @error('address')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="buttons-footer text-center">
                        <button class="btn btn-primary m-0 m-2">تحديث</button>
                        <button class="btn btn-danger m-0 m-2">الغاء</button>
                    </div>
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

    <script src="{{asset('assets/js/displayImage.js')}}"></script>
