<?php
session_start();
include 'Koneksi.php';
if (isset($_SESSION['nomor_member'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
         table {
          border-collapse: collapse;
          align: center;

        }

         td,  th {
          border: 1px solid #ddd;
          padding: 8px;
          align: center;
        }

         tr:nth-child(even){background-color: #f2f2f2;}

         tr:hover {background-color: #ddd;}

         th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
          align: center;

        }
    </style>
</head>

<body id="page-top" align="center">
    <table>
        <form action="Login.php" method="POST">
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor_member" autofocus required></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="passwd" required></td>
            </tr>
            <tr>
                <td></td>

                <td><button type="submit" name="login">Submit</button></td>
            </tr>
        </form>
    </table>
</body>


</html>