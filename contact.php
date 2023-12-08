<?php
$is_page = 'is_contact';
session_start();
include_once 'resources/db_connection.php';
include_once 'resources/insert.php';
include_once 'header.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<main class="d-flex flex-column align-items-center justify-content-center gap-3" style="height: 80vh;">
    <div>
        <h2>Contacts</h2>
        <hr>
    </div>
    <div class="container d-flex justify-content-end">
        <button type="button"
            class="btn btn-primary text-white mb-1 ml-3 py-2 px-4 border-0 d-flex justify-content-center align-items-center"
            data-bs-toggle="modal" style="background: #FF6700;" data-bs-target="#exampleModal"">Add<svg axmlns="
            http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
        </button>
    </div>
    <div class="container d-flex justify-content-center p-0 contact-list"
        style="height: 325px; overflow: auto; padding: 0 28px;">
        <table class="table table-bordered">
            <thead class="thead text-white" style=" background: #004E98; position: sticky; top: 0px;">
                <tr>
                    <th class="col-0" scope="col">#</th>
                    <th class="col-2" scope="col">first name</th>
                    <th class="col-2" scope="col">last name</th>
                    <th class="col-2" scope="col">phone number</th>
                    <th class="col-3" scope="col">email</th>
                    <th class="col-3" scope="col">short-description</th>
                    <th class="col-0" scope="col">Controls</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'resources/show.php';
                ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
</main>

<?php

include_once 'footer.php';

?>