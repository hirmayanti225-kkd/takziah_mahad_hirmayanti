<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>FORM UPDATE</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</head>

<body>

    <div class="container">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4 class="text-center">FORM UPDATE</h4>

                    <form method="post" action="<?= base_url('user/update/' . $item->id) ?>">
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama Lengkap" value="<?= $item->nama ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Desa Tujuan</label>
                            <input type="text" class="form-control" name="nohp" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Desa Tujuan" value="<?= $item->nohp ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Ta'ziah</label>
                            <input type="date" class="form-control" name="tgllahir" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Tanggal Ta'ziah"
                                value="<?= $item->tgllahir ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Mobil</label>
                            <input type="text" class="form-control" name="jurusan" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Jumlah Mobil" value="<?= $item->jurusan ?>">

                        </div>

                    </form>


                    <button type="submit" class="btn btn-success btn-block">Update</button>
                </div>
                <div class="col-6"></div>



       
     </div>


        </div>

    </div>
</body>

</html>