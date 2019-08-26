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
        <title>GANTI PIN</title>
    </head>

    <body>
        <form action="pinlama.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="">Masukan PIN Lama Anda :</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="txtpin" id="">
                    </td>
                </tr>
            </table>
            <input type="submit" value="INSERT" formtarget="_blank">
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