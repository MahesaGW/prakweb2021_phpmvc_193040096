<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman home</title>
</head>
<body>
<div class="container"></div>
<div class="jumbotron mt-4">
  <h1 class="display-4">Selamat Datang di Website Saya!</h1>
  <p class="lead">Halo, nama saya <?= $data['nama'] ?></p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
</body>
</html>