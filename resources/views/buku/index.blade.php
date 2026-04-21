<h2>Data Buku</h2>

<a href="/buku/create">Tambah Buku</a>

<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Tahun</th>
    <th>Aksi</th>
</tr>

@php $no = 1; @endphp
@foreach($data as $d)
<tr>
    <td>{{ $no++ }}</td>
    <td>{{ $d->judul }}</td>
    <td>{{ $d->penulis }}</td>
    <td>{{ $d->penerbit }}</td>
    <td>{{ $d->tahun }}</td>
    <td>
        <!-- TOMBOL EDIT -->
        <a href="/buku/{{ $d->id }}/edit">Edit</a>

        <!-- TOMBOL HAPUS -->
        <form action="/buku/{{ $d->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Yakin hapus?')">
                Hapus
            </button>
        </form>
    </td>
</tr>
@endforeach

</table>