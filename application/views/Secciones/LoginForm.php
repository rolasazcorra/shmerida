<?php if(validation_errors()):?>
<div class="container">
    <div class="alert alert-danger alert-dismissable ">
        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo validation_errors();?>
    </div>
</div>
<?php endif;?>

<div class="container mt-5 text-center ">
    <div class="row text-center"></div>
        <div class="card col-12 w-fluid mx-auto bg-dark rounded text-light">
          
                <h2 class="text-white"><i class="fa fa-user"></i><strong> Sign in</strong></h2>
          
            <div class="card-body text-left">
            <?php echo form_open('users/login');?>
            <label><h5 class="text-white">Username</h5></label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <label><h5 class="text-white">Password</h5></label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="password" aria-label="password" aria-describedby="basic-addon1">
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Remember me
                        </label>
                </div>
               
               
                    <button type="submit" class="btn btn-primary btn-block mt-4 mb-2">Sign in</button>
              

                
            <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
