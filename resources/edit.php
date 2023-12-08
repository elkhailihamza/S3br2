<?php
include 'db_connection.php';
session_start();
$is_page = "none";
include 'update.php';
include_once '../header.php';
?>

<?php
if (isset($_GET['id'])) {
    $rowId = $_GET['id'];
    ?>
    <div class="container align-items-center mt-5 d-flex flex-column">
        <h2 class="mr-4">Edit Contact</h2>
        <form action="" method="post" class="d-flex flex-column mt-3" style="width: 450px;">
            <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
                <div>
                    <label for="">Firstname</label>
                    <input class="form-control" style="width: 220px;" type="text" placeholder="firstname" maxlength="30"
                        name="firstname">
                </div>
                <div>
                    <label for="">Lastname</label>
                    <input class="form-control" style="width: 220px;" type="text" placeholder="lastname" maxlength="30"
                        name="lastname">
                </div>
            </div>
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <label for="">Phone-number</label>
                    <input class="form-control" style="width: 220px;" type="tel" placeholder="phonenumber" maxlength="12"
                        name="phonenumber">
                </div>
                <div>
                    <label for="">Email</label>
                    <input class="form-control" style="width: 220px;" type="email" placeholder="email" name="email"
                        maxlength="30">
                </div>
            </div>
            <label for="">Short description</label>
            <textarea style="resize: none; height: 75px;" class="form-control mb-5" name="shortdescription" maxlength="300"
                placeholder="Write a lovely short description.. "></textarea>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success w-100" name="submit" value="Submit"><a
                        class="text-white text-decoration-none" href="update.php?id=<?= $rowId ?>">Edit Contact</a></button>
            </div>
        </form>
    </div>
    <?php
} else {
    echo 'user id could not be provided!';
}
?>
</div>
<?= include_once '../footer.php' ?>