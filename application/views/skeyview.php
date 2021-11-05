<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Ta'ziah Ma'had</h1>
    <h2 class="mt-4 text-center mb-5">Data Undangan Ta'ziah yang Masuk</h2>
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">

                <form action="<?php echo site_url('menu/skeyword'); ?>" method="post">
                    <h4>
                        <input type="text" name="title">
                        <input type="submit" name="submit" value="Search" style="color:green">
                    </h4>
                </form>
                <table class="table">
                    <thead>
                        <br>

                        <tr>
                            <th style="width: 35px;">
                                <h4>No.</h4>
                            </th>
                            <th scope="col" style="width: 150px;">
                                <h4>Nama Lengkap</h4>
                            </th>
                            <th scope="col" style="width: 180px;">
                                <h4>Desa Tujuan</h4>
                            </th>
                            <th scope="col" style="width: 200px;">
                                <h4>Tanggal Ta'ziah</h4>
                            </th>
                            <th scope="col" style="width: 120px;">
                                <h4>Jumlah Mobil</h4>
                            </th>

                            <th scope="col" style="width: 150px;" class="text-center">
                                <h4>Aksi</h4>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
						$no = 1;

						foreach ($tbl_barang as $item) { ?>

                        <tr>
                            <th scope="row">
                                <h4><?= $no++ ?></h4>
                            </th>
                            <td>
                                <h4><?= $item->nama_barang ?></h4>
                            </td>
                            <td>
                                <h4><?= $item->keterangan ?></h4>
                            </td>
                            <td>
                                <h4><?= date('d-m-Y', strtotime($item->tanggal_dibuat)) ?></h4>
                            </td>
                            <td>
                                <h4><?= $item->jumlah ?></h4>
                            </td>

                            <td>
                                <a href="#" onclick="return confirm('Hapus data ini!');" class="btn btn-sm btn-danger">
                                    <h4>Hapus</h4>
                                </a>
                                <a href="<?php echo base_url('user/wa3/') ?>" class="btn btn-sm btn-success m-1">
                                    <h4>WA</h4>
                            </td>


                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>
</div>
