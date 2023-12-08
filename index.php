<?php
$is_page = 'is_home';
session_start();
include 'resources/db_connection.php';
include 'header.php';
?>

<main class="d-flex flex-column align-items-center justify-content-center" style="height: 55vh;">
    <div>
        <h2>Welcome, <?= $_SESSION['user'] ?>!</h2>
        <hr>
    </div>
</main>

<?php

require ('footer.php');

?>