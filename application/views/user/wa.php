<div class="container" style="color: black;">
    <h4>Kirim Email ke User</h4>

    <?php echo $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-6">
            <form action="user/send" method="post" target="_blank">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>"
                            readonly>
                    </div>
                </div>


                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea class="form-control" name="message" rows="3"></textarea>
                </div>
                <input type="hidden" name="noWa" value="6287866786305">
                <button type="submit" name="submit" class="btn btn-success mb-5">Kirim</button>
            </form>


        </div>
       
 </ div>
    </div>