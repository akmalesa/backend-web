<table class="table table-compact table-stripped" id="data-menu">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Menu</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($menus as $m)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $m->nama_menu }}</td>
                <td>
                    <button class="btn" data-toggle="modal" data-target="#modalFormMenu" data-mode="edit"
                        data-id="{{ $p->id }}" data-nama_produk="{{ $p->nama_produk }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form method="post" action="{{ route('menu.destroy', $m->id) }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn delete-data">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
