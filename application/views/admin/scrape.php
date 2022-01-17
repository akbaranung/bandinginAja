<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Kategori Teknologi</h1>
    <div>
        <a href="<?= base_url('Scrape/tambah') ?>" class="btn btn-primary">Scrape Data</a>
        <a href="<?= base_url('Scrape/bersihkan') ?>" class="btn btn-danger">Bersihkan</a>
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
                            <th>Nama</th>
                            <th>Image</th>
                            <th>Url</th>
                            <th>Price</th>
                            <th>Jenis</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    foreach ($scrape as $k) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $k->nama; ?></td>
                            <td><img src="<?= $k->img; ?>" alt="" width="50"></td>
                            <td><?= $k->url; ?></td>
                            <td><?= $k->price; ?></td>
                            <td><?= $k->jenis; ?></td>
                            <td class="center">
                                <a class="text-danger" onclick="javascript : return confirm('Anda yakin akan menghapus data ini?')" href="<?= base_url('Scrape/hapus/' . $k->id) ?>"><i class="fas fa-trash"></i> Hapus</a>
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