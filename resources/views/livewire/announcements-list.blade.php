<div class="mt-5 d-flex justify-center align-items-center flex-column">
    <div class="revisor-titleBox">
        <h2 style="font-size: 3rem;">Lista dei tuoi annunci</h2>
    </div>
    <table class="table table-hover table-bordered rounded personalTable">
        <thead>
            <tr>
                <th scope="col" class="revisor-head">{{__('personal_area.formTitle')}}</th>
                <th scope="col" class="revisor-head">{{__('personal_area.formCategory')}}</th>
                <th scope="col" class="revisor-head">{{__('personal_area.state')}}</th>
                <th scope="col" class="revisor-head">{{__('personal_area.date')}}</th>
                <th scope="col" class="revisor-head"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($this->getAnnouncements() as $announcement)
            <tr scope="row">
                <td class="revisor-td">{{ $announcement->title }}</td>
                <td class="revisor-td">{{ $announcement->category->name }}</td>
                @if(is_Null($announcement->is_accepted))
                <td class="revisor-td text-warning">{{__('personal_area.outstanding')}}</td>
                @elseif($announcement->is_accepted)
                <td class="revisor-td text-success">{{__('personal_area.accepted')}}</td>
                @else
                <td class="revisor-td text-danger">{{__('personal_area.rejected')}}</td>
                @endif
                <td class="revisor-td">{{ $announcement->updated_at->format('d/m/Y') }}</td>
                <td class="revisor-td">
                    <button wire:click="editAnnouncement({{ $announcement }})" class="revisor-show-btn" style="background-color:green;">
                        {{__('personal_area.edit')}}
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" class="revisor-show-btn" data-bs-toggle="modal" data-bs-target="#modal" data-action="deleteAnnouncement({{ $announcement }})" style="background-color: red;">
                        {{__('personal_area.delete')}}
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div class="d-flex justify-content-end w-100">
    {{ $this->getAnnouncements()->links() }}

</div>

    <x-modal :title="$modalTitle" :body="$modalBody" />

</div>