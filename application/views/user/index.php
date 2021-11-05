<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 text-gray-800 m-5" style="color:black;"><b>My Profile</b></h1>

    <div class="row">
        <div class="col-lg-12">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>

    <div class="card mb-3 ml-5" style="max-width: 540px; background-color: darkgrey; color: black">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title m-3"><b><?= $user['name']; ?></b></h3>
                    <h4 class="card-text m-3"><b><?= $user['email']; ?></b></h4>
                    <h4 class="card-text m-3"><b><?= $user['nohp']; ?></b></h4>
                    <h4 class="card-text m-3"><b><?= $user['alamat']; ?></b></h4>
                    <h4 class="card-text m-3"><small class="text-muted" style="color: black;">Member Since
                            <?= date('d F Y', $user['date_created']); ?></small></h4>
                </div>
            </div>
        </div>
    </div>

</div>
