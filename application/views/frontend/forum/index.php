<!-- sliders -->
<div class="slider mb-4">
    <ul class="slides">
        <li>
            <img src="<?php echo base_url() ?>assets/img/slider/2.png"> <!-- random image -->
            <div class="caption center-align">
                <h3 class="white-text judul ">Forum</h3>
            </div>
        </li>
</div>
<!-- end -->

<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container" style="width:90%">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php foreach ($forums as $forum) : ?>
                        <?php
                        $tanggal = date('d-F-Y', strtotime($forum['tanggal_upload']));
                        $day = explode('-', $tanggal);

                        $jml_komentar = count($forum['tbl_komentar_posts']);
                        ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="http://localhost:3000/<?= $forum['gambar'] ?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3><?= $day[0] ?></h3>
                                    <p><?= $day[1] ?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="blog_details.html">
                                    <h2><?= $forum['headline'] ?></h2>
                                </a>
                                <?php if ($forum['deskripsi']) : ?>
                                    <p><?= $forum['deskripsi'] ?>.</p>
                                <?php endif; ?>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> <?= $forum['tbl_user']['full_name'] ?></a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> <?= $jml_komentar ?> Komentar</a></li>
                                </ul>
                            </div>
                        </article>
                    <?php endforeach; ?>

                    <ul class="pagination justify-content-center d-flex">
                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                        <li class="active"><a href="#!">1</a></li>
                        <li class="waves-effect"><a href="#!">2</a></li>
                        <li class="waves-effect"><a href="#!">3</a></li>
                        <li class="waves-effect"><a href="#!">4</a></li>
                        <li class="waves-effect"><a href="#!">5</a></li>
                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#" class="kotaksearch">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Masukan kata kunci.....' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan kata kunci.....'">
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn buttonsearch" type="submit">Cari</button>
                        </form>
                    </aside>

                    <!-- <aside class="single_sidebar_widget post_category_widget kategori">
                        <h4 class="widget_title text-start">Category</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Resaurant food</p>
                                    <p>(37)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Travel news</p>
                                    <p>(10)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Modern technology</p>
                                    <p>(03)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Product</p>
                                    <p>(11)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Inspiration</p>
                                    <p>21</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Health Care (21)</p>
                                    <p>09</p>
                                </a>
                            </li>
                        </ul>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                            <img src="assets/img/post/post_1.png" alt="post">
                            <div class="media-body">
                                <a href="blog_details.html">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="assets/img/post/post_2.png" alt="post">
                            <div class="media-body">
                                <a href="blog_details.html">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="assets/img/post/post_3.png" alt="post">
                            <div class="media-body">
                                <a href="blog_details.html">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="assets/img/post/post_4.png" alt="post">
                            <div class="media-body">
                                <a href="blog_details.html">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                    </aside>

                    <aside class="single_sidebar_widget tag_cloud_widget tag">
                        <h4 class="widget_title text-start">Tag Clouds</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">travel</a>
                            </li>
                            <li>
                                <a href="#">restaurant</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">design</a>
                            </li>
                            <li>
                                <a href="#">illustration</a>
                            </li>
                        </ul>
                    </aside> -->

                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->