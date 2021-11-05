<div class="container">
    <?= form_open('user/sendmail') ?>

    <table>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" placeholder="Email"></td>
        </tr>
        <tr>
            <td>Subject</td>
            <td>:</td>
            <td><input type="text" name="subject" placeholder="Subject"></td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>:</td>
            <td><textarea name="pesan" cols="30" rows="10" placeholder="Pesan"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit_email" value="Kirim"></td>
        </tr>
    </table>
    <?= form_close() ?>
</div>
