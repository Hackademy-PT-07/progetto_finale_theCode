<!-- Modal -->
<div class="modal fade modal-cont" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title text-center w-100" id="exampleModalLabel">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                {{ $body }}
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="confirmationButton" wire:click="">{{__('personal_area.confirm')}}</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{__('personal_area.cancel')}}</button>

            </div>
        </div>
    </div>
</div>