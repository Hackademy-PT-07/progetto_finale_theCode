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
            @forelse( $announcements as $announcement )
            <tr scope="row">
                <td class="revisor-td">{{ $announcement->user->name }}</td>
                <td class="revisor-td">{{ $announcement->created_at }}</td>
                <td class="revisor-td text-center">
                    <button wire:click="showAnnouncement({{ $announcement }})" class="revisor-show-btn">Mostra</button>
                </td>
            </tr>
            @empty
            <div class="col-12 mx-auto text-center search-msg">
                <p>Non ci sono annunci da revisionare!</p>
                <p>Vuoi tornare alla home?</p>
                <a href="{{route('home')}}" class="btn-home">Home</a>
            </div>
            @endforelse
        </tbody>
    </table>

    {{ $this->getAnnouncements()->links() }}

</div>
