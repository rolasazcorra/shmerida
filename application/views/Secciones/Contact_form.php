<?php if(validation_errors()):?>
<div class="container">
    <div class="alert alert-danger alert-dismissable ">
        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo validation_errors();?>
    </div>
</div>
<?php endif;?>

<!-- Google Maps -->
<section class="section ">
    <div id="googlemaps" class="google-map mt-none mb-sm"></div>
</section>

<section id="contact" class="section">
    <div class="container">
        <div class="row mt-xlg">

            <div class="col-lg-6 w-100">

                <h2 class="mb-sm mt-sm text-grey">
                    <span class="fa fa-envelope"></span>
                    <strong>
                        Contact</strong>
                    Us</h2>

                <?php echo form_open('principal/email') ;?>

                <div class="form-group">

                    <label>Your name *</label>
                    <input
                        type="text"
                        value=""
                        placeholder="Please enter your name."
                        class="form-control"
                        name="nombre"
                        id="nombre"
                        required="required">

                </div>
                <div class="form-group">
                    <label>Your email address *</label>
                    <input
                        type="email"
                        value=""
                        placeholder="Please enter your email address."
                        data-msg-email="Please enter a valid email address."
                        maxlength="100"
                        class="form-control"
                        name="email"
                        id="email"
                        required="required">
                </div>

                <div class="form-group">

                    <label>Subject</label>
                    <input
                        type="text"
                        value=""
                        placeholder="Please enter the subject."
                        maxlength="100"
                        class="form-control"
                        name="asunto"
                        id="subject"
                        required="required">

                </div>

                <div class="form-group">

                    <label>Phone</label>
                    <input
                        type="text"
                        value=""
                        placeholder="Please enter your Phone Number."
                        maxlength="100"
                        class="form-control"
                        name="celular"
                        id="celular"
                        required="required">

                </div>

                <div class="form-group">

                    <label>Message *</label>
                    <textarea
                        maxlength="5000"
                        placeholder="Please enter your message."
                        rows="10"
                        class="form-control"
                        name="mensaje"
                        id="message"
                        required="required"></textarea>

                </div>
               
                    <div class="text-center">
                        <div mx-auto
                            class="g-recaptcha inline-block"
                            data-sitekey="6Ld21jYUAAAAADI9-Z7DWjAb9PqRq5cfeOpaXg8a">
                        </div>
                    </div>
                
                <br>

                <input
                    type="submit"
                    value="Send Message"
                    class="btn btn-primary btn-lg btn-block"
                    data-loading-text="Loading...">

                <?php echo form_close();?>
            </div>

            <!--End of Contact For-->
            <div class="col-lg-6 ">

                <h4 class="text-grey mt-lg ">Get in
                    <strong>Touch</strong>
                </h4>
                <p>If you have questions or comments about our website or services, please
                    contact us by phone, email or by filling out the form.</p>

                <hr>

                <h4 class="text-grey">The
                    <strong>Office</strong>
                </h4>
                <ul class="list list-icons list-icons-style-3 mt-xlg">
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <strong>Address:</strong>
                        Calle 23 #188 x 12 y 14, Col. García Ginerés, C.P. 97070, Mérida Yucatán México</li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <strong>Phone:</strong>
                        +52 (999) 406 5457</li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <strong>Email:</strong>
                        <a href="mailto:contacto@shmerida.mx">info@shmerida.mx</a>
                    </li>
                </ul>

                <hr>

                <h4 class="text-grey">Business
                    <strong>Hours</strong>
                </h4>
                <ul class="list list-icons list-dark mt-xlg">
                    <li>
                        <span class="fa fa-clock-o"></span>
                        Monday - Friday - 9am to 5pm</li>
                    <li>
                        <span class="fa fa-clock-o"></span>
                        Saturday - Sunday - Closed</li>
                </ul>

            </div>

        </div>
    </div>
</section>