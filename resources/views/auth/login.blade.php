<x-auth-main>
    <x-slot:title>Login</x-slot>
        <div class="form-box container-fluid">
        <div class="form-container row my-sm-5">

        <div class="col-12 col-md-6 form-left pt-sm-5">
            <form class="auth-form" action="/login" method="POST">
                @csrf
                <div class="text-center">
                    <h3>{{__('auth.signIn')}}</h3>
                </div>
                <input type="email" name="email" id="email" placeholder="your@email.com">
                @error('email')<span class="error-span">Ops!{{$message}}</span>@enderror
                <input type="password" name="password" id="password">
                @error('password')<span class="error-span">Ops!{{$message}}</span>@enderror
                <button type="submit" class="auth-btn">{{__('auth.signIn')}}</button>

                <div class="sign-with">
                    <span>{{__('auth.signInWith')}}</span>
                    <div class="icons">
                        <a href="/auth/github/redirect"><i class="bi bi-github text-dark"></i> </a>
                        <a href="/auth/google/redirect"><i class="bi bi-google text-danger"></i></a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 form-right pt-sm-5">
            <div class="right-cont">
                <h2>{{__('auth.welcomeBack')}}</h2>
                <div class="form-paragraph">
                    <p>{{__('auth.signInParagraph')}}
                    </p>
                    <p>Presto.it team</p>
                </div>
                <div class="w-100 ">
                    <a href="/register" class="right-btn"> {{__('auth.notYet')}}</a>
                </div>
            </div>
        </div>
        </div>

    </div>

</x-auth-main>