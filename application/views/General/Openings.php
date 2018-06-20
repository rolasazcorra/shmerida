

<section class="section">
    <div class="container">
    <h1 data-appear-animation="fadeInLeft"> <strong>Job </strong> Openings</h1>
    <hr>
    <?php foreach($openings as $opening) : ?>
    <div class="section introText">   
        <h4 data-appear-animation="fadeInRight"><strong><a href="<?php echo base_url();?>index.php/principal/careerinfo">

         <?php echo $opening['title'];?></a> </strong></h1>
            <p data-appear-animation="fadeInRight" class="introText">Merida,Yucatàn,Mèxico</p>
        <h4>Send CV to <a href="mailto:info@shmerida.mx">info@shmerida.mx</a></h4>
    </div>
    <hr>
    <?php endforeach;?>
  </div>
</section>


