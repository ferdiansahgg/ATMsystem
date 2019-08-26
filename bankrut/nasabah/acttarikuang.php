<?php
session_start();
?>

<?php
if (isset($_SESSION["no_rek"])) {
    if ($_SESSION["tipe_pengguna"] == 2) {
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penarikan Tunai</title>
</head>

<body>
    <?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nasabah";
    // create connection
    $saldo = $_POST['txttarik'];
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    } else {


        $sql = "UPDATE datanasabah SET saldo=saldo - '".$saldo."' WHERE no_rek='".$_SESSION["no_rek"]."';";
        if ($conn->query($sql) === TRUE) {
            echo "Anda menarik saldo sebesar : ". $saldo. "<br>";
            
        } else {
            echo "Error" . $sql . "<br>" . $conn->error;
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