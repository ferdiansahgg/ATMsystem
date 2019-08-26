<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color:blue;
            background-size: cover;
        }

        .padding {
            padding-bottom: 250px;
        }

        label {
            color: white;
        }
    </style>
</head>

<body>
    <label for=""></label>
    <div class="padding">
    </div>
    <form action="login.php" method="post">
        <center>
            <table border="1" cellpadding="5">
                <tr>
                    <td> <label for="">Silahkan Masukan Nomer Rekening Anda :</label> </td>
                    <td><input type="text" name="txtrek"></td>
                </tr>
                <tr>
                    <td><label for="">Silahkan Masukan Nomer PIN Anda :</label></td>
                    <td><input type="password" name="txtpin"></td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Login" name="btnlogin">
        </center>
    </form>
</body>

</html>
