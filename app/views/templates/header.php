<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- css -->
    <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.css">

    <title>halaman <?= $data['judul']; ?></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>">Cofiel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= BASEURL ?>">Home <span class="sr-only">(current)</span></a>
                </li>     
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL ?>/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL ?>/data_sekolah">Data Sekolah</a>
                </li>
            </ul>
        </div>
  </div>
</nav>