<?php require APPROOT . '/views/includes/header.php'; ?> 
    

<div class="section">
<!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
            <?php flash('register_succes');?>
                <div class="row">

                <!-- register form -->
                    <div class="card card-body bg-light mt-5">
                    <h2>Login</h2>
                    
                    <p>Please fill your credentails to log in</p>

                    <form action="<?php echo URLROOT;?>/users/login" method="post">
                        <div class="form-group">
                            <label for="email">Email: <sup>*</sup></label>
                            <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid alert alert-danger' : '';?>" value="<?php echo $data['email'];?>">
                            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                        </div>

                        <div class="form-group">
                            <label for="password">Possword: <sup>*</sup></label>
                            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid alert alert-danger' : '';?>" value="<?php echo $data['password'];?>">
                            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                        </div>
                      
                        <input type="submit" value="Login" class="btn btn-success btn-block">
                   
                        <a href="<?php echo URLROOT;?>/users/register" class="btn btn-light btn-block">No account? Register</a>
                         
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

