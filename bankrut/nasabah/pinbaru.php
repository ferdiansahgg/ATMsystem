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
            <title>GANTI PIN</title>
        </head>

        <body>
            <form action="prosesubahpin.php" method="POST">
                <table>
                    <tr>
                        <td>Masukan PIN baru anda :</td>
                        <td>
                            <input type="text" name="txtpin" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Ulangi PIN baru anda :</td>
                        <td>
                            <input type="text" name="txtpin2" id="">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="INSERT" formtarget="_blank">
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