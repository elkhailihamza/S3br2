<?php
session_start();
require("db_connection.php");
require("functions.inc.php");

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $isAuthenticated = authenticateUser($conn, $email, $password);

    if ($isAuthenticated) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Authentication failed";
        echo "Email: $email<br>";
        echo "Password: $password<br>";
    }

}
