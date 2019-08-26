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
    <style>
     body {
                background-color: blue;
                background-size: cover;
            }
    </style>
   
    <title>Setor uang</title>
</head>

<body>
    <?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nasabah";
    // create connection
    $setor = $_POST['txtsetor'];
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    } else {

        $sql = "UPDATE datanasabah SET deposit='$setor' WHERE no_rek='".$_SESSION["no_rek"]."';";
        if ($conn->query($sql) === TRUE) {
            echo "Anda menambahkan saldo sebesar : ". $setor. "<br>";
            echo "Cek saldo akhir anda : <form action='actsetoruangtambah.php' method='POST'><input type='submit' value='CEK' formtarget='_blank>' </form>";
            echo "";
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