<?php
    include 'db_connection.php';
    $id = $_GET['id'];
    $sqlDelete = "DELETE FROM contact WHERE id_contact = '$id'";
    if(mysqli_query($conn, $sqlDelete))
    {
        header('Location: ../contact.php');
    }
    mysqli_close($conn);
?>