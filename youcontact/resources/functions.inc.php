<?php
function emptyregister($username, $pwd, $gender, $email) {
    if(empty($username) || empty($pwd) || empty($gender) || empty($email)) {
        return true;
    } else {
        return false;
    }
}
function emptylogin($email, $password) {
    if(empty($email) || empty($password)) {
        return true;
    } else {
        return false;
    }
}
function authenticateUser($conn, $email, $password)
{
    $sql = "SELECT * FROM client WHERE email = '$email'";
    $rs_data = mysqli_query($conn, $sql);

    if ($rs_data) {
        if (mysqli_num_rows($rs_data) > 0) {
            $user_data = mysqli_fetch_assoc($rs_data);
            $hashedPwd = $user_data['password'];

            if (password_verify($password, $hashedPwd)) {
                return true;
            } else {
                return false;
            }
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    return false;
}
?>