<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Front End Buku Tamu </h1>
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
                            <th>Email</th>
                            <th>Pekerjaan</th>
                            <th>Pesan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    foreach ($buku_tamu as $b) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $b->nama; ?></td>
                            <td><?= $b->email; ?></td>
                            <td><?= $b->pekerjaan; ?></td>
                            <td><?= $b->pesan; ?></td>
                            <td class="center">
                                <a class="text-danger" onclick="javascript : return confirm('Anda yakin akan menghapus data ini?')" href="<?= base_url('Buku_tamu/hapus/' . $b->id) ?>"><i class="fas fa-trash"></i> Hapus</a>
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