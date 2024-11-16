<div class="row">
    <div class="col-md-5 d-none d-lg-flex row ">
        <div class="col-2 ">  <img style="width:100vh ;min-height: 100vh;max-height: 112vh " src="{{asset('assets/img/backgroundlogin.png')}}"></div>
        <div class="col-lg-4 mt-1">    <img height="200px" width="200px" style="margin-right: 100px" src="{{asset('assets/img/icon.png')}}"></div>
        <h5 class="col-5 text-center mt-0 ms-4 " style="padding-top: 35%" >لا تفوت الفرصة، كن جزءًا  <br>من مجتمع المتسوقين الأذكياء</h5>
    </div>

    <div class="col-12 col-md-5 container my-5 p-3 rounded-5 custom-shadow" style="background-color: #E7E7E7;min-width: 450px; max-width: 500px; max-height: fit-content">
        <div class="rounded-5 d-flex" style="background-color: rgba(1, 73, 107, 0.68)">
            <button wire:click="toggleFormRegister" class="btn w-50 text-white my-2 ms-2 rounded-5 {{ $showLogin ? '' : 'custom-bg-primary' }}">انشاء حساب</button>
            <button wire:click="toggleFormLogin" class="btn w-50 text-white  my-2 me-2 rounded-5 {{ $showLogin ? 'custom-bg-primary' : '' }}">تسجيل الدخول</button>
        </div>
            @if($showLogin)
            <div class="text-end my-3 me-5 text-black-50">
                <span style="color: rgba(1, 83, 73, 1);">!!اهلا بعودتك مجددا استمتع معنا في تجربة مميزة</span>
            </div>

                {{-- form Login --}}
                <form class="my-3 mx-2" method="POST" action="{{ route('login') }}">
                    @csrf
                    {{-- input Username OR Email --}}
                    <div class="form-group text-end my-2">
                        <label class="form-label me-3">اسم المستخدم أو البريد الإلكتروني</label>
                        <input class="form-control py-2 rounded-4 custom-input " type="email" name="email" id="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- input Password --}}
                    <div class="form-group text-end my-2">
                        <label class="form-label me-3">كلمة المرور</label>
                        <div class="d-flex align-items-center position-relative">
                            @if ($showPassword)
                                <input class="form-control rounded-4 py-2 custom-input @error('password') is-invalid @enderror" type="text" name="password" id="password" required autocomplete="current-password">
                                <img wire:click="togglePassword" style="position: absolute; right: 15px; cursor: pointer;" src="{{asset('assets/img/eye-off.svg')}}">
                            @else
                                <input class="form-control rounded-4 py-2 custom-input @error('password') is-invalid @enderror" type="password" name="password" id="password" required autocomplete="current-password">
                                <img wire:click="togglePassword" style="position: absolute; right: 15px; cursor: pointer;" src="{{asset('assets/img/eye.svg')}}">
                            @endif
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- rememberMe AND forget password --}}
                    <div class="d-flex align-items-center mx-3 mb-2">
                        <input class="form-check-input custom-input me-2" style=" width: 20px;height: 20px; cursor: pointer;" name="remember" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-label me-auto fw-bold pt-2" for="rememberMe">تذكرني</label>
                        <a href="{{ route('password.request') }}" class="link fw-bold text-decoration-none" style="color:rgba(1, 73, 107, 0.68);">هل نسيت كلمة المرور؟</a>
                    </div>

                    {{-- inout submit --}}
                    <div class="text-center">
                        <input class="btn w-100 py-3 rounded-4 text-white" style="background-color:rgba(0, 91, 134, 0.88)" type="submit" value="تسجيل الدخول">
                    </div>
                </form>
                {{-- End form login --}}

                @else
                <div class="text-end my-3 me-5 text-black-50">
                    <span style="color: rgba(1, 83, 73, 1);">!نرحب بوجودك معنا استمتع بخدمات مميزة</span>
                </div>

                {{-- form register --}}
                <form class="my-3 mx-2" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group text-end my-2">
                        <label class="form-label me-3">الاسم بالكامل</label>
                        <input class="form-control py-2 rounded-4 custom-input" style=" direction: rtl; direction: rtl;" type="text">
                    </div>
                    <div class="form-group text-end my-2">
                        <label class="form-label me-3">البريد الإلكتروني</label>
                        <input class="form-control py-2 rounded-4 custom-input" type="email">
                    </div>
                    <div class="row">
                        <div class="form-group text-end my-2 col-6">
                            <label class="form-label me-3">إعادة كتابة كلمة المرور</label>
                            <div class="d-flex align-items-center position-relative">
                            @if ($showConfirmePassword)
                            <input class="form-control rounded-4 py-2 custom-input" type="text" placeholder=" ">
                            <img wire:click="toggleConfirmePassword" style="position: absolute; right: 15px; cursor: pointer;" src="{{asset('assets/img/eye-off.svg')}}">
                            @else
                            <input class="form-control rounded-4 py-2 custom-input" type="password" placeholder=" ">
                            <img wire:click="toggleConfirmePassword" style="position: absolute; right: 15px; cursor: pointer;" src="{{asset('assets/img/eye.svg')}}">
                            @endif
                            </div>
                        </div>
                        <div class="form-group text-end my-2 col-6">
                            <label class="form-label me-3">كلمة المرور </label>
                            <div class="d-flex align-items-center position-relative">
                            @if ($showPassword)
                            <input class="form-control rounded-4 py-2 custom-input" type="text" placeholder=" ">
                            <img wire:click="togglePassword" style="position: absolute; right: 15px; cursor: pointer;" src="{{asset('assets/img/eye-off.svg')}}">
                            @else
                            <input class="form-control rounded-4 py-2 custom-input" type="password" placeholder=" ">
                            <img wire:click="togglePassword" style="position: absolute; right: 15px; cursor: pointer;" src="{{asset('assets/img/eye.svg')}}">
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group text-end my-2 col-6">
                            <label class="form-label me-3">رقم الواتساب</label>
                            <input class="form-control py-2 rounded-4 custom-input" type="number">
                        </div>
                        <div class="form-group text-end my-2 col-6">
                            <label class="form-label me-3">رقم التواصل</label>
                            <input class="form-control py-2 rounded-4 custom-input" type="number">
                        </div>
                    </div>
                    <div class="text-center">
                        <input class="btn w-100 py-3 rounded-4 text-white" style="background-color:rgba(0, 91, 134, 0.88)" type="submit" value="إنشاء حساب">
                    </div>
                </form>
                {{-- End form register --}}

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
    <div class=" d-none d-md-flex me-2 p-3 col-1 px-4">
        <a href="{{ url('/') }}" style="height: 45px; width: 45px;">
            <button class="rounded-circle" style="height: 45px; border: none; background-color: #D2E1E8; width: 45px;">
                <img src="{{ asset('assets/img/chevron-right.svg') }}">
            </button>
        </a>
    </div>
</div>
