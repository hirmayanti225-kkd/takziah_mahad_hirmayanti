<div class="container-fluid px-4">
    <h1 class="mt-4 text-center"><b>Notifikasi</b></h1>
    <h4 class="text-center"><b>Notifikasi data yang masuk dan yang dihapus</b></h4>

    <div class="row">

        <div col-lg-12 col-md-12>
            <?= $this->session->flashdata('msg') ?>

            <div class="container">
                <div class="row">
                    <div class="col-1">

                    </div>
                    <div class="col-10 table-secondary">
                        <div class="card-shadow">
                            <div class="card-body">
                                <a href="<?= base_url('notif/tandaisudahdibacasemua') ?>"
                                    onclick="return confirm('Tandai semua sudah dibaca')" class="btn btn-primary m-5">
                                    <h4>Tandai sudah
                                        dibaca semua</h4>
                                </a>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 35px;">
                                                <h4>No.</h4>
                                            </th>
                                            <th style="width: 200px;">
                                                <h4>Judul</h4>
                                            </th>
                                            <th style="width: 450px;">
                                                <h4>Pesan</h4>
                                            </th>
                                            <th style="width: 100px;">
                                                <h4 class="text-center">Aksi</h4>
                                            </th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $index = 1 ?>
                                        <?php foreach ($notif as $data) : ?>
                                        <tr>
                                            <td>
                                                <h4><?= $index++ ?></h4>
                                            </td>
                                            <td>
                                                <h4><?= $data['judul'] ?></h4>
                                            </td>
                                            <td>
                                                <h4><?= $data['pesan'] ?></h4>
                                            </td>

                                            <td>
                                                <?php if ($data['is_read'] == 0) : ?>
                                                <a href="<?= base_url('notif/tandaisudahdibaca/' . $data['id']) ?>"
                                                    class="btn btn-sm btn-secondary">
                                                    <h4>Tandai sudah dibaca</h4>
                                                </a>
                                                <?php else : ?>

                                                <?php endif; ?>

                                            </td>
                                            <td>
                                                <a href="<?= base_url('notif/delete/' . $data['id']) ?>"
                                                    onclick="return confirm('Hapus data ini!');"
                                                    class="btn btn-sm btn-danger m-1">
                                                    <h4>Hapus</h4>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="col-1">

                    </div>
                </div>
            </div>


















































        </div>
    </div>
</div>