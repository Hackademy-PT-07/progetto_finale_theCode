<div class="mt-5">
    <table class="table">
        <thead>
            <h2 class="table-title">Lista dei tuoi annunci</h2>
            <tr>
                <th scope="col" class="revisor-head">Titolo</th>
                <th scope="col" class="revisor-head">Categoria</th>
                <th scope="col" class="revisor-head">Stato</th>
                <th scope="col" class="revisor-head">Data creazione</th>
                <th scope="col" class="revisor-head"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($this->getAnnouncements() as $announcement)
            <tr scope="row">
                <td class="revisor-td">{{ $announcement->title }}</td>
                <td class="revisor-td">{{ $announcement->category->name }}</td>
                @if($announcement->is_accepted == 1)
                <td class="revisor-td">Accettato</td>
                @elseif(is_Null($announcement->is_accepted))
                <td class="revisor-td">In sospeso</td>
                @elseif($announcement->is_accepted == 0)
                <td class="revisor-td">Scartato</td>
                @endif
                <td class="revisor-td">{{ $announcement->created_at }}</td>
                <td class="revisor-td">
                    <button wire:click="editAnnouncement({{ $announcement }})" class="revisor-show-btn">
                        Modifica
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" class="revisor-show-btn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-action="deleteAnnouncement({{ $announcement }})">
                        Elimina
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $this->getAnnouncements()->links() }}

    <x-delete-modal />

</div>