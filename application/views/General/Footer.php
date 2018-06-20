</div>

<footer class="short" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>BE IN TOUCH</h1>
                <p><strong>Software House Mérida</strong>, Yucatán, México, is organized around a new offshoring software development concept. Programming talent is core to our business and to our clients' success. We hire for you and they work exclusively under your control.
                    <!-- <a href="<?php echo base_url();?>index.php/principal/about_us" class="btn-flat btn-xs">View More <i class="fa fa-arrow-right"></i></a></p>-->
                    <hr class="light">
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h5 class="mb-sm">Contact Us</h5>
                <span class="phone ">+52 (999) 406 5457</span>
                <p class="mb-none"><span class="fa fa-map-marker"></span> Calle 23 #188 x 12 y 14</p>
                <p class="mb-none">Col. García Ginerés, C.P. 97070</p>
                <p class="mb-none">Mérida, Yucatán, México</p>
                <ul class="list list-icons list-icons-sm">
                    <li><span class="fa fa-envelope"></span> <a href="mailto:okler@okler.net"> info@shmerida.mx</a></li>
                </ul>
                <ul class="social-icons">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/shmerida" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://twitter.com/SH_Merida" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <!--<a href="index.html" class="logo">-->
                    <img alt="SHM" class="img-responsive" src="<?php echo base_url();?>assets/img/logo-footer-sh2.png">
                    <!-- </a>-->
                </div>
                <div class="col-md-11">
                    <p>© Software House Mérida, <?php 
                    //get current year
                    echo date("Y");	
                     ?>.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Vendor -->
<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jquery-cookie/jquery-cookie.min.js"></script>

<script src="<?php echo base_url();?>assets/vendor/common/common.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/vide/vide.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url();?>assets/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?php echo base_url();?>assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url();?>assets/js/views/view.contact.js"></script>

<!-- Theme Custom -->
<script src="<?php echo base_url();?>assets/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo base_url();?>assets/js/theme.init.js"></script>

<!-- Examples -->
<script src="<?php echo base_url();?>assets/js/examples/examples.portfolio.js"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
            ga('create', 'UA-12345678-1', 'auto');
            ga('send', 'pageview');
        </script>
         -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOpppEYOWf-LoFGc26XSvNtkc4x46ASQ8"></script>
<script>
    /*
                Map Settings

                    Find the Latitude and Longitude of your address:
                        - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
                        - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

                */

    // Map Markers
    var mapMarkers = [{
        address: "Calle 23 188 x 12 y 14, García Ginerés, 97070",
        html: "<strong>Software House Mérida</strong><br>Calle 23 188 x 12 y 14, García Ginerés, 97070<br><br><a href='#' onclick='mapCenterAt({latitude: 20.986422, longitude: -89.629202, zoom: 19}, event)'>[+] zoom here</a>",
        icon: {
            image: "<?php echo base_url();?>assets/img/pin.png",
            iconsize: [64, 64],
            iconanchor: [12, 46]
        }
    }];

    // Map Initial Location
    var initLatitude = 20.986422;
    var initLongitude = -89.629202;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            draggable: (($.browser.mobile) ? false : true),
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 17
    };

    var map = $('#googlemaps').gMap(mapSettings),
        mapRef = $('#googlemaps').data('gMap.reference');

    // Map Center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }

</script>
<script>
    $(document).on('click', '.panel-heading span.clickable', function(e) {
        var $this = $(this);
        if (!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
    })

</script>

</body>

</html>
