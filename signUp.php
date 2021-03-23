<?php
include_once 'header.php';
?>

    <div class="container py-5">
        <div class="jumbotron w-75 mx-auto">
            <h1 class="text-center">Sign UP</h1>
            <form action="#" method="post">
                <div class="form-group row">
                    <label for="first_name" class="col-md-2 col-form-label">First Name</label>
                    <div class="col-md-10">
                        <input type="text" name="first_name" id="first_name" class="form-control my-2" required autofocus>
                    </div>
                </div>        
                <div class="form-group row">
                    <label for="last_name" class="col-md-2 col-form-label">Last Name</label>
                    <div class="col-md-10">
                        <input type="text" name="last_name" id="last_name" class="form-control mb-2" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="address" class="col-md-2 col-form-label">Address</label>
                    <div class="col-md-10">
                        <input type="address" name="address" id="address" class="form-control mb-2" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="e-mail_address" class="col-md-2 col-form-label">E-mail address</label>
                    <div class="col-md-10">
                        <input type="e-mail_address" name="e-mail_address" id="e-mail_address" class="form-control mb-2" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-md-2 col-form-label">Username</label>
                    <div class="col-md-10">
                        <input type="text" name="username" id="username" class="form-control mb-2" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="password" class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-10">
                        <input type="password" name="password" id="password" class="form-control mb-2" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="confirm_password" class="col-md-2 col-form-label">Re-type Password</label>
                    <div class="col-md-10">
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control mb-2" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block my-4" name="btn_sign_up">Sign UP</button>
            </form>
        </div>
    </div>
<?php
include_once 'footer.php';
?>