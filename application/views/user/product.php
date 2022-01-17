<section class="teknologi">
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Handphone</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Handphone</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-Teknologi" id="section-Teknologi">
    <div class="small-container">
        <h2 class="title">Handphone Products</h2>
        <?php foreach ($products as $p) : ?>
            <div class="baris">
                <div class="kolom-4">
                    <img src="<?= $p['img'] ?>" alt="">
                    <h4><?= $p['title'] ?></h4>
                    <div class="rating">
                        <h6><?= $p['price']; ?></h6>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>