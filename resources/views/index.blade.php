<html>
    <title>Halaman Index</title>

    <body>
        <a href="tambah">Tambah Data</a>
        <table border="1">
            <tr>
                <td>NIM</td>
                <td>Nama</td>
                <td>Tempat Lahir</td>
                <td>Tanggal Lahir</td>
                <td>Prodi</td>
                <td>Alamat</td>
                <td>Aksi</td>
            </tr>
            @foreach ( $data as $d )
            <tr>
                <td>{{$d->NIM}}</td>
                <td>{{$d->Nama}}</td>
                <td>{{$d->Tempat_Lahir}}</td>
                <td>{{$d->Tanggal_Lahir}}</td>
                <td>{{$d->Prodi}}</td>
                <td>{{$d->Alamat}}</td>
                <td>
                    <a href="edit/{{$d->NIM}}">Edit</a>
                    <a href="">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </body>

</html>