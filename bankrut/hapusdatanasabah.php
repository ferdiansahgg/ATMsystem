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
            <style>
            body {
            color: white;
            background-color: blue;
            }
            </style>
            <title>DELETE DATA NASABAH ADMIN</title>
        </head>

            <body>
                <form action="prosesdeletenasabah.php" method="get">
                    <table>
                        <tr>
                            <td>
                                <label for="">Masukan Nomer Rekening yang akan di delete:</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="txtrek" id="">
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