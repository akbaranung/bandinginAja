<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin') ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('Admin') ?>">Kategori Product</a></li>
            <li class="breadcrumb-item"><?= $title ?></li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header">

        </div>
    </div>
    <div class="card-body">
        <?php if (validation_errors()) : ?>
            <h6 class="text-danger"><?= validation_errors(); ?></h6>
        <?php endif; ?>
        <?php echo form_open_multipart('Scrape/tambah'); ?>
        <div class="form-group">
            <label for="judul">Masukan Kata Kunci yang Akan di Scrape</label>
            <input type="text" class="form-control" id="scrape" name="scrape" placeholder="Masukan Kata Kunci">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Scrape</button>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>