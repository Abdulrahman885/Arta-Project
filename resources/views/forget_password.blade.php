<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('asset') }}/bootstrap.css" rel="stylesheet">

    <title>arta comfim_login</title>
</head>
<body>
<div class="row">
    <div class="col-6 row ">
        <div class="col-6">    <img style="width:100vh ;height: 100vh " src="{{asset('images/backgroundlogin.png')}}"></div>
        <div class="col-6 text-center" style="padding-top: 50%" >لا تفوت الفرصة، كن جزءًا
            <br>من مجتمع المتسوقين الأذكياء</div>

    </div>


    <div class="col-6 container px-3 rounded-5 w-25 shadow-lg" style="background-color: #E7E7E7;margin: 252px ">

        <form class="my-1 mx-3 p-2">

            <div class="text-end my-3 "> <h2>هل نسيت كلمة المرور؟</h2></div>
            <div class="text-end my-3  text-black-50"> .لاتقلق ادخل بريدك الاكتروني ادناه لاستعادة كلمة المرور</div>
            <div class="form-group text-end my-2" >
                <label class="form-label">البريد الاكتروني</label>
                <div class="d-flex align-items-center">
                    <input class="form-control " style="width: 100%;padding: 10px 0;color: #555" name="password" id="password" type="password"  >
{{--                    <button style="position: absolute; float: right; cursor: pointer;border: 0;border-radius: calc(100%) ;background-color: white" >--}}
                        <img class="float-end" style="position: absolute" src="{{asset('images/eye-off.svg')}}">
{{--                    </button>--}}
                </div>

            </div>
            <div class="form-group my-2 row" >
                <div class="col-1 "><input class="form-check-input " type="checkbox"></div>
                <div class="col-1 "> <label class="form-label">تذكرني</label></div>
                <div class="col-10  text-end"><label style="text-align: start">هل نسيت كلمة المرور</label></div>
            </div>
            <div class="text-center"><input class="btn  w-100 py-3 rounded-4 text-white" style="background-color: #01496B" type="submit" value="ارسال"></div>
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
    <script>
        function show() {
        let password =document.getElementById('password');
        if(password.type === "password"){
            password.type ="text";
        }else {
            password.type = "password";
        }
        }
    </script>
    <script src="{{asset('asset')}}/bootstrap.js"></script>
</body>
</html>
