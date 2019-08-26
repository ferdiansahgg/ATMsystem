<?php
session_start();
?>

<?php
if (isset($_SESSION["no_rek"])) {
    if ($_SESSION["tipe_pengguna"] == 1) {
        ?>
<!DOCTYPE html>
<html>
<style>
body {
                    background-color: blue;
                    color: white;
                }
</style>

<body>

	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "nasabah";

	//ambil data dari form
	$rek = $_GET["txtrek"];

	//konek ke database
	$conn = new mysqli($servername, $username, $password, $dbname);

	//cek koneksi( tanda "-" adalah tanda dari mysqli artinya seperti titik"." pada java script)
	if ($conn->connect_error) {
		echo ("koneksi gagal:" . $conn->connect_error);
	} else {
		//$sql = query yang akan dieksekusi
		$sql = " SELECT * FROM datanasabah WHERE no_rek ='$rek';";

		//eksekusi query dalam $sql di DB yang akan dibuka oleh conn
		//hasilnya disimpan di $tblhasil
		$tblhasil = $conn->query($sql); //belum lengkap

		$row = $tblhasil->fetch_assoc();

		if ($row) {
			echo "<table>";
			echo "<form action='proseseditnasabah.php' method='get'>";

			echo "<tr> <td> Nomer Rekening </td>";
			echo "<td> <input name='txtrek' value='" . $row["no_rek"] . "'></td></tr>";
			echo "<tr> <td> Nama </td>";
			echo "<td> <input name='txtnama' value='" . $row["nama"] . "'></td></tr>";
			echo "<tr> <td> Alamat </td>";
			echo "<td> <input name='txtalamat' value='" . $row["alamat"] . "'></td></tr>";
			echo "<input type='submit' value='UPDATE' formtarget='_blank'>";
			echo "</form>";
			echo "</table>";
		} else {
			echo "Tidak ada siswa dengan No_rek " . " " . $rek;
		}
	}

	?>
</body>

</html>
<?php
        } else {
            echo 'anda tidak bisa akses kesini';
        }
    } else {
        echo 'Anda kudu <a href="index.php">login</a> dahulu !';
    }
    ?>