<h2>Tambah Buku</h2>

<form action="/buku" method="POST">
@csrf
<input type="text" name="judul" placeholder="Judul"><br>
<input type="text" name="penulis" placeholder="Penulis"><br>
<input type="text" name="penerbit" placeholder="Penerbit"><br>
<input type="number" name="tahun" placeholder="Tahun"><br>

<button type="submit">Simpan</button>
</form>