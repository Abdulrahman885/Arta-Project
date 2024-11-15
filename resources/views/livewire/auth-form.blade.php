<div class="row">
    <div class="col-md-6 d-none d-lg-flex row ">
        <div class="col-2">  <img style="width:100vh ;height: 100vh " src="{{asset('assets/img/backgroundlogin.png')}}"></div>
        <div class="col-lg-4 d-none d-lg-flex d-none mt-1">    <img height="200px" width="200px" style="margin-right: 100px" src="{{asset('assets/img/icon.png')}}"></div>
        <h5 class="col-5 text-center ms-4 " style="padding-top: 50%" >لا تفوت الفرصة، كن جزءًا  <br>من مجتمع المتسوقين الأذكياء</h5>
    </div>
    <div class="col-12 col-md-5 container my-4 p-3 rounded-5 custom-shadow" style="background-color: #E7E7E7;min-width: 500px; max-width: 555px; min-height:auto;">
        <div class="rounded-5 d-flex" style="background-color: rgba(1, 73, 107, 0.68)">
            <button wire:click="toggleForm" class="btn w-50 text-white my-2 ms-2 rounded-5 {{ $showLogin ? '' : 'custom-bg-primary' }}">انشاء حساب</button>
            <button wire:click="toggleForm" class="btn w-50 text-white  my-2 me-2 rounded-5 {{ $showLogin ? 'custom-bg-primary' : '' }}">تسجيل الدخول</button>
        </div>


            @if($showLogin)
            <div class="text-end my-3 me-5 text-black-50">
                <span style="color: rgba(1, 83, 73, 1);">!!اهلا بعودتك مجددا استمتع معنا في تجربة مميزة</span>
            </div>
                <form class="my-3 mx-2">
                    <div class="form-group text-end my-2">
                        <label class="form-label me-3">اسم المستخدم أو البريد الإلكتروني</label>
                        <input class="form-control py-2 rounded-4 custom-input" type="email">
                    </div>
                    <div class="form-group text-end my-2">
                        <label class="form-label me-3">كلمة المرور</label>
                        <div class="d-flex align-items-center position-relative">
                            <input class="form-control rounded-4 py-2 custom-input" type="password" placeholder=" ">
                            <img style="position: absolute; right: 15px; cursor: pointer;" src="{{asset('assets/img/eye.svg')}}">
                        </div>
                    </div>
                    <div class="d-flex align-items-center me-3 mb-4">
                        <input class="form-check-input me-2" type="checkbox" id="rememberMe">
                        <label class="form-label me-auto" for="rememberMe">تذكرني</label>
                        <a href="#" class="link">هل نسيت كلمة المرور؟</a>
                    </div>
                    <div class="text-center">
                        <input class="btn w-100 py-3 rounded-4 text-white" style="background-color:rgba(0, 91, 134, 0.88)" type="submit" value="تسجيل الدخول">
                    </div>
                </form>
            @else
                <div class="text-end my-3 me-5 text-black-50">
                    <span style="color: rgba(1, 83, 73, 1);">!نرحب بوجودك معنا استمتع بخدمات مميزة</span>
                </div>
                <form class="my-3 mx-2">
                    <div class="form-group text-end my-2">
                        <label class="form-label me-3">الاسم بالكامل</label>
                        <input class="form-control py-2 rounded-4 custom-input" type="text">
                    </div>
                    <div class="form-group text-end my-2">
                        <label class="form-label me-3">البريد الإلكتروني</label>
                        <input class="form-control py-2 rounded-4 custom-input" type="email">
                    </div>
                    <div class="row">
                        <div class="form-group text-end my-2 col-6">
                            <label class="form-label me-3">إعادة كتابة كلمة المرور</label>
                            <div class="d-flex align-items-center position-relative">
                                <input class="form-control rounded-4 py-2 custom-input" style="width: 100%; padding: 10px 10px; color: #555;" name="password" id="password" type="password" placeholder=" ">
                                <img style="position: absolute; right: 15px; cursor: pointer; " id="pass_icon" src="{{asset('assets/img/eye.svg')}}">
                            </div>
                        </div>
                        <div class="form-group text-end my-2 col-6">
                            <label class="form-label me-3">كلمة المرور </label>
                            <div class="d-flex align-items-center position-relative">
                                <input class="form-control rounded-4 py-2 custom-input" style="width: 100%; padding: 10px 10px; color: #555;" name="password" id="password" type="password" placeholder=" ">
                                <img style="position: absolute; right: 15px; cursor: pointer; " id="pass_icon" src="{{asset('assets/img/eye.svg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group text-end my-2 col-6">
                            <label class="form-label me-3">رقم الواتساب</label>
                            <input class="form-control py-2 rounded-4 custom-input" type="email">
                        </div>
                        <div class="form-group text-end my-2 col-6">
                            <label class="form-label me-3">رقم الاتصال</label>
                            <input class="form-control py-2 rounded-4 custom-input" type="email">
                        </div>
                    </div>
                    <div class="text-center">
                        <input class="btn w-100 py-3 rounded-4 text-white" style="background-color:rgba(0, 91, 134, 0.88)" type="submit" value="إنشاء حساب">
                    </div>
                </form>
            @endif
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
