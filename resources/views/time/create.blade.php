@extends('layouts.app')
@section('title')
    التوقيت
@endsection

@section('content')
    <div class="add-page page">
        <div class="body">
            <div class="time-container">
                <div class="time">
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
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="header-text">
                                <h4 class="mb-0 my-auto">صفحة تحديد التوقيت</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card expand pb-4">
                        <div class="card-body">
                            <div
                                class="
                    title
                    d-flex
                    align-items-center
                    justify-content-between
                    mb-0
                    pb-0
                  "
                            >
                                <h4>حدد وقت الدولة</h4>
                                <div class="resize-icons d-flex">
                                    <i class="fas fa-compress-alt"></i>
                                    <i class="fas fa-expand-arrows-alt"></i>
                                </div>
                                <h4>الوقت الان</h4>
                                <div style="color: red">{{$date}}</div>
                            </div>
                            <form class="form-time" id="form-time" method="POST" action="{{route('changetime')}}">
                                @csrf
                                <div class="px-4 mt-3 row">
                                    <div class="col-md-6 d-flex row">
                      <span class="col-2 p-0">
                        <label for="add-status">اختلاف الوقت : </label>
                      </span>
                                        <div class="col-10 p-0">
                                            <input name="timezone">
                                        </div>


                                    </div>
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
    <script src="{{asset('assets/js/script.js')}}"></script>
@endsection
