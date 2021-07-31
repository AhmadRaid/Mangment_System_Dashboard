@extends('layouts.app')
@section('css1')
    <link rel="stylesheet" href="{{asset('assets/css/roles/Roles.css')}}"/>
@endsection
@section('content')

    <div class="body">
        <!-- show create role  -->
        <div class="show-role-container order-1 mt-md-0 mt-5">
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
                        <i class="fas fa-user-cog fa-lg"></i>
                    </div>
                    <div class="header-text">
                        <h4 class="mb-0 my-auto">الصلاحية</h4>
                        <span class="text-muted mt-1 tx-13 mr-2 mb-0"
                        >/ عرض الصلاحية</span
                        >
                    </div>
                </div>
                <div class="view-all-adds">
                    <a
                        href="displayRoles.html"
                        class="btn btn-success btn-all-emp"
                    >عرض الكل</a
                    >
                </div>
            </div>
            <div class="show-role card col-12 mt-4 p-3">
                <h4>عرض الصلاحية</h4>
                <hr/>
                <div class="form-group">
                    <strong>الاسم :</strong>
                    <span style="background-color: green;color: #fff;border-radius: 5px;padding: 2px 9px;">
                                {{ $role->name }}
											</span>
                </div>
                <div class="form-group mt-2">
                    <strong>الصلاحية :</strong>
                    @if(!empty($rolePermissions))
                        @foreach($rolePermissions as $v)
                            <li>{{ $v->name }}</li>
                        @endforeach
                    @endif
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
