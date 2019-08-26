<html>

<head>

</head>

<body>
    <?php

    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nasabah";

    // create connection
    $rek = $_POST['txtrek'];
    $pin = $_POST['txtpin'];
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    }
    $sql = "SELECT * FROM datanasabah";
    $result = $conn->query($sql);
    $loginsuccess = false;
    $row = $result->fetch_assoc();
    while (($row) && (!$loginsuccess)) {
        if (($rek == $row['no_rek']) && ($pin == $row['pin'])) {
            $loginsuccess = true;
        } else {
            $row = $result->fetch_assoc();
        }
    }
    if ($loginsuccess) {
        session_start();
        $_SESSION['no_rek'] = $rek;
        $_SESSION['pin'] = $pin;
        $_SESSION['tipe_pengguna'] = $row['tipe_pengguna'];
        if ($_SESSION['tipe_pengguna'] == 2) {
            $sql = "SELECT * FROM datanasabah WHERE no_rek='" . $rek . "';";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $_SESSION['no_rek'] = $row['no_rek'];
            Redirect('halamannasabah.php', false);
        } else {
            Redirect('halamanadmin.php', false);
        }
        // header("location:indexdb.html");
    } else {
        echo 'Username atau Password Anda Salah!!';
    }




    ?>
</body>

</html>