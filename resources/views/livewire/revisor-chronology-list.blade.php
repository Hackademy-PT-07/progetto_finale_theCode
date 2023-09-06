<div class="mt-5">
            <div class="revisor-titleBox">
                <h2 class="table-title">{{__('revisor_area.title2')}}</h2>
                <button wire:click="$emitTo('switch-table', 'switchTable')" class=" switchBtn shadow floatingItem"><i class="fa-solid fa-repeat"></i></button>
            </div>
    <table class="table shadow revisor-table">
        <thead>
            <tr>
                <th scope="col" class="revisor-head">{{__('revisor_area.user')}}</th>
                <th scope="col" class="revisor-head">{{__('revisor_area.title')}}</th>
                <th scope="col" class="revisor-head">{{__('revisor_area.state')}}</th>
                <th scope="col" class="revisor-head">{{__('revisor_area.date')}}</th>
                <th scope="col" class="revisor-head"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($this->getAnnouncements() as $announcement)
            <tr scope="row">
                <td class="revisor-td">{{ $announcement->user->name }}</td>
                <td class="revisor-td">{{ $announcement->title }}</td>
                @if($announcement->is_accepted)
                <td class="revisor-td text-success">{{__('personal_area.accepted')}}</td>
                @else
                <td class="revisor-td text-danger">{{__('personal_area.rejected')}}</td>
                @endif
                <td class="revisor-td">{{ $announcement->updated_at->format('d/m/Y') }}</td>
                <td class="revisor-td">
                    <!-- Button trigger modal -->
                    <div wire:loading.remove.delay.long>
                        <button type="button" class="btn btn-danger" wire:click="reviewAnnouncement({{ $announcement }})">{{__('revisor_area.statusChange')}}</button>
                    </div>
                    <div wire:loading.delay.long>
                        <button type="button" class="revisor-show-btn" style="background-color:gray; cursor:inherit;" disabled>
                            {{__('revisor_area.mail')}}
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $this->getAnnouncements()->links() }}

</div>