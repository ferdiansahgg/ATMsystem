<?php
session_start();
?>

<?php
if (isset($_SESSION["no_rek"])) {
    if ($_SESSION["tipe_pengguna"] == 1) {
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Admin</title>
</head>

<body>
    <?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nasabah";
    // create connection
    $rek = $_GET['txtrek'];
    $pin = $_GET['txtpin'];
    $nama = $_GET['txtnama'];
    $alamat = $_GET['txtalamat'];
    $saldo = $_GET['txtsaldo'];
    $tipe = $_GET['txttipe'];
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    } else {

        $sql = 'INSERT INTO datanasabah';
        $sql = $sql . '(no_rek,pin,nama,alamat,saldo,tipe_pengguna)';
        $sql = $sql . "VALUES('" . $rek . "',' " . $pin . " ','" . $nama . " ','" . $alamat . "' , '" . $saldo . "','" . $tipe . "');";
        if ($conn->query($sql) === TRUE) {
            echo "New Record Succesfully";
        } else {
            echo "Error" . $sql . "<br>" . $conn->error;
        }
        // $conn->close();
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