<x-auth-main>

<section class="form-custom-container container">



<form class="form-custom " action="/register" method="POST">
        @csrf
        <h3>Benvenuto!</h3>
        <span>Crea il tuo account</span>
<div class="row">
    <div class="col-12 col-md-6">
        <div>
            <label for="name">Nome</label>
            <input type="name" name="name" id="name" placeholder="Mario Rossi" value="{{old('name')}}">
            @error('name')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>
    </div>
        
    <div class="col-12 col-md-6">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="your@email.com" value="{{old('email')}}">
            @error('email')<span class="error-span">Ops!{{$message}}</span>@enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-6">
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div>
            <label for="password_confirmation">Conferma password</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-btn-container">
            <button type="submit" class="form-custom-btn">Registrati</button>
        </div>
    </div>
    <div class="col-12">
        <div class="text-center pt-3">
            <span>Hai già un'account?
                <a href="/login">Accedi!</a>
            </span>
        </div>
    </div>
</div>

</form>
</section>

</x-auth-main>