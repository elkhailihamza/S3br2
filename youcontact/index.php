<?php
include_once 'resources/db_connection.php';
include_once 'header.php';
include 'resources/insert.php';
?>

<main class="d-flex flex-column align-items-center justify-content-center" style="height: 70vh;">
    <div class="mb-3">
        <h2>Welcome, !</h2>
    </div>
    <div class="container d-flex justify-content-end">
        <button type=" button" class="btn btn-primary text-white mb-1 ml-3 py-2 px-4 border-0 d-flex justify-content-center align-items-center" style="background: #FF6700;" data-toggle="modal" data-target="#exampleModalLong">Add<svg axmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg></button>
    </div>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center " id="exampleModalLongTitle">Create Contact <svg class="mt-1 ml-1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg></h5>
                    <button style="outline: none;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" class="d-flex flex-column" action="">
                        <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
                            <div>
                                <label for="">Firstname</label>
                                <input class="form-control" style="width: 220px;" type="text" placeholder="firstname" maxlength="30" name="firstname" required>
                            </div>
                            <div>
                                <label for="">Lastname</label>
                                <input class="form-control" style="width: 220px;" type="text" placeholder="lastname" maxlength="30" name="lastname" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <label for="">Phone-number</label>
                                <input class="form-control" style="width: 220px;" type="tel" placeholder="phonenumber" maxlength="12" name="phonenumber" required>
                            </div>
                            <div>
                                <label for="">Email</label>
                                <input class="form-control mb-3" style="width: 220px;" type="email" placeholder="email" name="email" maxlength="30" required>
                            </div>
                        </div>
                        <label for="">Short description</label>
                        <textarea style="resize: none; height: 75px;" class="form-control " name="shortdescription" maxlength="300" placeholder="Write a lovely short description.. "></textarea>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary border-0" name="insertsubmit" value="Submit" style="background: #FF6700;">Create Contact</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center p-0 contact-list" style="height: 325px; overflow: auto; padding: 0 28px;">
        <table class="table">
            <thead class="thead text-white" style=" background: #004E98;">
                <tr>
                    <th class="col-0" scope="col">#</th>
                    <th class="col-2" scope="col">first name</th>
                    <th class="col-2" scope="col">last name</th>
                    <th class="col-2" scope="col">phone number</th>
                    <th class="col-3" scope="col">email</th>
                    <th class="col-3" scope="col">short-description</th>
                    <th class="p-0" scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'resources/show.php';
                ?>
            </tbody>
        </table>
    </div>
</main>

<?php

include_once 'footer.php';

?>