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
            <title>INPUT DATA NASABAH ADMIN</title>
        </head>

        <body>
            <form action="inputdata.php" method="get">
                <table>
                    <tr>
                        <td>Nomer Rekening</td>
                        <td>
                            <input type="text" name="txtrek" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>PIN</td>
                        <td>
                            <input type="text" name="txtpin" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Nasabah</td>
                        <td>
                            <input type="text" name="txtnama" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <input type="text" name="txtalamat" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Saldo</td>
                        <td>
                            <input type="text" name="txtsaldo" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Tipe Pengguna</td>
                        <td>
                            <input type="text" name="txttipe" id="">
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