<div class="mt-5">
    <table class="table">
        <thead>
            <h2 class="table-title">Annunci da revisionare</h2>
            <tr>
                <th scope="col" class="revisor-head">Utente</th>
                <th scope="col" class="revisor-head">Data creazione</th>
                <th scope="col" class="revisor-head"></th>
            </tr>
        </thead>
        <tbody>
            @foreach( $this->getAnnouncements() as $announcement )
            <tr scope="row">
                <td class="revisor-td">{{ $announcement->user->name }}</td>
                <td class="revisor-td">{{ $announcement->created_at }}</td>
                <td class="revisor-td text-center">
                    <button wire:click="showAnnouncement({{ $announcement }})" class="revisor-show-btn">Mostra</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $this->getAnnouncements()->links() }}

</div>
