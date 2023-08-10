<x-auth-main>
    <x-slot:title>Login</x-slot>

    <div class="container h-100vh">
<section class="form-custom-container">
    <form class="form-custom" action="/login" method="POST">
        @csrf
        <h3>Bentornato!</h3>
        <span>accedi al tuo account</span>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="your@email.com" value="{{old('email')}}">
            @error('email')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>

        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="password">
            @error('password')<span class="error-span">Ops!{{$message}}</span>@enderror

        </div>

        <div class="form-btn-container">
            <button type="submit" class="form-custom-btn">Accedi</button>
        </div>

        <div class="text-start pt-3">
            <span>Nuovo qui?
                <a href="/register">Registrati!</a>
            </span>
        </div>
    </form>
</section>
    </div>

</x-auth-main>