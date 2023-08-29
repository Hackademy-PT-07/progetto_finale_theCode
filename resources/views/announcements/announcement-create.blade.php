<x-main>
        <x-slot:title>Create</x-slot:title>


    <section class="container d-flex justify-center align-content-center" style="padding-top: 55px;">
        <div class="row border border-black-50 rounded-5 shadow-lg creation-container mb-sm-5">
            <div class="col-12 col-md-6 px-0">
                <div class="creation-form-header">
                <h1>{{__('ui.startSelling1')}}</h1>
                <p>{{__('ui.publish')}}</p>
                <ul>
                    <li><i class="bi bi-binoculars"></i>{{__('ui.fastSearch')}}</li>
                    <li><i class="bi bi-credit-card-2-back"></i>{{__('ui.payment')}}</li>
                    <li><i class="bi bi-truck"></i>{{__('ui.tracking')}}</li>
                </ul>
                </div>
            </div>
            <div class=" col-12 col-md-6 p-0">
            <div class="creation-form-header creation-form-cont">
                <livewire:announcement-form />
            </div>
            </div>
        </div>
</section>

</x-main>