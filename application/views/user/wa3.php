<div class="container" style="color: black;">
    <h1 class="mb-5"><b>Kirim Email ke User</b></h1>

    <?php echo $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-6">
            <form action="user/send" method="post" target="_blank">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">
                        <h4>Email</h4>
                    </label>
                    <div class="col-sm-10">
                        <h4><input type="text" class="form-control" id="email" name="email"
                                value="<?= $user['email']; ?>" readonly></h4>
                    </div>
                </div>

                <div class="form-group">
                    <label for="message">
                        <h4>Pesan</h4>
                    </label>
                    <textarea class="form-control" name="message" rows="3"></textarea>
                </div>
                <input type="hidden" name="noWa" value="6287866786305">
                <button type="submit" name="submit" class="btn btn-success mb-5">
                    <h4>Kirim</h4>
                </button>
            </form>
        </div>

       
 </ div>
    </div>