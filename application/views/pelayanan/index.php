<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="container" style="background-color: darkgrey;">
        <br>

        <h1 class="text-center" style="color: black;">Selamat Datang di Ta'ziah Ma'had</h1>
        <div class="container">
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-6" style="color: black;">

                    <h4 class="text-center">Lengkapi Data dan Formulir Anda</h4>
                    <p class="text-center">Untuk Menikmati Layanan Kami</p>
                    <form class="text-center" method="post" action="<?= base_url('user/create2') ?>">
                        <div class="form-group mt-3">
                            <label class="text-center" for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="text" class="form-control text-center" name="nama" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Desa Tujuan</label>
                            <input type="text" class="form-control text-center" name="nohp" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Desa">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Ta'ziah</label>
                            <input type="date" class="form-control text-center" name="tgllahir" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Tanggal Ta'ziah">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Mobil</label>
                            <input type="text" class="form-control text-center" name="jurusan" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Jumlah Mobil">
                        </div>




                        <button type="submit" class="btn btn-success btn-block mb-5">Simpan</button>
                    </form>

                </div>
                <div class="col-3">

                </div>
            </div>
        </div>

    </div>



</div>
<!-- /.container-fluid -->

</div>
































































<!-- End of Main Content -->