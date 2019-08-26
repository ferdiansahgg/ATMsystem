<?php
session_start();
?>


<?php
if (isset($_SESSION["no_rek"])) {
    if ($_SESSION["tipe_pengguna"] == 1) {
        ?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
    color: white;
    background-color: blue;
}
</style>
</head>

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
        echo ("koneksi gagal:" . $conn->error);
    } else {
        $sql = " DELETE FROM datanasabah";
        $sql = $sql . " WHERE no_rek = '" . $rek . "';";
    }
    if ($conn->query($sql) === TRUE) {
        echo "Delete Success";
    } else {
        echo "Delete Error" . $conn->error;
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