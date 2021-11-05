<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="container">
        <br>


        <div class="container">
            <div class="row">
                <div class="col-12" style="color: black;">
                    <h1 class="text-center">Ta'ziah Ma'had</h1>
                    <h4 class="text-center">Data Undangan yang Masuk</h4>
                    <?php echo $this->session->flashdata('pesan'); ?>
                    <form action="<?php echo site_url('menu/skeyword'); ?>" method="post">
                        <input type="text" name="title">
                        <input type="submit" name="submit" value="Search" style="color:green">
                    </form>
                    <div id="result"></div>
                    <table class="table" style="color: black;">
                        <thead>
                            <br>

                            <tr>
                                <th scope="col"></th>
                                <th scope="col" style="width: 200px;">Nama Lengkap</th>
                                <th scope="col" style="width: 150px;">Desa Tujuan</th>
                                <th scope="col" style="width: 230px;">Tanggal Ta'ziah</th>
                                <th scope="col" style="width: 200px;">Jumlah Mobil</th>

                                <th scope="col" style="width: 250px;" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
							$no = 1;

							foreach ($list_nama2 as $item) { ?>

                            <tr class="table-secondary">
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $item->nama ?></td>
                                <td><?= $item->nohp ?></td>
                                <td><?= date('d-m-Y', strtotime($item->tgllahir)) ?></td>
                                <td><?= $item->jurusan ?></td>

                                <td>

                                    <a href="<?php echo base_url('/user/delete/' . $item->id) ?>" class="btn btn-danger"
                                        onclick="return confirm('Hapus data ini!')">Delete</a>
                                    <a href="<?php echo base_url('/user/wa/' . $item->id) ?>"
                                        class="btn btn-primary">Kirim
                                        Pesan</a>

                                </td>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                </td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md">
                    <button onclick="window.print()" class="btn btn-outline-success shadow float-right">Print<i
                            class="fa fa-print"></i></button>
                </div>
                <div class="col-0">

                </div>
            </div>

        </div>



    </div>

</div>



<!-- /.container-fluid -->





















</div>













<!-- End of Main Content -->