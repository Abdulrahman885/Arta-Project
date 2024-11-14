<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('asset') }}/bootstrap.css" rel="stylesheet">

    <title>add new ads</title>
</head>
<body>
<div class="container">
<header class="row">
    <div class="col-6 "><img style="width: 25%;height: 100%;padding: 20px 20px " src="{{asset('images/icon_arta.png')}}"></div>
    <div class="col-6  text-end p-3 px-4"><button class="rounded-circle" style="height: 45px;border: none;background-color: #D2E1E8;width:45px;"><img src="{{asset('images/chevron-right.svg')}}"></button> </div>
</header>

        <div class="row">
            <div class="col-6 px-5">
                <h2>إضافة اعلان جديد</h2>
            </div>
            <div class="col-6 text-end container  p-lg-5 ">
                <form>
                    <label class="py-3">اختر القسم الرئيسي</label>
                    <select class="form-select  border-2 text-end"  style="border-color: #62A1BE">
                        <option> العقارات</option>
                        <option> السيارات</option>
                        <option> الملابس</option>
                    </select>
                    <label class="py-3">المدينه</label>
                    <select class="form-select  border-2 text-end" style="border-color: #62A1BE">
                        <option> سيئون</option>
                        <option> القطن</option>
                        <option> تريم</option>
                    </select>
                    <h6 class="py-3"> اسم الاعلان</h6>
                    <input class="form-control border-2 " type="text" style="border-color: #62A1BE" >
                    <h6 class="py-3">تفاصيل الاعلان</h6>
                    <input class="form-control border-2  py-lg-5" type="text" style="border-color: #62A1BE" >
                    <h6 class="py-3">سعر الاعلان</h6>
                    <input class="form-control border-2  py-2" type="number" style="border-color: #62A1BE" >
                    <h6 class="py-3" >رقم الجوال</h6>
                    <input class="form-control border-2  py-2" type="number" style="border-color: #62A1BE" >
                    <h6 class="py-3">رقم الواتساب</h6>
                    <input class="form-control border-2  py-2" type="number"  style="border-color: #62A1BE">
                    <h6 class="py-3">حالة المنتج</h6>
                    <div class="d-flex float-end">
                        <div class="form-check px-3 ">
                            <input class="form-check-input" style="border-color: #62A1BE" type="radio" value="option1" name="ads">
                            <label class="form-check-label">
                                جديد
                            </label>
                        </div>
                        <div class="form-check px-3">
                            <input class="form-check-input" style="border-color: #62A1BE" type="radio" name="ads" value="option2">
                            <label class="form-check-label">
                                مستعمل
                            </label>
                        </div>
                        <div class="form-check px-3 border-2" >
                            <input class="form-check-input" style="border-color: #62A1BE" type="radio" name="ads" value="option3">
                            <label class="form-check-label">
                                شبه جديد
                            </label>
                        </div>
                    </div>

                </form>
            </div>
        </div>
<hr>
<footer class="row">
    <div class="row d-flex  "style="padding-bottom: 0px">
        <div class="col-6 " style="padding: 10px 0px 0px 100px;">
            <button class="rounded-circle" style="height: 45px;border: none;background-color: #BDD6F4;width:45px;"><img src="{{asset('images/facebook.svg')}}"></button>
            <button class="rounded-circle" style="height: 45px;border: none;background-color: #BDD6F4;width:45px;"><img src="{{asset('images/twitter.svg')}}"></button>
            <button class="rounded-circle" style="height: 45px;border: none;background-color: #BDD6F4;width:45px;"><img src="{{asset('images/instagram.svg')}}"></button>
            <button class="rounded-circle " style="height: 45px;border: none;background-color: #BDD6F4;width:45px;"><img style="width: 25px;" src="{{asset('images/whatsapp.svg')}}"></button>
        </div>
        <div class="col-6 text-end"style="padding: 0px 0px 0px 0px"><img style="width: 120px;height: 120px;" src="{{asset('images/icon_arta.png')}}"></div>
    </div>
    <div class="row ">
        <h4 style="padding: 0px 10px 10px 100px">استكشف التطبيق الخاص بنا</h4>
        <div class="col-4 text-center">
            <button style="border: none;background-color: white"><img  style="width:150px" src="{{asset('images/appstore.png')}}"></button>
            <button style="border: none;background-color: white"><img style="width:150px" src="{{asset('images/googlestore.png')}}"></button>
        </div>
        <div class="col-4 text-center py-3">تواصل معنا: info@company.com <br> جميع الحقوق محفوظة @ 2024. <br></div>
        <div class="col-4 text-center text-end py-3">"نص تجريبي يستخدم في تصميم الواجهات والمشاريع. هذا النص هو مجرد نص وهمي يهدف إلى ملء المساحات، وعادةً ما يُستخدم في الطباعة والتصميم."</div>

    </div>
</footer>
</div>
</body>
</html>
