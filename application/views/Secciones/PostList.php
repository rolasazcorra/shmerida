<div class="container">

    

    <div class="row dashboard">
        <h1><span class="fa fa-newspaper-o white-text"></span><strong class="white-text"> News</strong> <a class="btn btn-success" href="<?php echo base_url();?>index.php/principal/create">Add Post</a> </h1>
         
        
    

         <a href="<?php echo base_url();?>index.php/principal/dashboard" class="btn btn-warning btn-lg"><span class="fa fa-arrow-circle-left"></span><strong> Go Back</strong></a>
        <div class="col-lg-12 posts-list scrollable">

            <div class="row  posts-list-title">
                <div class="col-lg-5 ">
                    <h5>
                        <strong><span class="fa fa-thumb-tack"></span> Post Title </strong>
                    </h5>
                </div>
                <div class="col-lg-3">
                    <h5>
                        <strong><span class="fa fa-calendar"></span> Date </strong>
                    </h5>
                </div>
                <div class="col-lg-2">
                    <h5>
                        <strong><span class="fa fa-edit"></span> Edit Post </strong>
                    </h5>
                </div>
                <div class="col-lg-2">
                    <h5>
                        <strong><span class="fa fa-trash"></span> Delete Post</strong>
                    </h5>
                </div>
            </div>

            <?php foreach($posts as $post) : ?>
            <div class="row  posts-list-element">
                <div class="col-lg-5 ">
                    <h5>
                        <strong> <?php echo $post['title'];?> </strong>
                    </h5>
                </div>
                <div class="col-lg-3">
                    <small>Posted on: <?php echo $post['created_at'];?> </small>
                </div>
                <div class="col-lg-2">
                    <?php echo form_open('principal/edit/'.$post['slug']);?>
                    <input type="submit" value="Edit" class="btn btn-primary">
                    <?= form_close(); ?>
                </div>
                <div class="col-lg-2">
                    <?php echo form_open('principal/delete/'.$post['id']);?>
                    <input type="submit" value="Delete" class="btn btn-danger">
                    <?= form_close(); ?>
                </div>
            </div>

            <?php endforeach;?>
        </div>
    </div>
</div>
