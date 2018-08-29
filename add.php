<?php
//PANGGIL FAIL SAMBUNG KE PANGKALAN DATA
include_once("config.php");

if(isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
}
//TAMBAH REKOD KE PANGKALAN DATA
    $result = mysqli_query($mysqli, "INSERT INTO produk(nama,harga)"."VALUES('$nama','$harga')");
    
//PAPAR MESEJ JIKA TAMBAH REKOD BERJAYA
echo "<script>alert('tambah maklumat berjaya');"
    ."window.location= 'index.php'</script>";
{
  ?>

<html>
    <head>
        <title>
        TAMBAH REKOD
        </title>
    </head>
    <body>
    <center>
        <h2>TAMBAH REKOD BARANGAN DAN HARGA</h2>
        <fieldset>
            <form action="add.php" method="post" name="name1">
                <table width="25%" border="0">
                    <tr>
                        <td>Nama Produk</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input type="text" name="harga"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="Submit" value="Add"></td>
                    </tr>
                </table>
            </form>
            <BR><a href="index.php">Kembali ke halaman utama</a>
        </fieldset>
    </center>
<?php
}
?>
    </body>
</html>
