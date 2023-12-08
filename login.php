<?php
include 'resources/reg_navbar.php';
?>
<main class="container d-flex justify-content-center" style="height: 75vh;">
    <div class="w-50 d-flex flex-column justify-content-center align-items-center rounded border-1" style="background: #004E98; height: 550px;">
        <h2 class="text-white mb-5" style="margin-top: 10px;">Login</h2>
        <form action="./resources/signin.inc.php" method="POST" class="h-50 d-flex flex-column align-items-center" style="width: 325px;">
            <input class="form-control" name="email" type="text" placeholder="email..." maxlength="30" required>
            <input class="form-control mt-3 mb-5" name="password" type="text" placeholder="password..." maxlength="40" required>
            <button type="submit" style="background: #FF6700;" class="btn px-4 py-2 text-white" name="submit" value="Submit">sign-in</button>   
        </form>
        <div class="d-flex flex-column text-white" style="margin-top: -30px; width: 325px;">
            <p style="height: 10px;">Don't have an account? <a href="register.php" style="color: #FF6700;">sign-up</a> now.</p>
            <div>
                <a href="#" style="color: #FF6700;">forgot password?</a><br>
            </div>
        </div>
    </div>
</main>
</body>

</html>