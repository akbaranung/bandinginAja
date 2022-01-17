<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Front End Slider </h1>
    <div>
        <a href="<?= base_url('Slider/tambah') ?>" class="btn btn-primary">Tambah Data</a>
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
                            <th>Tulisan 1</th>
                            <th>Tulisan 2</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    foreach ($slider as $k) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $k->tulisan_1; ?></td>
                            <td><?= $k->tulisan_2; ?></td>
                            <td><img src="<?= base_url('./uploads/slider/') . $k->gambar; ?>" alt="" width="100"></td>
                            <td>
                                <a class="text-success" href="<?= base_url('Slider/edit/' . $k->id) ?>"><i class="far fa-edit"></i></a>
                                <a class="text-danger" onclick="javascript : return confirm('Anda yakin akan menghapus data ini?')" href="<?= base_url('Slider/hapus/' . $k->id) ?>"><i class="fas fa-trash"></i></a>
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