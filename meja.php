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
  <h2>Form Tabel meja</h2>
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="nomeja">Nomor meja:</label>
      <input type="text" class="form-control" id="nomeja" placeholder="Enter Nomor Meja" name="nomeja">
    </div>
    <div class="mb-3">
      <label for="namameja">Nama meja:</label>
      <input type="text" class="form-control" id="namameja" placeholder="Enter Nama meja" name="namameja">
    </div>
   
    <button type="submit" class="btn btn-primary" name="bSimpan" >Simpan</button>
  </form>
  <?php
   if (isset($_POST['bSimpan'])) {
    $nomeja = filter_var($_POST['nomeja'],FILTER_SANITIZE_STRING);
	  $namameja = filter_var($_POST['namameja'],FILTER_SANITIZE_STRING);
	  
	  $kon=mysqli_connect("localhost","root","","restaurant");
	  $sql="insert into meja (nomeja,namameja) values ('".$nomeja."','".$namameja."')";
	  $q=mysqli_query($kon,$sql);
   }
  ?>
</div>

</body>
</html>