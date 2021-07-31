@extends('layouts.app')
@section('css1')
    <link rel="stylesheet" href="{{asset('assets/css/add.css')}}"/>
@endsection
@section('content')
    <div class="body">
        <div class="add-container add-page">
            <div class="add-product-categories">
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
                            <i class="fas fa-boxes"></i>
                        </div>
                        <div class="header-text">
                            <h4 class="mb-0 my-auto">صفحة اضافة اقسام المنتجات</h4>
                        </div>
                    </div>
                    <div class="view-all-adds">
                        <a
                            href="{{route('department')}}"
                            class="btn btn-success btn-all-emp"
                        >عرض الكل</a
                        >
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
                            <h4> قسم</h4>
                            <div class="resize-icons d-flex">
                                <i class="fas fa-compress-alt"></i>
                                <i class="fas fa-expand-arrows-alt"></i>
                            </div>
                        </div>
                        <form id="form-product-categories" method="POST"
                              action="{{route('department.update' , $Department -> id)}}">
                            @csrf
                            <div class="px-4 mt-3">
                                <label for="product-categories">
                                    ادخل قسم جديد للمنتحات:
                                </label>
                                <input
                                    name="name"
                                    id="product-categories"
                                    class="form-control form-control-sm"
                                    value="{{$Department -> name}}"
                                />
                                @error('name')
                                <small class="text-danger"> {{$message}}</small>
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
    </div>
