<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<!-- Slide1 -->
<section class="section-slide" id="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <?php foreach ($slider as $s) : ?>
                <div class="item-slick1 item1-slick1" style="background-image: url(<?= base_url('./uploads/slider/' . $s->gambar) ?>);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 tit1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                            <?= $s->tulisan_1 ?>
                        </span>

                        <span class="caption2-slide1 txt1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            <?= $s->tulisan_2 ?>
                        </span>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!-- Intro -->
<section class="section-intro" id="section-kategori">
    <div class="content-intro bg-white p-t-77 p-b-133">
        <div class="container">
            <div class="title-section-ourmenu t-center m-b-22">
                <h3 class="tit5 t-center m-t-2">
                    Categories
                </h3>
            </div>
            <div class="row">
                <?php foreach ($kategori as $k) : ?>
                    <div class="col-md-6 p-t-30">
                        <!-- Block1 -->

                        <div class="blo1">
                            <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                                <a href="<?= base_url('Kategori_product/' . $k->nama_kategori) ?>"><img src="<?= base_url('./uploads/kategori/' . $k->img) ?>" alt="Gambar" height="400px"></a>
                            </div>
                            <div class="wrap-text-blo1 p-t-35">
                                <a href="#">
                                    <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        <?= $k->nama_kategori ?>
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
</section>

<!-- Chef -->
<section class="section-chef bgwhite p-t-115 p-b-95" id="section-about">
    <div class="container t-center">
        <span class="tit2 t-center">
            Meet Our
        </span>

        <h3 class="tit5 t-center m-b-50 m-t-5">
            Team
        </h3>

        <div class="row">
            <div class="col-md-6 col-lg-3 m-l-r-auto p-b-30">
                <!-- -Block5 -->
                <div class="blo5 pos-relative p-t-60">
                    <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                        <a href="#"><img src="<?= base_url('./assets/images/akbar.jpg') ?>" alt="IGM-AVATAR"></a>
                    </div>

                    <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                        <a href="#" class="txt34 dis-block p-b-6">
                            Akbar Anung
                        </a>

                        <span class="dis-block t-center txt35 p-b-25">
                            Backend Developer
                        </span>

                        <p class="t-center">
                            Universitas Mercu Buana - Teknik Informatika
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 m-l-r-auto p-b-30">
                <!-- -Block5 -->
                <div class="blo5 pos-relative p-t-60">
                    <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                        <a href="#"><img src="<?= base_url('./assets/images/nugraha.jpeg') ?>" alt="IGM-AVATAR"></a>
                    </div>

                    <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                        <a href="#" class="txt34 dis-block p-b-6">
                            Nugraha
                        </a>

                        <span class="dis-block t-center txt35 p-b-25">
                            Frontend Developer
                        </span>

                        <p class="t-center">
                            Universitas Mercu Buana - Teknik Informatika
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 m-l-r-auto p-b-30">
                <!-- -Block5 -->
                <div class="blo5 pos-relative p-t-60">
                    <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                        <a href="#"><img src="<?= base_url('./assets/images/edo.jpeg') ?>" alt="IGM-AVATAR"></a>
                    </div>

                    <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                        <a href="#" class="txt34 dis-block p-b-6">
                            Evandro Malsi
                        </a>

                        <span class="dis-block t-center txt35 p-b-25">
                            System Analyst
                        </span>

                        <p class="t-center">
                            Universitas Mercu Buana - Teknik Informatika
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 m-l-r-auto p-b-30">
                <!-- -Block5 -->
                <div class="blo5 pos-relative p-t-60">
                    <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                        <a href="#"><img src="<?= base_url('./assets/images/yohanes.jpeg') ?>" alt="IGM-AVATAR"></a>
                    </div>

                    <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                        <a href="#" class="txt34 dis-block p-b-6">
                            Yohanes Mikhael
                        </a>

                        <span class="dis-block t-center txt35 p-b-25">
                            Database
                        </span>

                        <p class="t-center">
                            Universitas Mercu Buana - Teknik Informatika
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Booking -->
<section class="section-booking bg1-pattern p-t-100 p-b-110" id="section-tamu">
    <div class="container">
        <div class="t-center">
            <h3 class="tit3 t-center m-b-35 m-t-2">
                Buku Tamu
            </h3>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-lg-6 p-b-30">
                <form class="wrap-form-booking" method="post" action="<?= base_url('Home/buku_tamu') ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2" style="text-align: justify;">
                                <span style="font-weight: 600;">Buku tamu ini berguna untuk memberikan sebuah saran dan kritik mengenai website kami, dan juga sebagai tanda bukti kunjungan anda. Harap diisi dengan benar dan penuh tanggung jawab. Terima Kasih.</span>
                            </div>
                            <!-- Name -->
                            <span class="txt9">
                                Name
                            </span>
                            <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nama" id="nama" placeholder="Name">
                            </div>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                            <!-- Email -->
                            <span class="txt9">
                                Email
                            </span>

                            <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
                            </div>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                            <!-- Pekerjaan -->
                            <span class="txt9">
                                Pekerjaan
                            </span>

                            <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="pekerjaan" placeholder="Pekerjaan">
                            </div>
                            <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>

                            <!-- Point -->
                            <span class="txt9">
                                Point
                            </span>

                            <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="point" placeholder="Point dari 1 - 5">
                            </div>
                            <?= form_error('pesan', '<small class="text-danger pl-3">', '</small>'); ?>

                            <!-- Pesan -->
                            <span class="txt9">
                                Pesan
                            </span>

                            <div>
                                <textarea name="pesan" id="pesan" class="text-area bo-rad-10 sizefull txt10 p-l-20"></textarea>
                            </div>
                            <?= form_error('pesan', '<small class="text-danger pl-3">', '</small>'); ?>
                            <div class="wrap-btn-booking flex-c-m m-t-6">
                                <!-- Button3 -->
                                <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                    Kirim
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 p-t-18">
                <div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="<?= base_url('images/buku tamu.jpg') ?>" alt="IMG-OUR">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Review -->
<section class="section-review p-t-115">
    <!-- - -->
    <div class="title-review t-center m-b-2">
        <span class="tit2 p-l-15 p-r-15">
            Customers Say
        </span>

        <h3 class="tit8 t-center p-l-20 p-r-15 p-t-3">
            Review
        </h3>
    </div>

    <!-- - -->

    <div class="wrap-slick3">
        <div class="slick3">
            <?php foreach ($buku_tamu as $b) : ?>
                <div class="item-slick3 item1-slick3">
                    <div class="wrap-content-slide3 p-b-50 p-t-50">
                        <div class="container">
                            <div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
                                <img src="<?= base_url('assets/images/profile/default.jpg') ?>" alt="IGM-AVATAR">
                            </div>
                            <div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
                                <div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInDown">
                                    <p class="t-center txt12 size15 m-l-r-auto">
                                        <?= $b->pesan ?>
                                    </p>
                                </div>
                                <?php if ($b->point == '1') { ?>
                                    <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                <?php } elseif ($b->point == '2') { ?>
                                    <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    </div>
                                <?php } elseif ($b->point == '3') { ?>
                                    <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                        <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    </div>
                                <?php } elseif ($b->point == '4') { ?>
                                    <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                        <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                        <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    </div>
                                <?php } else { ?>
                                    <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                        <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                        <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                        <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    </div>
                                <?php } ?>
                                <div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
                                    <?= $b->nama ?> ˗ <?= $b->pekerjaan ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
</section>