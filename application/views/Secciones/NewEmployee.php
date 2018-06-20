<div class="container mt-5 text-center ">
    <div class="row text-center"></div>
        <div class="card col-12 w-fluid mx-auto bg-dark rounded">
          
                <h5 class="text-white"><i class="fa fa-user"></i> New <strong>Team</strong> Member</h5>
          
            <div class="card-body">
            <form>
                
                <div class="form-group text-center">
                 <img src="<?php echo base_url();?>assets/img/team/t-locked.png" class="img-fluid w-50 rounded border-primary" style="border:2px solid;">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend ">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="First name" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend ">
                        <span class="input-group-text" id="basic-addon1">Last Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Position</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Developer, HR, CEO, etc." aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Office</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option>Mantix4</option>
                        <option>KReveal</option>
                        <option>SHR</option>
                        <option>Birkman</option>
                        <option>Admin Team</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                    <div class="input-group-append">
                        <button class="btn btn-primary input-group-text" id="basic-addon1"><i class="fa fa-folder-open"></i></button>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-primary btn-block" type="submit"> Add Team Member <i class="fa fa-plus"></i></button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>