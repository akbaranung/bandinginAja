<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <?php foreach ($teknologi as $t) : ?>
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Kategori Teknologi
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?= $t->jumlah ?> Product
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-laptop-code fa-2x text-gray-300"></i></i>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <?php foreach ($fashion as $t) : ?>
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Kategori Fashion
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?= $t->jumlah ?> Product
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-tshirt fa-2x text-gray-300"></i>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <?php foreach ($tamu as $t) : ?>
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pengunjung
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?= $t->jumlah ?> Orang
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">
                Welcome
            </h5>
        </div>
        <div class="card-body">
            <p style="font-size: x-large;">
                Halo <b><?= $admin['name']; ?></b> selamat datang di Control Panel kamu bisa mengelola website BandinginAja disini
            </p>
        </div>
    </div>
</div>
<!-- Content Row -->
</div>