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
    <div class="col-6 row ">
        <div class="col-4">    <img style="width:100vh ;height: 100vh " src="{{asset('images/backgroundlogin.png')}}"></div>
        <div class="col-4 mt-4">    <img style="width:100% ;height: 30% ;margin-right: 100px" src="{{asset('images/icon_arta.png')}}"></div>
        <h5 class="col-4 text-center " style="padding-top: 50%" >لا تفوت الفرصة، كن جزءًا
            <br>من مجتمع المتسوقين الأذكياء</h5>

    </div>
    <div class="col-6 container px-3 rounded-5 w-25 shadow-lg" style="background-color: #E7E7E7;margin: 230px ">
        <form class="my-3 mx-2">
            <div class="rounded-5 " style="background-color: #005B86">
                <div class="my-3 py-1 text-center">
                    <button class="btn text-white px-2 rounded-4 mx-5 ">انشاء حساب</button>
                    <button class="btn  px-2 rounded-5 mx-5 py-3 text-white" style="background-color: #01496B">تسجيل الدخول</button>
                </div>
            </div>
            <div class="text-end my-3 text-black-50"> <span>!!اهلا بعودتك مجددا استتمتع معنا في تجربه مميزه</span></div>
            <div class="form-group  text-end my-2">
                <label class="form-label">اسم المستخدم او البريد الاكتروني</label>
                <input class="form-control py-2 rounded-3 " type="email">
            </div>
            <div class="form-group text-end my-2" >
                <label class="form-label">كلمة المرور</label>
                <div class="d-flex align-items-center">
                    <input class="form-control " style="width: 100%;padding: 10px 10px;color: #555;max-font-size: 33px"  name="password" id="password" type="password"  placeholder="كلمة المرور" >
                    <img onclick="show()" style="position: absolute;margin-left: 41vh;cursor: pointer;color: white" id="pass_icon" src="{{asset('images/eye-off.svg')}}">
                </div>
            </div>
            <div class="form-group my-2 row" >
                <div class="col-1 "><input class="form-check-input " type="checkbox"></div>
                <div class="col-1 "> <label class="form-label">تذكرني</label></div>
                <div class="col-10  text-end"><label style="text-align: start">هل نسيت كلمة المرور</label></div>
            </div>
            <div class="text-center"><input class="btn  w-100 py-3 rounded-4 text-white" style="background-color: #01496B" type="submit" value="تسجيل الدخول"></div>
            <hr>
            <!--        <div class="login-or">-->
            <!--            <span class="or-line"></span>-->
            <!--            <span class="span-or">أو</span>-->
            <!--        </div>-->
            <div class="row text-center">
                <div class="col-5 mx-4 btn  border shadow   rounded-5 "><img class="img-fluid w-100" style="width: 100vh;height: 4vh" src="{{asset('images/apply.png')}}"></div>

                <div class="col-5 btn border shadow rounded-5 "><img class="img-fluid" src="{{asset('images/go.png')}}"></div>
            </div>

        </form>

    </div>
    <div/>
    <script>
        var a;
        function show() {
            if (a===1){
                document.getElementById('password').type='password';
                document.getElementById('pass_icon').src='{{asset('images/eye-off.svg')}}';
                a=0;
            }else {
                document.getElementById('password').type='text';
                document.getElementById('pass_icon').src='{{asset('images/eye.svg')}}';
                a=1;
            }
        }
    </script>


<script src="{{asset('asset')}}/bootstrap.js"></script>

</div>
</body>
</html>
