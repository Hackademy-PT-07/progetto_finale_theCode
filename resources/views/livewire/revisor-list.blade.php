<div class="mt-5">
    <table class="table">
        <thead>
            <h2>Annunci da revisionare</h2>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Utente</th>
                <th scope="col">Data creazione</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach( $announcements as $announcement )
            <tr scope="row">
                <td >{{ $announcement->id }}</td>
                <td>{{ $announcement->user->name }}</td>
                <td>{{ $announcement->created_at }}</td>
                <td>
                    <button wire:click="showAnnouncement">Mostra</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
