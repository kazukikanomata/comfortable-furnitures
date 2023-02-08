<?php
include_once 'header.php';
?>
    <div class="container">
        <div class="jumbotron my-5 w-50 mx-auto">
            <h1 class="text-center py-2">Login</h1>
            <form action="#" method="post">
                <input type="e-mail" name="e-mail" id="e-mail" class="form-control my-2 w-75 mx-auto" placeholder="e-mail address" required>
                <input type="password" name="password" id="password" class="form-control mb-2 w-75 mx-auto" placeholder="password" required>        
                <div class="text-center">
                    <p>If you don't have account <a href="signUp.php">sign up</a> please</p>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success w-50 my-4" name="btn_login">Login</button>
                </div>
            </form>
        </div>
    </div>
<?php
include_once 'footer.php';
?>