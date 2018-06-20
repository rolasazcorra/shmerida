<?php if(validation_errors()):?>
<div class="container">
    <div class="alert alert-danger alert-dismissable ">
        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo validation_errors();?>
    </div>
</div>
<?php endif;?>
<!-- <div class="container">
    <div class="row">
        <div class="col-lg-12 dashboard">


               
                <div class="form-group">
                    <label><h3><strong>TITLE</strong></h3></label>
                    <input type="text" class="form-control"  name="title" placeholder="Enter Title Here...">
                </div>
                <div class="form-group">
                    
                    <textarea  id="description" class="form-control" name="description" placeholder="Enter Job Description"></textarea>
                <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'description' );
            </script>
                </div>
                
                <button type="submit" class="btn btn-primary">Publish Job Opening</button>
            </form>



        </div>
    </div>
</div> -->
<div class="container  mt-2">
    <div class="row">
        <div class="col-12">
           <h3>Adding a New Job Opening</h3> 
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <?php echo form_open('dashboard/Create_job') ;?>
            <div id="demo">
                <div class="step-app">
                    <ul class="step-steps">
                        <li><a href="#step1"><small>Job Title</small></a></li>
                        <li><a href="#step2"><small>Skills Required</small></a></li>
                        <li><a href="#step3"><small>Optional Skills</small></a></li>
                        <li><a href="#step4"><small>Aditional Info</small></a></li>
                    </ul>
                    <div class="step-content">
                        <div class="step-tab-panel" id="step1">
                           
                                <h3><strong>Job Title</strong></h3>
                                <div class="form-group"> 
                                    <label>English</label>
                                    <input type="text" class="form-control" placeholder="English Job Title goes here...">
                                </div> 
                                <div class="form-group"> 
                                <label>Spanish</label>
                                <input type="text" class="form-control" placeholder="Spanish Job Title goes here...">
                                </div>
                           
                        </div>
                        <div class="step-tab-panel" id="step2">
                            
                                <h3><strong>Skills Required</strong></h3>
                                <div class="form-group">
                                <label>English</label>
                                  <textarea  id="editor" rows="10"></textarea>
                                  
                                </div>
                           
                                <div class="form-group">
                                  <label>Spanish</label>
                                  <textarea  id="editor1" rows="10"></textarea>
                                  <small id="helpId" class="text-muted">Please use bullets for the skills list</small>
                                </div>
                           
                        </div>
                        <div class="step-tab-panel" id="step3">
                        
                                <h3><strong>Optional Skills</strong></h3>
                                <div class="form-group">
                                <label>English</label>
                                  <textarea  id="editor2" rows="10"></textarea>
                                  
                                </div>
                           
                                <div class="form-group">
                                  <label>Spanish</label>
                                  <textarea  id="editor3" rows="10"></textarea>
                                  <small id="helpId" class="text-muted">Please use bullets for the skills list</small>
                                </div>
                            
                        </div>
                        <div class="step-tab-panel" id="step4">
                        <h3><strong>Aditional Info</strong></h3>
                           <div class="form-group">
                             <label>Opening Type</label>
                             <select class="form-control">
                                 <option  value="Full Time">Full Time</option>
                                 <option value="Part Time">Part Time</option>
                                 <option value="Intership">Intership</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="step-footer">
                        <div class="row">
                            <div class="col-4 text-left">
                                <button class="btn btn-primary" data-direction="prev">Previous</button>
                            </div>
                           <div class="col-4">
                                
                           </div>
                            <div class="col-4 text-right">
                                <button class="btn btn-primary" data-direction="next">Next</button>
                                <button type="submit" class="btn btn-success" data-direction="finish">Finish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
