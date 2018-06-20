<div class="body">
    <header id="header" class="header-narrow header-flex" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '1'}">
        <div class="header-body m-none">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">

                            <a href="<?php echo base_url();?>">
										<img alt="SH" width="auto" height="40" src="<?php echo base_url();?>assets/img/logo-default-slim-dark.png">
									</a>
                        </div>
                    </div>
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-nav header-nav-stripe">
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
                                <ul class="header-social-icons social-icons hidden-xs">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/shmerida" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-icons-twitter"><a href="http://twitter.com/SH_Merida" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                                <div class="header-nav-main header-nav-main-no-arrows header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse">
                                    <nav>
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class=" <?php echo (basename($_SERVER['PHP_SELF'])=="index")?"active ":" ";?>  ">
                                                <a href="<?php echo base_url();?>">
															Home
														</a>
                                            </li>
                                            <li class="<?php echo (basename($_SERVER['PHP_SELF'])=="about_us")?"active ":" ";?>  ">
                                                <a href="<?php echo base_url();?>index.php/pages/about_us">
															About Us
														</a>
                                            </li>

                                            <li class="<?php echo (basename($_SERVER['PHP_SELF'])=="portfolio")?"active ":" ";?>  ">
                                                <a href="<?php echo base_url();?>index.php/pages/portfolio">
                                                            Portfolio
														</a>
                                            </li>

                                            <li class="<?php echo (basename($_SERVER['PHP_SELF'])=="careers")?"active ":" ";?>  ">
                                                <a href="<?php echo base_url();?>index.php/pages/careers">
															Careers
														</a>
                                            </li>
                                           
                                            <li class="<?php echo (basename($_SERVER['PHP_SELF'])==" contact ")?"active ":" ";?>  ">
                                                <a href="<?php echo base_url();?>index.php/pages/contact">
															Contact
														</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- <ul class="nav " >
                                    <li><a class="btn"><img class="img-fluid rounded" src="<?php echo base_url();?>assets/img/icons/mx.png"></a></li>
                                    <li><a class="btn"><img class="img-fluid rounded" src="<?php echo base_url();?>assets/img/icons/us.png"></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div role="main" class="main">
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

            <?php if($this->session->flashdata('email_sent')):?>
            <?php echo '<p class="alert alert-success alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('email_sent').'<p/>';?>
            <?php endif;?>

            <?php if($this->session->flashdata('email_failed')):?>
            <?php echo '<p class="alert alert-danger alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('email_failed').'<p/>';?>
            <?php endif;?>
            
            <?php if($this->session->flashdata('recaptcha')):?>
            <?php echo '<p class="alert alert-danger alert-dismissable"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('recaptcha').'<p/>';?>
            <?php endif;?>
            
            
            
            
            
        </div>
