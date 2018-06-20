<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">CAREERS OPENINGS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">WHAT WE OFFER</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <?php $this->load->view('Secciones/Openings'); ?>
  </div>
  <div class="tab-pane fade mx-0" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <?php $this->load->view('Secciones/CareersText'); ?>
        <?php $this->load->view('Secciones/CareersOffer'); ?>
  </div>
  
</div>            


