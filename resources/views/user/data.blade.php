<table class="table table-compact table-stripped" id="data-user">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pengguna</th>
            <th>Email</th>
            <th>Hak Akses</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($users as $u)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->level }}</td>
                <td>
                    <button class="btn" data-toggle="modal" data-target="#modalFormUser" data-mode="edit"
                        data-id="{{ $u->id }}" data-name="{{ $u->name }}" data-email="{{ $u->email }}"
                        data-password="{{ $u->password }}" data-level="{{ $u->level }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form method="post" action="{{ route('user.destroy', $u->id) }}" style="display:inline">
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
