<div class="container mt-5 text-center ">
    <div class="row text-center"></div>
        <div class="card col-12 w-fluid mx-auto bg-dark rounded">
          
                <h5 class="text-white text-capitalize"><i class="fas fa-handshake"></i> New <strong>Client</strong></h5>
          
            <div class="card-body">
            <form>
                
                <div class="form-group text-center">
                 <img src="<?php echo base_url();?>assets/img/clients/generic.jpg" class="img-fluid w-50 rounded border-primary" style="border:2px solid;">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend ">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Company Name" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend ">
                        <span class="input-group-text" id="basic-addon1">Slogan</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Slogan" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Description</span>
                    </div>
                    <textarea class="form-control" aria-label="With textarea" placeholder="Company Description"></textarea>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Website</span>
                    </div>
                    <input type="text" class="form-control" placeholder="http://..." aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                    <div class="input-group-append">
                        <button class="btn btn-primary input-group-text" id="basic-addon1"><i class="fa fa-folder-open"></i></button>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-primary btn-block" type="submit"> Add Client <i class="fa fa-plus"></i></button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>