<?php
$id = $_GET['id'];
if (isset($_POST['editsubmit'])) {

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $shortdescription = $_POST['shortdescription'];

    $sqlUpdate = "UPDATE contact SET id_contact = '$id', fname = '$fname', lname = '$lname', phone_number = '$phonenumber', email = '$email', short_description = '$shortdescription', FK_id_user = 14 WHERE id_contact = '$id'";
    if (mysqli_query($conn, $sqlUpdate)) {
        header('Location: ../index.php');
    }
}
