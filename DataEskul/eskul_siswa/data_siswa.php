<h3>Data Eskul Siswa</h3>

<table border="1">
    <tr>
        <td>No</td>
        <td>Nama Siswa</td>
        <td>Kelas</td>
        <td>Eskul</td>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from datasiswa");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
         <td>$no</td>
         <td>$tampil[NamaSiswa]</td>
         <td>$tampil[Kelas]</td>
         <td>$tampil[Eskul]</td>
        </tr>";
        $no++;
    }
    ?>
</table>