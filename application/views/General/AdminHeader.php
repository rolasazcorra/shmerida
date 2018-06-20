<div class="body">
    <header id="header" class="header-narrow header-flex" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '1'}">
        <div class="header-body m-none">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a class="btn brand" href="<?php echo base_url();?>index.php/principal/dashboard ">Dashboard</a>
                            <a href="<?php echo base_url();?>" class="btn btn-success">View Site</a>

                        </div>

                    </div>
                    <div>
                        <a href="<?php echo base_url();?>index.php/users/logout" class="btn btn-success pull-right ">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>


        


    <div class="container">
        <?php if($this->session->flashdata('user_registered')):?>
        <?php echo '<p class="alert alert-success alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('user_registered').'<p/>';?>
        <?php endif;?>

        <?php if($this->session->flashdata('post_created')):?>
        <?php echo '<p class="alert alert-success alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('post_created').'<p/>';?>
        <?php endif;?>

        <?php if($this->session->flashdata('post_deleted')):?>
        <?php echo '<p class="alert alert-success alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('post_deleted').'<p/>';?>
        <?php endif;?>

        <?php if($this->session->flashdata('post_updated')):?>
        <?php echo '<p class="alert alert-success alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('post_updated').'<p/>';?>
        <?php endif;?>

        <?php if($this->session->flashdata('job_created')):?>
        <?php echo '<p class="alert alert-success alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('job_created').'<p/>';?>
        <?php endif;?>

        <?php if($this->session->flashdata('job_deleted')):?>
        <?php echo '<p class="alert alert-success alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('job_deleted').'<p/>';?>
        <?php endif;?>

        <?php if($this->session->flashdata('job_updated')):?>
        <?php echo '<p class="alert alert-success alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('job_updated').'<p/>';?>
        <?php endif;?>

        <?php if($this->session->flashdata('user_logged')):?>
        <?php echo '<p class="alert alert-success alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('user_logged').'<p/>';?>
        <?php endif;?>

        <?php if($this->session->flashdata('login_failed')):?>
        <?php echo '<p class="alert alert-danger alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('login_failed').'<p/>';?>
        <?php endif;?>

        <?php if($this->session->flashdata('logged_out')):?>
        <?php echo '<p class="alert alert-danger alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('logged_out').'<p/>';?>
        <?php endif;?>

        <?php if($this->session->flashdata('user_cant_edit')):?>
        <?php echo '<p class="alert alert-danger alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('user_cant_edit').'<p/>';?>
        <?php endif;?>


    </div>
