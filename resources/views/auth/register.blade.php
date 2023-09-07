<x-auth-main>

    <x-slot:title>Registrazione</x-slot:title>

    <div class="form-box container-fluid">
        <div class="form-container row my-sm-5">

            <div class="col-12 col-md-6 form-left pt-sm-5 pb-sm-2">
                <form class="auth-form row" action="/register" method="POST">
                    @csrf
                    <div class="text-center">
                        <h3>{{__('auth.signUp')}}</h3>
                    </div>
                    <input type="text" name="name" id="name" placeholder="Mario Rossi">
                    @error('name')<span class="error-span">Ops!{{$message}}</span>@enderror
                    <input type="email" name="email" id="email" placeholder="your@email.com">
                    @error('email')<span class="error-span">Ops!{{$message}}</span>@enderror
                    <input type="password" name="password" id="password" placeholder="password">
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="conferma password">
                    @error('password')<span class="error-span">Ops!{{$message}}</span>@enderror
                    <button type="submit" class="auth-btn">{{__('auth.signUp')}}</button>

                    <div class="sign-with">
                        <span>{{__('auth.signUpWith')}}</span>
                        <div class="icons">
                            <a href="/auth/github/redirect"><i class="bi bi-github text-dark"></i> </a>
                            <a href="/auth/google/redirect"><i class="bi bi-google text-danger"></i></a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-6 form-right pb-5 py-sm-5">
                <div class="right-cont">
                    <h2>{{__('auth.welcome')}}</h2>
                    <div class="form-paragraph">
                        <p>{{__('auth.signUpParagraph')}}
                        </p>
                        <p>Presto.it team</p>
                    </div>
                    <div class="w-100 text-center mt-5 pt-5">
                        <a href="/login" class="right-btn"> {{__('auth.signUpbtn')}}</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-auth-main>