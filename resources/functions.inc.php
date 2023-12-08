<?php
session_start();
function emptyregister($username, $pwd, $gender, $email)
{
    if (empty($username) || empty($pwd) || empty($gender) || empty($email)) {
        return true;
    } else {
        return false;
    }
}
function emptylogin($email, $password)
{
    if (empty($email) || empty($password)) {
        return true;
    } else {
        return false;
    }
}
function authenticateUser($conn, $email, $password)
{
    $sql = "SELECT * FROM client WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $rs_data = mysqli_stmt_get_result($stmt);

    if (!$rs_data) {
        echo "Error: " . mysqli_error($conn);
        return false;
    }

    if (mysqli_num_rows($rs_data) > 0) {
        $user_data = mysqli_fetch_assoc($rs_data);
        $hashedPwd = $user_data['pwd'];
        $password = trim($password);

        $passwordsMatch = password_verify($password, $hashedPwd);

        if ($passwordsMatch) {
            $_SESSION["email"] = $email;
            $_SESSION["userID"] = $user_data['id_user'];
            $_SESSION["user"] = $user_data['username'];
            return true;
        } else {
            echo "Password verification failed";
            return false;
        }
    } else {
        echo "No user found with email: " . $email;
        return false;
    }

}
