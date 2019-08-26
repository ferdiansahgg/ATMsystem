<?php
session_start();
?>

<?php
if (isset($_SESSION["no_rek"])) {
    if ($_SESSION["tipe_pengguna"] == 2) {
        ?>
<html>

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
    <title>Setor Uang</title>
</head>
<body>
<form action="acttransfer.php" method="POST">
                <table>
                    <tr>
                        <td>Masukan Nomer Rekening Tujuan Anda :</td>
                        <td>
                            <input type="text" name="txtnorektujuan" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Masukan Jumlah Uang Yang Akan DiTransfer :</td>
                        <td>
                            <input type="text" name="txttransfer" id="">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="TRANSFER" formtarget="_blank">
            </form>
    
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