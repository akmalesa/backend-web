<table class="table table-compact table-stripped" id="data-jenis">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Jenis</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jenis as $j )
        <tr>
            <td>{{ $i = !isset($i)?$i=1:++$i }}</td>
            <td>{{ $j->nama_jenis }}</td>
            <td>
                <button class="btn" data-toggle="modal" data-target="#modalFormJenis" data-mode="edit" data-id="{{ $j->id }}" data-nama_jenis="{{ $j->nama_jenis }}">
                    <i class="fas fa-edit"></i>
                </button>
                <form method="post" action="{{ route('jenis.destroy', $j->id) }}" style="display:inline">
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