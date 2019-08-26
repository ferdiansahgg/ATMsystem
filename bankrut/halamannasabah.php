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
    
            h1,
            h2 {
                font-size: 40px;
                color: white;
            }

            li {

                font-size: 30px;
            }



            .header {
                color: white;
            }

            a {
                color: white;
            }

            body {
                background-color: blue;
                background-size: cover;
            }

            li {
                color: white;
            }
        </style>
        <title>BANK BANKRUT ADMIN</title>
    </head>

    <body>
        <div align="right" class="header">
            <a href="logout.php">LOGOUT</a>
            <center>
                <h1>BANK BANKRUT CIBITUNG</h1>
            </center>
            <hr>
        </div>


        <center>
            <h2>
                MENU
            </h2>
        </center>
        
        <div class="datanasabah">
        <center> <h2>PILIH TRANSAKSI YANG ANDA INGINKAN</h2></center>
            <ol>
                <li><a href="nasabah/tampildatanasabah2.php">View Data</a></li>
                <li><a href="nasabah/halamanubahpin.php">Ganti PIN</a></li>
                <li><a href="nasabah/setoruang.php">Setor Uang</a></li>
                <li><a href="nasabah/penarikanuang.php">Penarikan Tunai</a></li>
                <li><a href="nasabah/transferpage.php">Transfer</a></li>
            </ol>
        </div>
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