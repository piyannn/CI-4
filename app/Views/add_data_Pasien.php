<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CI 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Tambah Data Pasien</h1>
        <form action="<?= base_url('proses_add_Pasien') ?>" method="POST">
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Pasien</label>
  <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder=" ">
</div>
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tanggal Berobat</label>
  <input type="date" class="form-control" id="tgl_berobat" name="tgl_berobat" placeholder=" ">
</div>
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Alamat</label>
  <input type="text" class="form-control" id="alamat" name="alamat" placeholder=" ">
</div>
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Keluhan</label>
  <input type="text" class="form-control" id="keluhan" name="keluhan" placeholder=" ">
</div>
<div class="mb-3">
    <button type="submit" class="btn-primary">Simpan</button>
</div>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>