<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Olahraga</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #eee; }
        .box { border: 1px solid #ddd; padding: 15px; margin-bottom: 20px; border-radius: 5px; }
        #editForm { display: none; background: #eef; padding: 15px; margin-top: 20px; border: 1px solid #ccd; }
    </style>
</head>
<body>

    <h2>Jadwal Olahraga</h2>

    <div class="box">
        <form action="/tambah-jadwal" method="POST">
            @csrf
            <input type="text" name="nama_olahraga" placeholder="Nama Olahraga" required>
            <input type="text" name="lokasi" placeholder="Lokasi" required>
            <input type="time" name="jam" required>
            <input type="date" name="tanggal" required>
            <button type="submit">Tambah</button>
        </form>
    </div>

    <table>
        <tr>
            <th>Olahraga</th>
            <th>Lokasi</th>
            <th>Waktu</th>
            <th>Aksi</th>
        </tr>
        @foreach($jadwal as $j)
        <tr>
            <td>{{ $j->nama_olahraga }}</td>
            <td>{{ $j->lokasi }}</td>
            <td>{{ $j->jam }} ({{ $j->tanggal }})</td>
            <td>
                <button onclick="showEdit('{{ $j->id }}', '{{ $j->nama_olahraga }}', '{{ $j->lokasi }}', '{{ $j->jam }}', '{{ $j->tanggal }}')">Edit</button>
                <a href="/hapus-jadwal/{{ $j->id }}" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    <div id="editForm">
        <h4>Edit Data</h4>
        <form action="/update-jadwal" method="POST">
            @csrf
            <input type="hidden" name="id" id="e_id">
            <input type="text" name="nama_olahraga" id="e_nama" required>
            <input type="text" name="lokasi" id="e_lokasi" required>
            <input type="time" name="jam" id="e_jam" required>
            <input type="date" name="tanggal" id="e_tanggal" required>
            <button type="submit">Update</button>
            <button type="button" onclick="document.getElementById('editForm').style.display='none'">Batal</button>
        </form>
    </div>

    <script>
        function showEdit(id, nama, lokasi, jam, tgl) {
            document.getElementById('editForm').style.display = 'block';
            document.getElementById('e_id').value = id;
            document.getElementById('e_nama').value = nama;
            document.getElementById('e_lokasi').value = lokasi;
            document.getElementById('e_jam').value = jam;
            document.getElementById('e_tanggal').value = tgl;
        }
    </script>

</body>
</html>