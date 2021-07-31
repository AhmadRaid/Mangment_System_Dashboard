@extends('layouts.app')
@section('css1')
    <link rel="stylesheet" href="{{asset('assets/css/roles/Roles.css')}}"/>
@endsection
@section('content')
    <div class="body">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>خطا</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <!-- start create role  -->
        <div class="create-role-container  order-1 mt-md-0 mt-5">
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
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <div class="header-text">
                        <h4 class="mb-0 my-auto">الوظيفة</h4>
                        <span class="text-muted mt-1 tx-13 mr-2 mb-0"
                        >/ إنشاء الادوار</span
                        >
                    </div>
                </div>
                <div class="view-all-adds">
                    <a
                        href="{{route('roles.index')}}"
                        class="btn btn-success btn-all-emp"
                    >عرض الكل</a
                    >
                </div>
            </div>
            <div class="create-role card col-12 mt-4 p-3">
                <h4>انشاء الدور</h4>
                <hr/>
                <div class="form-role">
                    <!-- <label for="" class=" ">الاسم <span class="text-danger">*:</span></label> -->
                    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                    {!! Form::text('name',null,
                    array('class' => 'form-control','placeholder' => 'اسم الدور / الوظيفة') ) !!}
                </div>
                <div class="permissions mt-3">
                        <span id="per-btn">
                          <i class="far fa-plus"></i>
                          <span>الصلاحيات</span>
                        </span>

                    <!--Permissions Check Boxes  -->
                    <div class="permissions-boxes">
                        @foreach($permission as $value)
                            <label
                                style="font-size: 16px;">{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                {{ $value->name }}</label>
                        @endforeach


                    </div>
                    <!--Permissions Check Boxes  -->
                    <div class="botton-add text-right mt-4 ">
                        <button class="btn btn-primary">اضافة</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const perBtn = document.querySelector("#per-btn");
        const perBoxes = document.querySelector(".permissions-boxes");
        perBtn.addEventListener("click", () => {
            perBoxes.classList.toggle("active");
            perBtn.children[0].classList.toggle('fa-plus')
            perBtn.children[0].classList.toggle('fa-window-minimize');

        })
    </script>
@endsection
