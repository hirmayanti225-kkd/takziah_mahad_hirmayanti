<div class="container-fluid px-4">
    <h1 class="text-center" style="color: black;"><b>Selamat Datang di Ta'ziah Ma'had</b></h1>
    <h2 class="text-center"><b>Lengkapi Data dan Formulir Anda</b></h2>
    <h4 class="text-center mb-4"><b>Untuk Menikmati Layanan Kami</b></h4>
    <?php echo $this->session->flashdata('msg'); ?>

    <div class="row mt-5">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6 table-secondary">
                <div class="card-shadow">
                    <div class="card-body">
                        <form action="<?= base_url('barang/simpanbarang') ?>" method="post">
                            <h4 class="text-center">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control text-center" name="nama_barang"
                                        autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label>Desa Tujuan</label>
                                    <textarea name="keterangan" cols="30" rows="1"
                                        class="form-control text-center"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Ta'ziah</label>
                                    <input type="date" class="form-control text-center" name="tanggal_dibuat"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="Tanggal Ta'ziah">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Mobil</label>
                                    <input type="text" class="form-control text-center" name="jumlah" autocomplete="off"
                                        required>
                                </div>
                            </h4>
                            <button style="width: 100%;" class="btn btn-success" type="submit"><b>
                                    <h4><b>Simpan</b></h4>
                                </b></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3">

            </div>
        </div>

    </div>






























</div>