
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
    color: white;
   }
   </style>
    <title>Ganti PIN</title>
</head>

<body>
    <?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nasabah";
    // create connection
    $pin = $_POST['txtpin'];
    $pin2 = $_POST['txtpin2'];
    // $pinc= $_POST['txtconfrim'];
    $confrimpin = $pin;
    $validpinconfrim = true;
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    } else { 
        if ($pin != $pin2){
            $validpinconfrim =false ;
            echo "Password tidak sama";
        }else {
            $sql = "UPDATE datanasabah SET pin='$confrimpin' WHERE no_rek='".$_SESSION["no_rek"]."';";
            if ($conn->query($sql) === TRUE) {
                 
                echo "Pin Berhasil diubah";
            } else {
                echo "Error" . $sql . "<br>" . $conn->error;
            }
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