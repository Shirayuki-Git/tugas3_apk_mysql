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

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">KELOMPOK 5</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Anggota</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Evan Jayusta</a></li>
            <li><a class="dropdown-item" href="#">Nanda Yugo Pengestu</a></li>
            <li><a class="dropdown-item" href="#">Sapitri Ramadhani</a></li>
            <li><a class="dropdown-item" href="#">Yogi Hermawan</a></li>
            <li><a class="dropdown-item" href="#">Ahmad Nuril Khakim</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="meja.php" target="frmutama">Meja</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tabel pesanan.php" target="frmutama">Pesanan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  <iframe name="frmutama" width="100%" height="450px"></iframe>
</div>

</body>
</html>