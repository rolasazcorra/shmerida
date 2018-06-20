

<section class="section">
    <div class="container">
    <h1 data-appear-animation="fadeInLeft"> <span class="fa fa-briefcase text-grey"></span> <strong>Job </strong> Openings</h1>
    <hr>

    <?php 
    //if don´t have openings
    if(count($openings)>0){?>
    <?php
    foreach($openings as $opening) : ?>
    <div class="section introText">   
        <h4 data-appear-animation="fadeInRight"><strong><a href="<?php echo base_url();?>index.php/principal/careerinfo/<?php echo $opening['id'];?>">

         <?php echo $opening['title'];?></a> </strong></h1>
        <p data-appear-animation="fadeInRight" class="introText">Mérida,Yucatán,México</p>
    </div>
    <hr>
    <?php endforeach;?>
    <?php } else{?>
        <div class="section introText">   
            <h4 data-appear-animation="fadeInRight">
                <strong>
                    We currently have no openings.
                </strong></h1>
            <p data-appear-animation="fadeInRight" class="introText">Follow us on <a target="blank" href="https://www.facebook.com/shmerida">Facebook</a> and <a target="blank" href="https://twitter.com/SH_Merida">Twitter</a> for upcoming positions</p>
        </div>
        <div class="section introText">   
            <h4 data-appear-animation="fadeInRight">
                <strong>
                    Actualmente no tenemos vacantes.
                </strong></h1>
            <p data-appear-animation="fadeInRight" class="introText">Siguenos en <a target="blank" href="https://www.facebook.com/shmerida">Facebook</a> y <a target="blank" href="https://twitter.com/SH_Merida">Twitter</a> para próximas vacantes</p>
        </div>
    <?php } ?>
  </div>
</section>


