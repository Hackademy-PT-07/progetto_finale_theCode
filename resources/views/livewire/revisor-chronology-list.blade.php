<div class="mt-5">
    <table class="table">
        <thead>
            <h2 class="table-title">Cronologia annunci revisionati</h2>
            <tr>
                <th scope="col" class="revisor-head">Utente</th>
                <th scope="col" class="revisor-head">Titolo</th>
                <th scope="col" class="revisor-head">Stato</th>
                <th scope="col" class="revisor-head">Data</th>
                <th scope="col" class="revisor-head"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($this->getAnnouncements() as $announcement)
            <tr scope="row">
                <td class="revisor-td">{{ $announcement->user->name }}</td>
                <td class="revisor-td">{{ $announcement->title }}</td>
                @if($announcement->is_accepted)
                <td class="revisor-td text-success">Accettato</td>
                @else
                <td class="revisor-td text-danger">Scartato</td>
                @endif
                <td class="revisor-td">{{ $announcement->updated_at->format('d/m/Y') }}</td>
                <td class="revisor-td">
                    <!-- Button trigger modal -->
                    <div wire:loading.remove.delay.long>
                        <button type="button" class="revisor-show-btn" data-bs-toggle="modal" data-bs-target="#modal" data-action="reviewAnnouncement({{ $announcement }})">
                            Modifica stato
                        </button>
                    </div>
                    <div wire:loading.delay.long>
                        <button type="button" class="revisor-show-btn" style="background-color:gray; cursor:inherit;" disabled>
                            Invio email...
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $this->getAnnouncements()->links() }}

    <x-modal :title="$modalTitle" :body="$modalBody" />

</div>