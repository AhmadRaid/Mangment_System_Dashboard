@extends('layouts.app')
@section('content')
    <div class="body">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Show User</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users') }}">
                        Back</a
                    >
                </div>
            </div>
        </div>

        <div class="title first-section mt-3">
            <h2>الصلاحيات</h2>
            <div class="det d-flex">
                <i class="fas fa-home fa-small"></i>
                <h6>
                    الصلاحيات &nbsp &nbsp /
                    <span class="text-danger"> الأردن </span> &nbsp &nbsp /
                    <span>المستخدمين</span> &nbsp &nbsp /
                    <span class="text-danger">عرض المستخدم</span>
                </h6>
            </div>
        </div>

        <div class="row justify-content-end m-3 mb-3">
            <a
                href="displayEmployees.html"
                class="btn btn-success col-lg-1 col-md-2 col-3"
            >عرض الكل</a
            >
        </div>
        <div class="card">
            <div class="card-body">
                <div class="title">
                    <h5>المستخدم</h5>
                </div>
                <div class="row mt-5">
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group">
                            <strong>الاسم:</strong>
                            <div style="background-color : rgba(0, 0, 0, 0.1);margin-bottom: 20px" class="mt-2 p-2">
                                {{ $user->name }}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group">
                            <strong>البريد الالكتروني:</strong>
                            <div style="background-color : rgba(0, 0, 0, 0.1);margin-bottom: 20px" class="mt-2 p-2">
                                {{ $user->email }}
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group">
                            <strong>الصلاحيات:</strong>
                            <div style="background-color : rgba(0, 0, 0, 0.1);margin-bottom: 20px" class="mt-2 p-2">
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                        <label class=""
                                               style="color: #1b4b72 ; font-size: 18px">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
