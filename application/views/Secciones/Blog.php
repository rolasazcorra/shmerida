<div class="container">
    <div class="row">
   
        <div  class="col-lg-12 post-container">
            
        
                <?php foreach($posts as $post) : ?>

                <h2>
                    <strong> <?php echo $post['title'];?> </strong>
                </h2>
                <small>Posted on: <?php echo $post['created_at'];?> </small>
                <p>
                    <?php echo $post['body'];?>

                </p>
                <a class="btn btn-primary pull-right" href="<?php echo site_url('/principal/news/'.$post['slug']);?>">Read More</a>
                <br>
                <br>
                <br>


                <?php endforeach;?>
     
            <div class="pagination-link">
                <?php echo $this->pagination->create_links();?>
            </div>
        </div>


    </div>

</div>
