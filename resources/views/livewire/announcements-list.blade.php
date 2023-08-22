<div class="mt-5">
    <table class="table">
        <thead>
            <h1>Lista dei tuoi annunci</h1>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Data creazione</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach( $announcements as $announcement )
            <tr>
                <th scope="row">{{ $announcement->id }}</th>
                <td>{{ $announcement->title }}</td>
                <td>{{ $announcement->category->name }}</td>
                <td>{{ $announcement->created_at }}</td>
                <td>
                    <button wire:click="editAnnouncement({{ $announcement->id }}, {{ $announcement->category->id }})">Modifica</button>
                    <button wire:click="deleteAnnouncement({{ $announcement }})">Elimina</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>