<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

    <style>
        img {
            width: 80px;
            height: 130px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-white bg-light shadow">
        <a class="navbar-brand" href="<?= base_url() ?>">Latihan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>Profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>Barang">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>Supplier">Supplier</a>
                </li>

            </ul>
        </div>
    </nav>