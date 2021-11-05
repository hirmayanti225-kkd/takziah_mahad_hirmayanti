<div class="container-fluid px-4">
    <h1 class="mt-4 text-center"><b>Ta'ziah Ma'had</b></h1>
    <h2 class="mt-4 text-center mb-5"><b>Data Undangan Ta'ziah yang Masuk</b></h2>


    <div class="row">
        <div col-lg-12 col-md-12>
            <?= $this->session->flashdata('msg') ?>
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-8">
                    <form action="<?php echo site_url('menu/skeyword'); ?>" method="post">
                        <h4> <input type="text" name="title">
                            <input type="submit" name="submit" value="Search" style="color:green">
                        </h4>
                    </form>
                    <div class="card-shadow">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 35px;">
                                            <h4>No.</h4>
                                        </th>
                                        <th style="width: 150px;">
                                            <h4>Nama barang</h4>
                                        </th>
                                        <th style="width: 180px;">
                                            <h4>Desa Tujuan</h4>
                                        </th>
                                        <th style="width: 200px;">
                                            <h4>Tanggal Ta'ziah</h4>
                                        </th>
                                        <th style="width: 100px;">
                                            <h4>Jumlah</h4>
                                        </th>
                                        <th style="width: 150px;">
                                            <h4 class="text-center">Aksi</h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 1 ?>
                                    <?php foreach ($barang as $data) : ?>
                                    <tr>
                                        <td>
                                            <h4><?= $index++ ?></h4>
                                        </td>
                                        <td>
                                            <h4><?= $data['nama_barang'] ?></h4>
                                        </td>
                                        <td>
                                            <h4><?= $data['keterangan'] ?></h4>
                                        </td>
                                        <td>
                                            <h4><?= date('D, d-M-Y', $data['tanggal_dibuat']) ?></h4>
                                        </td>
                                        <td>
                                            <h4><?= $data['jumlah'] ?></h4>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('barang/hapusbarang/' . $data['id']) ?>"
                                                onclick="return confirm('Hapus data ini!');"
                                                class="btn btn-sm btn-danger m-1">
                                                <h4>Hapus</h4>
                                            </a>
                                            <a href="https://web.whatsapp.com/%F0%9F%8C%90/id"
                                                class="btn btn-sm btn-success m-1">
                                                <h4 style="width: 30px;">WA</h4>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-2">

                    </div>







       
         </div>
            </div>
        </div>
    </div>