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
        <h1>Data Pasien</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Tanggal Berobat</th>
      <th scope="col">Alamat</th>
      <th scope="col">Keluhan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($all_data_tamu as $tamu): ?>
        <tr>
            <td><?= $tamu->nama_pasien ?></td>
            <td><?= $tamu->tgl_berobat ?></td>
            <td><?= $tamu->alamat ?></td>
            <td><?= $tamu->keluhan ?></td>
            <td><a href="<?= base_url('edit_data_Pasien').'/'. $tamu->id ?>" class="btn btn-info btn-sm">Edit</a> <a href="<?= base_url('delete_data_Pasien').'/'. $tamu->id ?>" class="btn btn-info btn-sm">Delete</a></td>
        <?php endforeach ?>
  </tbody>
</table>
<br>
<a href="<?= base_url('add_data_Pasien') ?>" class="btn btn-primary">+ Tambah Data Tamu</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>