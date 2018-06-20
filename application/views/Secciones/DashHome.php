<div class="app">
    <div class="app-body">
    <?php $this->load->view('Secciones/Sidebar'); ?>

      <div class="app-content">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
          <button type="button" class="btn btn-sidebar" data-toggle="sidebar">
            <i class="fa fa-bars"></i>
          </button>

         
            <img class="navbar-brand" alt="SH" width="auto" height="30" src="<?php echo base_url();?>assets/img/logo-default-slim-dark.png">
      
          
        </nav>
        
        <div class="container-fluid">
        <?php $this->load->view('Secciones/JobList'); ?>


        </div>
      </div>
    </div>
  </div>
  

  