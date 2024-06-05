<html>
    <title>Halaman Index</title>

    <body>
        <a href="/mahasiswa/index">Lihat Data</a>
        <form action="/mahasiswa/edit_data" method="post">
            @csrf
            <table border="1">
                <tr>
                    <td>NIM</td>
                    <td><input type="number" name="nim" value="{{ $data_mhs->NIM }}" readonly></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="{{$data_mhs->Nama}}"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir" value="{{ $data_mhs->Tempat_Lahir}}"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir" value="{{ $data_mhs->Tempat_Lahir}}"></td>
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
                        <textarea name="alamat">{{$data_mhs->Alamat}}</textarea>
                    </td>
                </tr>
            </table>
            <button type="submit" name="simpan">Simpan Perubahan</button>
        </form>

    </body>

</html>