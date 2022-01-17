<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin/C_home') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header">
            <?= $title; ?>
        </div>
    </div>
    <div class="card-body">
        <?php echo form_open_multipart('Kategori/tambah'); ?>
        <div class="form-group">
            <label for="judul">Nama Kategori</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Kategori" value="<?= set_value('tulisan1') ?>">
            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input class="form-control" type="file" name="gambar" id="gambar">
        </div>
        <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?php echo form_close(); ?>

    </div>
</div>