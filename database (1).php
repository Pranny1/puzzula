<?php

$hostName = "localhost";
$dbUser = "id20643487_root";
$dbPassword = "4v5=%i(?@e>7nM[4";
$dbName = "id20643487_login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>

<!-- Read README.md to know where MySQL database password can be seen -->