<html>
    <head>
        <title>UCC</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/dist/css/bootstrap.min.css">
        <style>
            body{
                background-image: url("<?php echo base_url()?>gambar/backgL.jpg");
                background-size: 100%;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(0, 0, 0, 0.3);">
            <div class="navbar-collapse collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link white-link" href="#"><img src="<?php echo base_url() ?>gambar/icon/back.png"  alt=""></a>
                        <a class="" href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white " href="#">Lowongan Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="#">Perusahaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="#">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="#">Masuk</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="selamat">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <br><br>
                    <h3>SELAMAT DATANG DI UCC</h3>
                    <p>Apa tujuan anda disini?</p>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="daftarLR">
                        <p><strong>Saya sedang mencari pekerjaan</strong></p>
                        <p>Buat akun pencari kerja</p>
                        <br>
                        <a class="btn btn-primary" href="<?php echo site_url('login/daftarpencaker') ?>" role="button">Daftar</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="daftarLR">
                        <p><strong>Saya sedang mencari kandidat</strong></p>
                        <p>Buat akun perusahaan</p>
                        <br>
                        <a class="btn btn-primary" href="<?php echo site_url('login/daftarperusahaan') ?>" role="button">Daftar</a>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        <br><br>
        <div class="ansacc">
            <p>Sudah mempunyai akun? <a class="btn btn-primary" href="<?php echo site_url('login/masuk') ?>" role="button" >Masuk</a></p>
        </div>
        <br><br>
        