            </div>
            
            <footer class="short" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h1>BE IN TOUCH</h1>
                            <p><strong>Software House Mérida</strong>, Yucatán, México, is organized around a new nearshoring software development concept. Programming talent is core to our business and to our clients' success. We hire for you and they work exclusively under your control. <a href="<?php echo base_url();?>index.php/principal/about_us" class="btn-flat btn-xs">View More <i class="fa fa-arrow-right"></i></a></p>
                            <hr class="light">
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                            <h5 class="mb-sm">Contact Us</h5>
                            <span class="phone">+52 (999) 406 5457</span>
                            <p class="mb-none">Calle 23 #188 x 12 y 14</p>
                            <p class="mb-none">Col. García Ginerés, C.P. 97070</p>
                            <p class="mb-none">Mérida, Yucatán, México</p>
                            <ul class="list list-icons list-icons-sm">
                                <li><i class="fa fa-envelope"></i> <a href="mailto:okler@okler.net">contacto@shmerida.mx</a></li>
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
                                <a href="index.html" class="logo">
                                    <img alt="SHM" class="img-responsive" src="<?php echo base_url();?>assets/img/logo-footer-sh2.png">
                                </a>
                            </div>
                            <div class="col-md-11">
                                <p>© Software House Mérida, 2017.</p>
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
        <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/common/common.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/jquery.validation/jquery.validation.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/isotope/jquery.isotope.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/vide/vide.min.js"></script>
        
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

        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
        <script>

            /*
            Map Settings

                Find the Latitude and Longitude of your address:
                    - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
                    - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

            */

            // Map Markers
            var mapMarkers = [{
                address: "217 Summit Boulevard, Birmingham, AL 35243",
                html: "<strong>Alabama Office</strong><br>217 Summit Boulevard, Birmingham, AL 35243<br><br><a href='#' onclick='mapCenterAt({latitude: 33.44792, longitude: -86.72963, zoom: 16}, event)'>[+] zoom here</a>",
                icon: {
                    image: "img/pin.png",
                    iconsize: [26, 46],
                    iconanchor: [12, 46]
                }
            },{
                address: "645 E. Shaw Avenue, Fresno, CA 93710",
                html: "<strong>California Office</strong><br>645 E. Shaw Avenue, Fresno, CA 93710<br><br><a href='#' onclick='mapCenterAt({latitude: 36.80948, longitude: -119.77598, zoom: 16}, event)'>[+] zoom here</a>",
                icon: {
                    image: "img/pin.png",
                    iconsize: [26, 46],
                    iconanchor: [12, 46]
                }
            },{
                address: "New York, NY 10017",
                html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
                icon: {
                    image: "img/pin.png",
                    iconsize: [26, 46],
                    iconanchor: [12, 46]
                }
            }];

            // Map Initial Location
            var initLatitude = 37.09024;
            var initLongitude = -95.71289;

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
                zoom: 5
            };

            var map = $('#googlemaps').gMap(mapSettings),
                mapRef = $('#googlemaps').data('gMap.reference');

            // Map Center At
            var mapCenterAt = function(options, e) {
                e.preventDefault();
                $('#googlemaps').gMap("centerAt", options);
            }

            // Styles from https://snazzymaps.com/
            var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

            var styledMap = new google.maps.StyledMapType(styles, {
                name: 'Styled Map'
            });

            mapRef.mapTypes.set('map_style', styledMap);
            mapRef.setMapTypeId('map_style');
        </script>

    </body>
</html>