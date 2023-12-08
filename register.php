<?php
include_once 'resources/reg_navbar.php';
?>
<main class="container d-flex justify-content-center" style="height: 75vh;">
    <div class="w-50 d-flex flex-column justify-content-center align-items-center rounded border-1" style="background: #004E98; height: 550px;">
        <h2 class="text-white mt-2 mb-4">Register</h2>
        <form action="./resources/signup.inc.php" method="POST" class="d-flex flex-column align-items-center" style="width: 325px; height: 300px; margin-top: 20px;">
            <input class="form-control" type="text" placeholder="username" name="username" maxlength="30" required>
            <input class="form-control mt-3" type="text" placeholder="password" name="password" maxlength="40" required>
            <input class="form-control mt-3" type="email" placeholder="email" maxlength="50" name="email" required>
            <div class="d-flex flex-column text-white align-items-center mb-4" style="width: 320px;">
                <select class="mt-3 mb-2 w-75 border-0" style="outline: none; height: 30px;" name="gender" aria-placeholder="gender" required>
                    <option value="" disabled selected hidden>Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <div style="width: 325px;">
                    <input type="checkbox" required>
                    <label for="" class="ml-1" style="padding-top: 5px;">Yes, I agree with <a href="" style="color: #FF6700;">terms&services</a>.</label>
                </div>
            </div>
            <button type="submit" style="background: #FF6700;" class="btn px-4 py-2 text-white" name="submit" value="Submit">sign-up</button>
        </form>
        <div class="d-flex flex-column text-white mt-3" style="width: 325px;">
            <p>Already have an account? <a href="login.php" style="color: #FF6700;">sign-in</a> now.</p>
        </div>
    </div>
</main>
</body>

<script href="js/script.js"></script>

</html>