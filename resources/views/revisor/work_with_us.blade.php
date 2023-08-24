<x-auth-main>
        <x-slot:title>Work with us</x-slot>
        <x-success />
        <div class="form-box container-fluid">
        <div class="form-container row">

        <div class="col-12 col-md-6 form-left">
            <form class="apply-form" action="{{route('become.revisor')}}" method="GET">
                @csrf
                <div class="text-center">
                    <h3>Do you want to be a revisor?</h3>
                    <h4>Just apply!</h4>
                </div>
                <input type="text" name="name" id="name" value="{{Auth()->user()->name}}" disabled>
                @error('name')<span class="error-span">Ops!{{$message}}</span>@enderror
                <input type="email" name="email" id="email" value="{{Auth()->user()->email}}" disabled>
                @error('email')<span class="error-span">Ops!{{$message}}</span>@enderror
                <label for="applyDesc" class="applyDesc-label">Perchè vuoi lavorare per Presto.it?</label>
                <textarea id="applyDesc" name="applyDesc" style="width: 50%;" rows="4"></textarea>
                <div class="apply-btn-box">
                <button type="submit" class="apply-btn">ok, apply!</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 form-right apply-form-right">
            <div class="right-cont">
                <h2>Join the family!</h2>
                <div class="form-paragraph">
                    <p>Send us your request and let's start working togheter!
                    </p>
                    <p>Trust to see you soon!</p>
                    <p>Presto.it team</p>
                            <div class="form-logo-container">
            <div>
                <a href="#">
                    <img src="/storage/imgs/logo-nobcg.png" alt="logo" class="form-logo">
                </a>
            </div>
        </div>
                </div>
            </div>
        </div>
        </div>

    </div>

</x-auth-main>