<?php
session_start();
?>

<?php
if (isset($_SESSION["no_rek"])) {
    if ($_SESSION["tipe_pengguna"] == 1) {
        ?>
    <html>
<head>
<style>
body {
    background-color: blue;
}
td, th {
    color: white;
}
</style>
</head>
    <body>


        <?php
        $localhost = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nasabah";
        // create connection
        $conn = new mysqli($localhost, $username, $password, $dbname);
        // check connection
        if ($conn->connect_error) {
            die("Connection failed :" . $conn->connect_error);
        }
        // $sql query yanga akan di eksekusi
        echo "Connect Sucessfully" . '<br>';
        echo '<br>';
        echo '<table border="1">
            <thead>
            <tr>
            <th>No_Rek</th>
            <th>PIN</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Saldo</th>
            <th>Tipe_pengguna</th>
            </tr>
            </thead>';
        $sql = "SELECT * FROM datanasabah";
        // WHERE no_rek = '" . $_SESSION['no_rek'] . "' "
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        while ($row) {
            echo '<tr>';
            echo '<td> ' . $row['no_rek'] . ' </td>';
            echo '<td> ' . $row['pin'] . ' </td>';
            echo '<td> ' . $row['nama'] . ' </td>';
            echo '<td> ' . $row['alamat'] . ' </td>';
            echo '<td> ' . $row['saldo'] . ' </td>';
            echo '<td> ' . $row['tipe_pengguna'] . ' </td>';
            echo '</tr>';
            $row = $result->fetch_assoc();
        }
        echo  '</table>';
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