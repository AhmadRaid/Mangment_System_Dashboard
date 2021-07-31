<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}"/>

    <!-- bootstrab css files cdn -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />

    <!-- font-awesome cdn -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <!-- google fonts [Almarai] -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Almarai&display=swap"
        rel="stylesheet"
    />

    <title>login</title>
</head>

<body>

<div class="mask"></div>
<!-- <div class="login-page">
    <div class="login-container">
        <h2 class="login-head mb-4">نظام الإدارة</h2>
        <div class="login-box mx-auto">
            <h3 class="login-title">تسجيل الدخول</h3>
            <hr />
            <form action="" class="form-login mt-4">
                <div class="form-group d-flex flex-column mb-3">
                    <label for="username">اسم المستخدم</label>
                    <input type="text" id="username" required />
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-group d-flex flex-column">
                    <label for="password">كلمة المرور</label>
                    <input type="password" id="password" required />
                    <i class="fas fa-key"></i>
                </div>
                <button class="mt-3">تسجيل الدخول</button>
            </form>
        </div>
    </div>
</div> -->
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center ">
                <div class="brand_logo_container d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="75" height="75" viewBox="0 0 24 24">
                        <path
                            d="M23.995 24h-1.995c0-3.104.119-3.55-1.761-3.986-2.877-.664-5.594-1.291-6.584-3.458-.361-.791-.601-2.095.31-3.814 2.042-3.857 2.554-7.165 1.403-9.076-1.341-2.229-5.413-2.241-6.766.034-1.154 1.937-.635 5.227 1.424 9.025.93 1.712.697 3.02.338 3.815-.982 2.178-3.675 2.799-6.525 3.456-1.964.454-1.839.87-1.839 4.004h-1.995l-.005-1.241c0-2.52.199-3.975 3.178-4.663 3.365-.777 6.688-1.473 5.09-4.418-4.733-8.729-1.35-13.678 3.732-13.678 4.983 0 8.451 4.766 3.732 13.678-1.551 2.928 1.65 3.624 5.09 4.418 2.979.688 3.178 2.143 3.178 4.663l-.005 1.241zm-13.478-6l.91 2h1.164l.92-2h-2.994zm2.995 6l-.704-3h-1.615l-.704 3h3.023z"/>
                    </svg>
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form method="POST" action="{{route('login.post')}}">
                    @csrf
                    <div class="input-group mb-4">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="email" class="form-control input_user" value=""
                               placeholder="البريد الالكتروني">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control input_pass" value=""
                               placeholder="كلمة المرور">
                    </div>

                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="button" class="btn login_btn">Login</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>
<!-- include bootstrab.js  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="../../js/script.js"></script>
</body>
</html>
