<section class="teknologi">
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    foreach ($kategori as $k) :
                        $nama_kategori = $k->nama;
                        $nama_product = $k->nama_product;

                    ?>
                        <h2><?= $nama_kategori; ?></h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><?= $nama_kategori; ?></li>
                        </ul>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-Teknologi" id="section-Teknologi">
    <div class="small-container">
        <h2 class="title"><?= $nama_kategori; ?> Products</h2>
    <?php endforeach; ?>
    <div class="baris">
        <div class="kolom-4">
            <div class="kartu">
                <img src="" alt="">
            </div>
            <h4><?= $nama_product; ?></h4>
            <div class="rating">
                <h6><?= $p->deskripsi; ?></h6>
            </div>
        </div>
    </div>
    </div>
</section>