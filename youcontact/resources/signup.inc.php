<?php
require("./db_connection.php");
require("./functions.inc.php");

if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $pwd = $_POST['password'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $timestamp = date("Y-m-d H:i:s");

        if(emptyregister($username, $pwd, $gender, $email) !== false) {
                header("location: ../register.php?=error=emptyregister");
                exit();
        }

        $sql = "SELECT email FROM client;";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
                if ($email === $row["email"]) {
                        header("location: ../register.php");

                } else {
                        $sql = "INSERT INTO client (username, pwd, email, gender, date_creation) VALUES (?, ?, ?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                                header('location: ../register.php');
                        }
                        $hashedPwd =md5($pwd);
                        mysqli_stmt_bind_param($stmt, "sssss", $username, $hashedPwd, $email, $gender, $timestamp);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_close($stmt);
                        header("Location: ../login.php");
                        exit();
                }
        }
}

