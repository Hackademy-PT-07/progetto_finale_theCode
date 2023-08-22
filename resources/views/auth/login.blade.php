<x-auth-main>
    <x-slot:title>Login</x-slot>
        <div class="form-box container-fluid">
        <div class="form-container row">

        <div class="col-12 col-md-6 form-left">
            <form class="auth-form" action="/login" method="POST">
                @csrf
                <div class="text-center">
                    <h3>Sign In</h3>
                </div>
                <input type="email" name="email" id="email" placeholder="your@email.com">
                @error('email')<span class="error-span">Ops!{{$message}}</span>@enderror
                <input type="password" name="password" id="password">
                @error('password')<span class="error-span">Ops!{{$message}}</span>@enderror
                <button type="submit" class="auth-btn">Accedi</button>

                <div class="sign-with">
                    <span>or sign in with</span>
                    <div class="icons">
                        <a href="/auth/github/redirect"><i class="bi bi-github text-dark"></i> </a>
                        <a href="/auth/google/redirect"><i class="bi bi-google text-danger"></i></a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 form-right">
            <div class="right-cont">
                <h2>Welcome back!</h2>
                <div class="form-paragraph">
                    <p>Welcome back! We are so happy to have you here. It's great to see you again.
                    </p>
                    <p>Presto.it team</p>
                </div>
                <div class="w-100 ">
                    <a href="/register" class="right-btn"> Not yet? Sign Up!</a>
                </div>
            </div>
        </div>
        </div>

    </div>

</x-auth-main>