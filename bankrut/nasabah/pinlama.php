<?php
session_start();
?>

<?php
if (isset($_SESSION["no_rek"])) {
    if ($_SESSION["tipe_pengguna"] == 2) {
        ?>
<html>
<style>
   body {
    background-color: blue;
    color: white;
   }
   </style>
<body>


    <?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nasabah";
    $pin = $_POST['txtpin'];
    // create connection
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    }
    // $sql query yanga akan di eksekusi
    echo "Connect Sucessfully" . '<br>';

    $sql = " SELECT * FROM datanasabah WHERE pin ='$pin';";
    // eksekusi query didalam $strquery di db yang dibuka oleh $conn
    // hasilnya adalah tabel yang disimpan di $result
    $result = $conn->query($sql);
    // baca satu baris dari tabel $result
    // simpan hasilnya di $row
    $row = $result->fetch_assoc();
    echo 'PIN Lama anda : ' . $row['pin'];

        echo '<form method="post" action="pinbaru.php">
		<button type="submit">UBAH PIN</button>
	</form>';
    //close connection $conn->close(); , $conn = null;

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