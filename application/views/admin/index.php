<!-- Begin Page Content -->
<div class="container-fluid">

    <a href="<?= base_url('Admin/edit') ?>" class="btn btn-primary mb-2">Edit Data</a>
    <?= $this->session->flashdata('message'); ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $profile; ?></h1>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img class="card-img" src="<?= base_url('./uploads/profile/') . $admin['image']; ?>" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $admin['name']; ?></h5>
                    <p class="card-text"><?= $admin['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Administrator Since <?= date('d F Y', strtotime($admin['date_created'])) ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->