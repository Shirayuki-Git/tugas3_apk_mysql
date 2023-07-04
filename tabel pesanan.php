<!DOCTYPE html>
<html lang="en">
<head>
  <title>Restaurant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Form Tabel Pesanan</h2>
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="nomeja">Nomor meja:</label>
      <input type="text" class="form-control" id="nomeja" placeholder="Enter Nomor meja" name="nomeja">
    </div>
    <div class="mb-3">
      <label for="nopaket">Nomor paket:</label>
      <input type="text" class="form-control" id="nopaket" placeholder="Enter Nomor paket" name="nopaket">
    </div>
   <div class="mb-3 mt-3">
      <label for="totalkos">Total kos:</label>
      <input type="text" class="form-control" id="STNK" placeholder="Enter Total kos" name="totalkos">
    </div>
    <div class="mb-3">
      <label for="tanggalbayar">Tanggal Bayar:</label>
      <input type="text" class="form-control" id="tanggalbayar" placeholder="Enter Tanggal bayar" name="tanggalbayar">
    </div>
    <div class="mb-3">
      <label for="nokuotanayar">Nomor Kuota Bayar:</label>
      <input type="text" class="form-control" id="nokuotabayar" placeholder="Enter Nomor kuota bayar" name="nokuotabayar">
    </div>
    <button type="submit" class="btn btn-primary" name="bSimpan" >Simpan</button>
  </form>
  <?php
   if (isset($_POST['bSimpan'])) {
    $nomeja = filter_var($_POST['nomeja'],FILTER_SANITIZE_STRING);
	  $nopaket = filter_var($_POST['nopaket'],FILTER_SANITIZE_STRING);
	  $totalkos= filter_var($_POST['totalkos'],FILTER_SANITIZE_STRING);
	  $tanggalbayar= filter_var($_POST['tanggalbayar'],FILTER_SANITIZE_STRING);
    $nokuotabayar= filter_var($_POST['nokuotabayar'],FILTER_SANITIZE_STRING);
	  
	  $kon=mysqli_connect("localhost","root","","restaurant");
	  $sql="insert into pesanan (nomeja,nopaket,totalkos,tanggalbayar,nokuotabayar) values (
	  '".$nomeja."','".$nopaket."','".$totalkos."','".$tanggalbayar."','".$nokuotabayar."')";
	  $q=mysqli_query($kon,$sql);
   }
  ?>
</div>

</body>
</html>