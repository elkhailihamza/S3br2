<?php
if (isset($_POST['insertsubmit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $shortdescription = $_POST['shortdescription'];

    if (empty($shortdescription)) {
        $shortdescription = 'Must be a lovely person then!';
    }

    $sqlInsert = "INSERT INTO contact VALUES (NULL, '$fname', '$lname', '$phonenumber', '$email', '$shortdescription', 14)";
    if(mysqli_query($conn, $sqlInsert)) {
        header('Location: index.php');
    }
}
?>