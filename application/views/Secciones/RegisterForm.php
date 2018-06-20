<?php if(validation_errors()):?>
<div class="container">
    <div class="alert alert-danger alert-dismissable">
        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <?php echo validation_errors();?>
    </div>
</div>
<?php endif;?>
<div class="container">

    <div class="row dashboard">
        <div class="col-lg-6 col-lg-offset-3 register-form ">
            <h1 class="white-text text-center"><span class="fa fa-user"></span><strong > User</strong> Registration</h1>
            <?php echo form_open('users/register');?>
            <div class="form-group">
                <label><h5 class="white-text">Name</h5></label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>

            <div class="form-group">
                <label><h5 class="white-text">Email</h5></label>
                <input type="text" class="form-control" name="email" placeholder="email">
            </div>

            <div class="form-group">
                <label><h5 class="white-text">Username</h5></label>
                <input type="text" class="form-control" name="username" placeholder="username">
            </div>

            <div class="form-group">
                <label><h5 class="white-text">Password</h5></label>
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>

            <div class="form-group">
                <label><h5 class="white-text">Confirm Password</h5></label>
                <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Register</button>



            <?php echo form_close();?>
            <br>
            <h5 class="white-text">Already Registered?</h5>
            <a href="">Login Here</a>
        </div>
    </div>



</div>
