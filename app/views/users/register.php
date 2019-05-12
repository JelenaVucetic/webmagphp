<?php require APPROOT . '/views/includes/header.php'; ?> 
    

<div class="section">
<!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">

                <!-- register form -->
                    <div class="card card-body bg-light mt-5">
                    <h2>Create An Account</h2>
                    <p>Please fill out this form to register with us</p>

                    <form action="<?php echo URLROOT;?>/users/register" method="post">
                        <div class="form-group">
                            <label for="name">Name: <sup>*</sup></label>
                            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid alert alert-danger' : '';?>" value="<?php echo $data['name'];?>">
                            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email: <sup>*</sup></label>
                            <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid alert alert-danger' : '';?>" value="<?php echo $data['email'];?>">
                            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                        </div>

                        <div class="form-group">
                            <label for="password">Possword: <sup>*</sup></label>
                            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid alert alert-danger' : '';?>" value="<?php echo $data['password'];?>">
                            <span class="help-block"><?php echo $data['password_err']; ?></span>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirim Password: <sup>*</sup></label>
                            <input type="password" name="confirm_password"  class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid alert alert-danger' : '';?>" value="<?php echo $data['confirm_password'];?>">
                            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                        </div>
                      
                        <input type="submit" value="Register" class="btn btn-success btn-block">
                   
                        <a href="<?php echo URLROOT;?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
                         
                    </form>
                    </div>

                <!-- /register form -->
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
<?php require APPROOT . '/views/includes/footer.php'; ?> 