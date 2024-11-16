<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <style>
        .custom-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4); 
        }
        .custom-input {
            border: 2px solid rgba(24, 88, 120, 1);
        }
        .custom-input:focus {
            border-color: rgba(24, 88, 120, 1); 
            box-shadow: none; 
        }
        .custom-bg-primary{
            background-color:rgba(0, 91, 134, 0.88)
        }
        .custom-button:hover {
            background-color: rgba(0, 91, 134, 0.88); 
            color: white; 
        }
        .custom-button {
            background-color: white;
            color: black;
            align-items: center; 
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-6 d-none d-lg-flex row ">
            <div class="col-2">  <img style="width:100vh ;min-height: 100vh;max-height: 105vh " src="{{asset('assets/img/backgroundlogin.png')}}"></div>
            <div class="col-lg-4 d-none d-lg-flex d-none mt-1">    <img height="200px" width="200px" style="margin-right: 100px" src="{{asset('assets/img/icon.png')}}"></div>
            <h5 class="col-5 text-center ms-4 " style="padding-top: 50%" >لا تفوت الفرصة، كن جزءًا  <br>من مجتمع المتسوقين الأذكياء</h5>
        </div>
        <div class="col-12 col-md-5 container my-5  p-4 rounded-5 custom-shadow" style="background-color: #E7E7E7;min-width: 500px; max-width: 555px; max-height: fit-content">
            <form class="my-1 mx-3 p-2">

                <div class="text-end my-3 me-3 "> <h2>هل نسيت كلمة المرور؟</h2></div>
                <div class="text-end my-3 me-3  text-black-50">لا تقلق، أدخل بريدك الإلكتروني أدناه لاستعادة كلمة المرور الخاصة بك </div>
                <div class="form-group text-end my-2" >
                    <label class="form-label me-3">البريد الاكتروني</label>
                    <div class="d-flex align-items-center">
                        <input class="form-control py-2 rounded-4 custom-input" style="width: 100%;padding: 10px 10px;color: #555;max-font-size: 33px"  name="email" id="email" type="email" >
                    </div>
    
                </div>
               
                <div class="text-center"><input class="btn  w-75 mt-4 py-3 rounded-4 text-white" style="background-color: #01496B" type="submit" value="ارسال"></div>
            </form>
            <hr>
            <div class="row text-center d-flex justify-content-center">
                <div class="col-5 mx-2 btn border shadow rounded-4 custom-button">
                    <img src="{{asset('assets/img/apple-icon.png')}}" alt="Apple">
                    <span>المواصلة مع أبل</span>
                </div>
                <div class="col-5 mx-2 btn border shadow rounded-4 custom-button">
                    <img src="{{asset('assets/img/google.svg')}}" alt="Google">
                    <span>المواصلة مع قوقل</span>
                </div>
            </div>
    
        </div>
    </div>
    
</body>
</html>