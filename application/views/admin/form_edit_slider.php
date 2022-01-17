<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin/administrator') ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('Slider') ?>">Data Slider</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header">
            <?= $title; ?>
        </div>
    </div>
    <div class="card-body">
        <?php foreach($data_slider as $d) : ?>
            <?php echo form_open_multipart('Slider/update'); ?>
            <div class="form-group">
                <label for="judul">Tulisan 1</label>
                <input type="text" class="form-control" id="tulisan1" name="tulisan1" placeholder="Masukan Tulisan 1" value="<?= $d->tulisan_1 ?>">
                <input type="hidden" name="id" id="id" value="<?= $d->id ?>">
                <?= form_error('tulisan1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="judul">Tulisan 2</label>
                <input type="text" class="form-control" id="tulisan2" name="tulisan2" placeholder="Masukan Tulisan 2" value="<?= $d->tulisan_2 ?>">
                <?= form_error('tulisan2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <div class="row">
                  <div class="col-sm-3">
                    <img src="<?= base_url('./uploads/slider/') . $d->gambar ?>" alt="" class="img-thumbnail">
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