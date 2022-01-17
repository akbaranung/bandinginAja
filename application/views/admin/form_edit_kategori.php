<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin/administrator') ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('Slider') ?>">Data Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header">
            <?= $title; ?>
        </div>
    </div>
    <div class="card-body">
        <?php foreach($data_kategori as $d) : ?>
            <?php echo form_open_multipart('Kategori/update'); ?>
            <div class="form-group">
                <label for="judul">Nama Kategori</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Kategori" value="<?= $d->nama_kategori ?>">
                <input type="hidden" name="id" id="id" value="<?= $d->id ?>">
                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <div class="row">
                  <div class="col-sm-3">
                    <img src="<?= base_url('./uploads/kategori/') . $d->img ?>" alt="" class="img-thumbnail">
                  </div>
                  <div class="col-sm-9">
                    <input class="form-control" type="file" name="gambar" id="gambar">
                  </div>
                </div>
            </div>
            <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close(); ?>
         <?php endforeach?>
    </div>
</div>