<x-main>
        <x-slot:title>Work with us</x-slot>
        <x-success />
        <div class="form-box container mt-5">
        <div class="form-container row w-100">

        <div class="col-12 col-md-6 form-left h-100">
            <form class="apply-form" action="{{route('become.revisor')}}" method="GET">
                @csrf
                <div class="text-center">
                    <h3>{{__('workRequest.title')}}</h3>
                    <h4>{{__('workRequest.sub')}}</h4>
                </div>
                <input type="text" name="name" id="name" value="{{Auth()->user()->name}}" disabled>
                @error('name')<span class="error-span">Ops!{{$message}}</span>@enderror
                <input type="email" name="email" id="email" value="{{Auth()->user()->email}}" disabled>
                @error('email')<span class="error-span">Ops!{{$message}}</span>@enderror
                <label for="applyDesc" class="applyDesc-label">{{__('workRequest.textarea')}}</label>
                <textarea id="applyDesc" name="applyDesc" style="width: 50%;" rows="4"></textarea>
                <div class="apply-btn-box">
                <button type="submit" class="apply-btn">{{__('workRequest.btn')}}</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 form-right apply-form-right">
            <div class="right-cont">
                <h2>{{__('workRequest.header')}}</h2>
                <div class="form-paragraph">
                    <p>{{__('workRequest.rightP1')}}
                    </p>
                    <p>{{__('workRequest.rightP2')}}</p>
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

</x-main>