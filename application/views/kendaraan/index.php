<div class="container">
    <div class="row">
        <div class="col-12" style="color: black;">
            <h1 class="text-center">Ta'ziah Ma'had</h1>
            <h4 class="text-center">Data Sopir (Kendaraan)</h4>

            <a href="<?php echo base_url('/user/create3') ?>" class="btn btn-success mt-4"
                style="width: 100%;">Create</a>

            <table class="table">
                <thead>
                    <br>

                    <tr>
                        <th scope="col"></th>
                        <th scope="col" style="width: 200px;">Nama Lengkap</th>
                        <th scope="col" style="width: 200px;">No HP</th>
                        <th scope="col" style="width: 200px;">Alamat</th>
                        <th scope="col" style="width: 0px;" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
					$no = 1;
					foreach ($list_nama as $item) { ?>
                    <tr class="table-primary">
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $item->nim ?></td>
                        <td><?= $item->nama ?></td>
                        <td><?= $item->jurusan ?></td>
                        <td>
                        <td>

                            <a href="<?php echo base_url('/user/delete2/' . $item->nim) ?>"
                                class="btn btn-danger">Delete</a>
                            <a href="<?php echo base_url('person/') ?>" class="btn btn-primary">Kirim Pesan</a>


                        </td>
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















































<!-- End of Main Content -->