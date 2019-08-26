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
            <h2>DATA NASABAH</h2>
            <ol>
                <li><a href="tampildatanasabah.php">View Data Nasabah</a></li>
                <li><a href="inputdatanasabah.php">Input Data Nasabah</a></li>
                <li><a href="editdatanasabah.php">Edit Data Nasabah</a></li>
                <li><a href="hapusdatanasabah.php">Delete Data Nasabah</a></li>
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