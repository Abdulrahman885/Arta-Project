<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('asset') }}/bootstrap.css" rel="stylesheet">

    <title>arta</title>
</head>
<body>

<div class="row  ">
    <div class="col-6 "><img style="width:120vh ;height: 100vh " src="{{asset('images/backgroundlogin.png')}}"></div>
    <div class="col-6 container px-3 rounded-5 w-25 shadow-lg" style="background-color: #E7E7E7;margin: 230px ">
        <form class="my-3 mx-2">
            <div class="rounded-5 " style="background-color: #55a4ca">
                <div class="my-3 py-1 text-center">
                    <button class="btn text-white px-2 rounded-4 mx-5 ">انشاء حساب</button>
                    <button class="btn  px-2 rounded-5 mx-5 py-3   text-white" style="background-color: #01496B">تسجيل الدخول</button>
                </div>
            </div>
            <div class="text-end my-3"> <span>!!اهلا بعودتك مجددا استتمتع معنا في تجربه مميزه</span></div>
            <div class="form-group  text-end my-2">
                <label class="form-label">اسم المستخدم او البريد الاكتروني</label>
                <input class="form-control py-2 rounded-3 " type="email">
            </div>
            <div class="form-group text-end my-2" >
                <label class="form-label">كلمة المرور</label>
                <input class="form-control " type="password">
            </div>
            <div class="form-group my-2 row" >
                <div class="col-1 "><input class="form-check-input " type="checkbox"></div>
                <div class="col-1 "> <label class="form-label">تذكرني</label></div>
                <div class="col-10  text-end"><label style="text-align: start">هل نسيت كلمة المرور</label></div>
            </div>
            <div class="text-center"><input class="btn btn-primary w-100 py-3 rounded-4" type="submit" value="تسجيل الدخول"></div>
            <hr>
            <!--        <div class="login-or">-->
            <!--            <span class="or-line"></span>-->
            <!--            <span class="span-or">أو</span>-->
            <!--        </div>-->
            <div class="row text-center">
                <div class="col-5 mx-4 btn  border shadow   rounded-5 "><img class="img-fluid w-100" style="width: 100vh;height: 4vh" src="{{asset('images/apply.png')}}"></div>

                <div class="col-5 btn border shadow rounded-5 "><img class="img-fluid" src="{{asset('images/google.png')}}"></div>
            </div>

        </form>

    </div>
    <div/>



    <script src="{{asset('acctss')}}/bootstrap.js"></script>

</body>
</html>
