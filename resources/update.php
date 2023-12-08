<?php

$id = $_GET['id'];

if (isset($_POST['submit'])) {

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $shortdescription = $_POST['shortdescription'];
    $user_id = $_SESSION["userID"];

    if (empty($shortdescription)) {
        $shortdescription = 'No description!';
    }

    $sql = "UPDATE `contact` SET `fname`=?,`lname`=?,`phone_number`=?,`email`=?,`short_description`=?,`FK_id_user`=? WHERE id_contact = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt,"ssissii", $fname, $lname, $phonenumber, $email, $shortdescription, $user_id, $id);
    if (mysqli_stmt_execute($stmt)) {
        header('Location: ../contact.php');
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}