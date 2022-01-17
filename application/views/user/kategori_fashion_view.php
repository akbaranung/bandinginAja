<?php foreach ($kategori as $k) : ?>
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('./uploads/kategori/' . $k->img) ?>)">
        <h2 class="tit6 t-center">
            <?= $k->nama_kategori ?>
        </h2>
    </section>
<?php endforeach ?>
<section class="section-intro" id="kategori">
    <div class="content-intro bg-white p-t-77 p-b-133">
        <div class="container">
            <div class="title-section-ourmenu t-center m-b-22">
                <h3 class="tit5 t-center m-t-2">
                    Kategori Product Fashion
                </h3>
            </div>
            <form action="<?= base_url('Kategori_product/Fashion') ?>" method="get">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="custom-select" id="jenis" name="jenis">
                                <option value="">Pilih</option>
                                <?php foreach ($fashion_jenis as $t) : ?>
                                    <option value="<?= $t->jenis ?>"><?= $t->jenis ?></option>
                                <?php endforeach ?>
                            </select>
                            <div class="mt-2">
                                <button class="btn btn-primary" type="submit">Oke</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <div class="row">
                <?php foreach ($fashion as $t) : ?>
                    <div class="col-md-3 p-t-30">
                        <a href="<?= $t->url ?>">
                            <div class="card wrap-pic-blo1 bo-rad-10 hov-img-zoom" style="border: 2px solid #1473e6 ; white-space:nowrap">
                                <img class="card-img-top" src="<?= $t->img ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-center" style="font-size: medium;"><?= $t->nama ?></h5>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="card-link font-weight-bold"><?= $t->price ?></a>
                                    <a href="#" class="card-link"><img src="<?= $t->logo ?>" alt="" style="width: 75px;"></a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <br>
            <!-- <?= $this->pagination->create_links(); ?> -->
            <br>
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