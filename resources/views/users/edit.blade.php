@extends('layouts.app')
@section('css1')
    <link rel="stylesheet" href="{{asset('assets/css/add.css')}}"/>
@endsection
@section('content')
    <div class="body">
        <div class="add-employee-container">
            <div class="add-employee">
                <div
                    class="	header d-flex align-items-center justify-content-between mb-4 ">
                    <div class="header-title d-flex align-items-center">
                        <div class="header-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="header-text">
                            <h4 class="mb-0 my-auto">الموظفين</h4>
                            <span class="text-muted mt-1 tx-13 mr-2 mb-0"
                            >/ اضافة موظف</span
                            >
                        </div>
                    </div>
                    <div class="view-all-adds">
                        <a
                            href="displayEmployees.html"
                            class="btn btn-success btn-all-emp"
                        >عرض الكل</a
                        >
                    </div>
                </div>

                <div class="card expand">
                    <div
                        class="title d-flex align-items-center justify-content-between"
                    >
                        <h4>اضافة موظف</h4>
                        <div class="resize-icons d-flex">
                            <i class="fas fa-compress-alt"></i>
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                    </div>
                    <form class="parsley-style-1" id="selectForm2"
                          action="{{route('users.update',$user->id)}}" method="POST">
                        @csrf
                        <div class="">
                            <div class="row px-3">
                                <div class="col-md-6 mt-3">
                                    <label
                                    >اسم الموظف: <span class="text-danger">*</span></label
                                    >
                                    <input
                                        class="form-control form-control-sm"
                                        name="name"
                                        type="text"
                                        required=""
                                        value="{{$user->name}}"
                                    />
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label
                                    >البريد الالكتروني:
                                        <span class="text-danger">*</span></label
                                    >
                                    <input
                                        class="form-control form-control-sm"
                                        name="email"
                                        required=""
                                        type="email"
                                        value="{{$user->email}}"

                                    />
                                </div>
                            </div>
                        </div>

                        <div class="row px-3">
                            <div class="col-md-6 mt-3">
                                <label
                                >كلمة المرور: <span class="text-danger">*</span></label
                                >
                                <input
                                    class="form-control form-control-sm"
                                    name="password"
                                    type="password"
                                />
                            </div>

                            <div class="col-md-6 mt-3">
                                <label>
                                    تاكيد كلمة المرور:
                                    <span class="text-danger">*</span></label
                                >
                                <input
                                    class="form-control form-control-sm"
                                    name="confirm-password"
                                    type="password"
                                />
                            </div>

                            <div class="col-lg-6 col-12 mt-3">
                                <div class="form-group">
                                    <label class="form-label"> صلاحية المستخدم</label>
                                    {!! Form::select('roles_name[]' ,$roles,[], array('class' => 'form-control','multiple')) !!}
                                </div>
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
@endsection



