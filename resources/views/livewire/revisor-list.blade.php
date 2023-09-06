<div class="mt-5">
                <div class="revisor-titleBox">
                <h2 class="table-title">{{__('revisor_area.adToRev')}}</h2>
                <button wire:click="$emitTo('switch-table', 'switchTable')" class=" switchBtn shadow floatingItem"><i class="fa-solid fa-repeat"></i></button>
            </div>
    <table class="table mt-5 shadow">
        <thead>
            <tr>
                <th scope="col" class="revisor-head">{{__('revisor_area.user')}}</th>
                <th scope="col" class="revisor-head">{{__('revisor_area.title')}}</th>
                <th scope="col" class="revisor-head">{{__('revisor_area.date')}}</th>
                <th scope="col" class="revisor-head"></th>
            </tr>
        </thead>
        <tbody>
            @foreach( $this->getAnnouncements() as $announcement )
            <tr scope="row">
                <td class="revisor-td">{{ $announcement->user->name }}</td>
                <td class="revisor-td">{{ $announcement->title }}</td>
                <td class="revisor-td">{{ $announcement->updated_at->format('d/m/Y') }}</td>
                <td class="revisor-td text-center">
                    <button wire:click="showAnnouncement({{ $announcement }})" class="revisor-show-btn">{{__('revisor_area.show')}}</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $this->getAnnouncements()->links() }}

</div>