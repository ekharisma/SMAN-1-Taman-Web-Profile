<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src=<?= base_url('assets/img/smanita.jpeg')?> width=32 heigth=32 class="d-inline-block align-top" loading='lazy' />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="<?= site_url('beranda/dashboard')?>">Beranda <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= site_url('beranda/jadwal')?>">Jadwal</a>
      <a class="nav-item nav-link" href="<?= site_url('beranda/absen')?>">Absen</a>
      <a class="nav-item nav-link" href="<?= site_url('beranda/nilai')?>">Nilai</a>
    </div>
  </div>
</nav>