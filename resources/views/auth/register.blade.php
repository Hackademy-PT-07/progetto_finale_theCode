<x-auth-main>
    <div class="form-box container-fluid">
        <div class="form-container row">

        <div class="col-12 col-md-6 form-left">
            <form class="auth-form row" action="/register" method="POST">
                @csrf
                <div class="text-center">
                    <h3>Sign Up</h3>
                </div>
                <input type="text" name="name" id="name" placeholder="Mario Rossi">
                @error('name')<span class="error-span">Ops!{{$message}}</span>@enderror
                <input type="email" name="email" id="email" placeholder="your@email.com">
                @error('email')<span class="error-span">Ops!{{$message}}</span>@enderror
                <input type="password" name="password" id="password" placeholder="password">
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="conferma password">
                @error('password')<span class="error-span">Ops!{{$message}}</span>@enderror
                <button type="submit" class="auth-btn">Registrati</button>

                <div class="sign-with">
                    <span>or sign up with</span>
                    <div class="icons">
                        <i class="bi bi-facebook text-primary"></i>
                        <i class="bi bi-google text-danger"></i>
                        <i class="bi bi-linkedin text-primary"></i>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 form-right pb-5">
            <div class="right-cont">
                <h2>Welcome!</h2>
                <div class="form-paragraph">
                    <p>Welcome! We are so happy to have you here. It's great to see you.
                    </p>
                    <p>Presto.it team</p>
                </div>
                <div class="w-100 text-center mt-5 pt-5">
                    <a href="/login" class="right-btn"> Not yet? Sign Up!</a>
                </div>
            </div>
        </div>
        </div>

    </div>

</x-auth-main>