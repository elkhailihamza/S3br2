<?php

$sql = 'SELECT * FROM CONTACT WHERE FK_id_user = ?';
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt,'i', $_SESSION["userID"]);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    $id = 0;
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <tr>
            <th scope="row"><?php echo ++$id ?></th>
            <td><?php echo $row['fname'] ?></td>
            <td><?php echo $row['lname'] ?></td>
            <td><?php echo $row['phone_number'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['short_description'] ?></td>
            <td>
                <div class="d-flex gap-2">
                    <a class="mr-2" href="resources/edit.php?id=<?= $row['id_contact'] ?>"><button class="btn btn-success border-0" data-toggle="modal" data-target="#exampleModal" name="editbtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                            </svg>
                        </button></a>
                    <a href="resources/delete.php?id=<?= $row['id_contact'] ?>" class="border-0 btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg></a>
                </div>
            </td>
        </tr>

    <?php
    }
} else {
    ?>
    <tr scope="row">
        <td style="text-align: center;">empty</td>
    </tr>
<?php
}
?>