<!-- sliders -->
<div class="slider mb-4">
    <ul class="slides">
        <li>
            <img src="<?php echo base_url() ?>assets/img/request/request.jpg"> <!-- random image -->
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
                <form class="form-contact contact_form" action="javascript;" method="post" id="formRequest" novalidate="novalidate">
                    <div class="row">
                        <input id="tanggal_request" name="tanggal_request" type="hidden" value="<?= date('Y-m-d') ?>" class="validate">
                        <input id="id_user" name="id_user" type="hidden" value="<?= $this->session->userdata('id_user') ?>" class="validate">
                        <div class="input-field col s12">
                            <input id="nama_request_resep" name="nama_request_resep" type="text" class="validate">
                            <label for="password">Nama Menu Mu</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group textarea">
                                <textarea class="form-control w-100" name="pesan" id="pesan" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Deskripsi Menu"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3 send">
                        <button type="submit" class="button button-contactForm boxed-btn" id="submit_request">
                            <h5 class="text-center">Request</h5>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="<?= base_url() ?>js/F_request.js"></script>
<!-- ================ contact section end ================= -->