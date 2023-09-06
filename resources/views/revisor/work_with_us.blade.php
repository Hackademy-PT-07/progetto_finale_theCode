<x-main>
        <x-slot:title>Work with us</x-slot>
        <!-- <div class="container">
            <div class="col-12 text-center mx-auto" style="width: 50%;margin-top: 100px;">

            </div>
        </div> -->
        <div class="form-box container rounded-5" style="padding-top: 55px;">
        <div class="form-container row w-100">

        <div class="col-12 col-md-6 form-left h-100">
            <form class="apply-form" action="{{route('become.revisor')}}" method="GET">
                @csrf
                <div class="text-center">
                    <h3>{{__('workRequest.title')}}</h3>
                    <h4>{{__('workRequest.sub')}}</h4>
                            <x-success />
                </div>
                <label for="applyDesc" class="applyDesc-label">{{__('workRequest.textarea')}}</label>
                <textarea id="applyDesc" name="applyDesc" style="width: 50%; border-radius: 10px;" rows="4" class="p-2"></textarea>
                <div class="apply-btn-box">
                <button type="submit" class="apply-btn floatingItem">{{__('workRequest.btn')}}</button>
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