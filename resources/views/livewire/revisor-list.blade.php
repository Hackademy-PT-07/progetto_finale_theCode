<div class="mt-5">
    <table class="table">
        <thead>
            <h2 class="table-title">Annunci da revisionare</h2>
            <tr>
                <th scope="col" class="revisor-head">Utente</th>
                <th scope="col" class="revisor-head">Data creazione</th>
                <th scope="col" class="reviso-head"></th>
            </tr>
        </thead>
        <tbody>
            @foreach( $announcements as $announcement )
            <tr scope="row">
                <td class="revisor-td">{{ $announcement->user->name }}</td>
                <td class="revisor-td">{{ $announcement->created_at }}</td>
                <td class="revisor-td text-center">
                    <button wire:click="showAnnouncement" class="revisor-show-btn">Mostra</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
