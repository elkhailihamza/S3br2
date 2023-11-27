<?php
session_start(); 
require("db_connection.php");
require("functions.inc.php");

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $isAuthenticated = authenticateUser($conn, $email, $password);

    if ($isAuthenticated !== false) {
        $id_user = $user_data['id'];
        $_SESSION["email"] = $email;
        $_SESSION["userID"] = $id_user;

        echo "success";
        exit();
    } else {
        echo "failure";
        exit();
    }
}
