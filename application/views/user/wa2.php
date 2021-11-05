<div class="container" style="color: black;">
    <h4>Kirim Pesan ke Sopir</h4>
    <?php echo $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-6">
            <form action="user/send" method="post" target="_blank">


                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea class="form-control" name="message" rows="3"></textarea>
                </div>
                <input type="hidden" name="noWa" value="6287866786305">
                <button type="submit" name="submit" class="btn btn-success mb-5">Kirim</button>
            </form>


        </div>

        < / div>
          
  </d iv>