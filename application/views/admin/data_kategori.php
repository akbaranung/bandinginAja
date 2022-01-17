<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Front End Kategori </h1>
    <div>
        <a href="<?= base_url('Kategori/tambah') ?>" class="btn btn-primary">Tambah Data</a>
    </div>
    <br>
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    foreach ($kategori as $k) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $k->nama_kategori; ?></td>
                            <td><img src="<?= base_url('./uploads/kategori/') . $k->img; ?>" alt="" width="100"></td>
                            <td class="center">
                                <a class="btn btn-success" href="<?= base_url('Kategori/edit/' . $k->id) ?>"><i class="far fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>