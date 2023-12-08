<?php

$sql = "SELECT * FROM client WHERE id_user = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $_SESSION["userID"]);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) > 0) {
    $user_data = mysqli_fetch_assoc($result);
} else {
    echo "error";
    header("Location: ../login.php");
    exit();
}

?>

<div class="container col-6">
    <ul class="list-group">
        <li class="list-group-item active">Profile Info</li>
        <li class="list-group-item">Id: <?= $user_data['id_user']; ?></li>
        <li class="list-group-item">Username: <?= $user_data['username']; ?></li>
        <li class="list-group-item">Email: <?= $user_data['email']; ?></li>
        <li class="list-group-item">Gender: <?= $user_data['gender']; ?></li>
        <li class="list-group-item">Creation-date: <?= $user_data['date_creation']; ?></li>
    </ul>
</div>