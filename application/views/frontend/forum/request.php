<!-- sliders -->
    <div class="slider mb-4">
        <ul class="slides">
        <li>
            <img src="<?php echo base_url()?>assets/img/request/request.jpg"> <!-- random image -->
            <div class="caption center-align">
            <h3 class="white-text judul ">Request Menu</h3>
            </div>
        </li>
      </div>
<!-- end -->

<section class="contact-section">
            <div class="container request" style="width:90%">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title judul">Request Menu Mu</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                                <div class="input-field col s12">
                                <input id="request_menu" type="text" class="validate">
                                <label for="password">Nama Menu Mu</label>
                                </div>
                            </div>
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group textarea">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Deskripsi Menu"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3 send">
                                <button type="submit" class="button button-contactForm boxed-btn"><h5 class="text-center">Request</h5></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->