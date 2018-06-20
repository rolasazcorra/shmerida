<div class="container">
    <div class="row">
        <div class="col-lg-12 scrollable">
    
           <h1 class="mt-3"><span class="fa fa-briefcase"></span> Careers <a class="btn btn-primary ml-4" href="<?php echo base_url();?>index.php/dashboard/create_job"><span class="fa fa-plus"></span> New Job</a> </h1>
            
              <?php foreach($openings as $opening) : ?>

                <div class="card bg-light mb-3">
                    
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $opening['title'];?></h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <small>Posted on: <?php echo $opening['created_at'];?> </small>
                    </div>
                    <div class="card-footer text-center">
                        <div <div class="row">
                            <div class="col-3">
                                <?php echo form_open('dashboard/edit_job/'.$opening['id']);?>
                                <button class="btn btn-primary" type="submit" ><span class=" fa fa-edit"></span> Edit</button>
                                <?= form_close(); ?>
                            </div>
                            <div class="col-3">
                                <?php echo form_open('dashboard/edit_job/'.$opening['id']);?>
                                <button class="btn btn-primary" type="submit" ><span class=" fa fa-eye"></span> View English</button>
                                <?= form_close(); ?>
                                
                            </div>
                            <div class="col-3">
                                <?php echo form_open('dashboard/edit_job/'.$opening['id']);?>
                                <button class="btn btn-primary" type="submit" ><span class=" fa fa-eye"></span> View Spanish</button>
                                <?= form_close(); ?>
                            </div>
                            <div class="col-3">
                                <?php echo form_open('dashboard/delete_job/'.$opening['id']);?>
                                <button class="btn btn-primary" type="submit" ><span class=" fa fa-trash"></span> Trash</button>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>



            <?php endforeach;?>
        </div>
    </div>
</div>
