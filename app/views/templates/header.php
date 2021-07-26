<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= URLBASE ?>/css/bootstrap.min.css" rel="stylesheet" >

    <title><?= $data['title'] ?></title>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="https://patrikpasamboan.000webhostapp.com" target="_blank">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= URLBASE ?>">Home</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="<?= URLBASE ?>/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= URLBASE ?>/mahasiswa">Mahassiswa</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
  