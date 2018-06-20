<!-- style -->

<?php $this->load->view('General/Head'); ?>
<!--Body Starts Here-->
<?php $this->load->view('General/Header_2'); ?>

<?php $this->load->view('General/Slider-2s'); ?>


<br>
<!--Content-->
              <!-- Nav tabs -->
              <div class="card">
                 <ul class="nav nav-tabs text-center" role="tablist">
                    <li class="col-xs-12 col-md-4 active" role="presentation" class="active"><a href="<?php echo base_url();?>index.php/principal/careers" aria-controls="careersOp">CAREERS OPENINGS</a></li>
                    <!--<li class="col-xs-12 col-md-4" role="presentation" ><a href="#careers" aria-controls="careers" role="tab" data-toggle="tab">CAREERS</a></li>-->
                      <li class="col-xs-12 col-md-4" role="presentation"><a href="#offer" aria-controls="offer" role="tab" data-toggle="tab">WHAT WE OFFER</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="careers">
                      
                    </div>

                    <div role="tabpanel" class="tab-pane active" id="careersOp">
                        <div class="panel panel-default">
                        	<div data-appear-animation="fadeInRight" class="panel-heading">  <h1><strong><?php echo $openings['title']?></strong></h1>	
            				</div>
            				<div class="panel-body">
            					<?php echo $openings['description'] ?>
            				<h4>Send CV to <a href="mailto:info@shmerida.mx">info@shmerida.mx</a></h4>
            					</div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="offer">
                         <?php $this->load->view('Secciones/CareersText'); ?>
                        <?php $this->load->view('Secciones/CareersOffer'); ?>
                    </div>
                </div>
            </div>

            

<?php $this->load->view('General/Footer'); ?>
<!-- style -->
<style type="text/css">

.nav-tabs { border-bottom: 2px solid #eee; /* background-color: #333;*/ }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { 
        border-width: 0 !important; 
        background-color: #1376bc !important; 
    }
    .nav-tabs > li > a { 
        border: none ; 
        color: #fff !important; 
        background: #333 !important;
    }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { 
            border: none;
             color: #fff !important; 
             background: #1376bc !important; }
        .nav-tabs > li > a::after { 
            content: ""; 
            background: #4285F4 !important; 
            height: 2px; 
            position: absolute; 
            width: 100%; 
            left: 0px; 
            bottom: -1px; 
            transition: all 250ms ease 0s; 
            transform: scale(0); 
        }

    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0% !important; color: #fff !important; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}

.card {background: #FFF none repeat scroll 0% 0% !important; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
.panel-body {
    color: #fff;
    background-color: #2f2f2f00 !important;
}
</style>