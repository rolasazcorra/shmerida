<?php if(validation_errors()):?>
<div class="container">
    <div class="alert alert-danger alert-dismissable ">
        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo validation_errors();?>
    </div>
</div>
<?php endif;?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 dashboard">

          
           <?php echo form_open('principal/update_job') ;?>
             <input type="hidden" name="id" value="<?php echo $openings['id'];?>">
                <div class="form-group">
                    <label><h1 class="white-text"><strong>TITLE</strong></h1></label>
                    <input type="text" class="form-control"  name="title" placeholder="Enter Title Here..." Value="<?php echo $openings['title'];?>">
                </div>
                <div class="form-group">
                    
                    <textarea  id="description" class="form-control" name="description" placeholder="Enter Job Description" ><?php echo $openings['description'];?></textarea>
                <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'description' );
            </script>
                </div>
                 <a href="<?php echo base_url();?>index.php/principal/jobs" class="btn btn-warning "><span class="fa fa-arrow-circle-left"></span><strong> Go Back</strong></a>
                <button type="submit" class="btn btn-primary">Update Job Opening</button>
            <?php echo form_close();?>



        </div>
    </div>
</div>