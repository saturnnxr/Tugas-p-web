<h3>Tambah Data</h3>

<form action="" method="POST">
    <table>
        <tr>
            <td>NIS</td>
            <td><input type="text" name="NIS"></td>
        </tr>
        <tr>
            <td width="128">Nama Siswa</td>
            <td><input type="text" name="namasiswa"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas"></td>
        </tr>
        <tr>
            <td>Eskul</td>
            <td><input type="text" name="eskul"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";
include "data_siswa.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into datasiswa set
    NIS = '$_POST[NIS]',
    namasiswa = '$_POST[namasiswa]',
    kelas = '$_POST[kelas]',
    eskul = '$_POST[eskul]'");

    echo "Data siswa baru telah tersimpan";
}
?>