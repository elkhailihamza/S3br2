<?php
$is_page = 'is_profile';
session_start();
include 'resources/db_connection.php';
include 'header.php';
?>

<main class="d-flex flex-column align-items-center justify-content-center gap-3" style="height: 65vh;">
    <div>
        <h2>Profile</h2>
        <hr>
    </div>
    <div class="container-fluid">
        <?php
        include('resources/profileinfo.php');
        ?>
    </div>
</main>

<?php

require('footer.php');

?>