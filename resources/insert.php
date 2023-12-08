<?php
if (isset($_POST['submit'])) {

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $shortdescription = $_POST['shortdescription'];

    if (empty($shortdescription)) {
        $shortdescription = 'No description!';
    }

    $sql = "INSERT INTO `contact`(`fname`, `lname`, `phone_number`, `email`, `short_description`, `FK_id_user`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssissi", $fname, $lname, $phonenumber, $email, $shortdescription, $_SESSION["userID"]);
    if (mysqli_stmt_execute($stmt)) {
        header("location: contact.php");
    }
}
?>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">Create Contact <svg class="mt-1 ml-1"
                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" class="d-flex flex-column" action="">
                    <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
                        <div>
                            <label for="">Firstname</label>
                            <input class="form-control" style="width: 220px;" type="text" placeholder="firstname"
                                maxlength="30" name="firstname" required>
                        </div>
                        <div>
                            <label for="">Lastname</label>
                            <input class="form-control" style="width: 220px;" type="text" placeholder="lastname"
                                maxlength="30" name="lastname" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <label for="">Phone-number</label>
                            <input class="form-control" style="width: 220px;" type="tel" placeholder="phonenumber"
                                maxlength="12" name="phonenumber" required>
                        </div>
                        <div>
                            <label for="">Email</label>
                            <input class="form-control mb-3" style="width: 220px;" type="email" placeholder="email"
                                name="email" maxlength="30" required>
                        </div>
                    </div>
                    <label for="">Short description</label>
                    <textarea style="resize: none; height: 75px;" class="form-control " name="shortdescription"
                        maxlength="300" placeholder="Write a lovely short description.. "></textarea>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-primary border-0" name="submit" value="Submit"
                    style="background: #FF6700;">Create Contact</button>
            </div>
            </form>
        </div>
    </div>
</div>