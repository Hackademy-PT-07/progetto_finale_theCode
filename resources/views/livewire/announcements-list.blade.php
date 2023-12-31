<div class="mt-5 d-flex justify-center align-items-center flex-column">
    <div class="revisor-titleBox">
        <h2 style="font-size: 3rem;">{{__('personal_area.subTitle')}}</h2>
    </div>
    <x-success />
    <table class="personalTable shadow">
        <thead>
            <tr>
                <th scope="col" class="">{{__('personal_area.formTitle')}}</th>
                <th scope="col" class="">{{__('personal_area.formCategory')}}</th>
                <th scope="col" class="">{{__('personal_area.state')}}</th>
                <th scope="col" class="">{{__('personal_area.date')}}</th>
                <th scope="col" class=""></th>
            </tr>
        </thead>
        <tbody>
            @foreach($this->getAnnouncements() as $announcement)
            <tr scope="row">
                <td class="fw-bold">{{ $announcement->title }}</td>
                <td class="">{{ $announcement->category->name }}</td>
                @if(is_Null($announcement->is_accepted))
                <td class="text-warning fw-bold">{{__('personal_area.outstanding')}}</td>
                @elseif($announcement->is_accepted)
                <td class="text-success fw-bold">{{__('personal_area.accepted')}}</td>
                @else
                <td class="text-danger fw-bold">{{__('personal_area.rejected')}}</td>
                @endif
                <td class="">{{ $announcement->updated_at->format('d/m/Y') }}</td>
                <td class="text-center">
                    <button wire:click="editAnnouncement({{ $announcement }}, {{ $announcement->id }})" class=" personalTable-btn shadow" style="background-color:green;">
                        {{__('personal_area.edit')}}
                    </button>
                    <button wire:click="deleteAnnouncement({{ $announcement }})" class=" personalTable-btn shadow" style="background-color:red;">
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
</div>