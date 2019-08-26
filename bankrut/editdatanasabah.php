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
                    background-color: blue;
                    color: white;
                }
                </style>
                <title>Edit Data Nasabah</title>
            </head>

            <body>
            
            <center>
                <form action="editnasabah.php" method="get">
                    <table>
                        <tr>
                            <td>
                                <label for="">Masukan Nomer Rekening Nasabah :</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="txtrek" id="">
                                <input type="submit" value="INSERT" formtarget="_blank">
                            </td>
                        </tr>
                    </table>
                    
                </form>
                
            </body>

            </html>
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
