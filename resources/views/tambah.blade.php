<html>
    <title>Halaman Index</title>

    <body>
        <a href="index">Lihat Data</a>
        <form action="tambah_data" method="post">
            @csrf
            <table border="1">
                <tr>
                    <td>NIM</td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td>
                        <select name="prodi">
                            <option>S1 Informatika</option>
                            <option>S1 DKV</option>
                            <option>S1 Akuntansi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea name="alamat"></textarea>
                    </td>
                </tr>
            </table>
            <button type="submit" name="simpan">Simpan</button>
        </form>

    </body>

</html>