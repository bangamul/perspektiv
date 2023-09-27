<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--Favicon-->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url() ?>assets/img/favicon.ico" type="image/x-icon">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/bootstrap/dist/css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

        <!-- <title>Mustela - Detail Product</title> -->
        <title>Email Template</title>
        <style>
            body {
                background: url('https://wallpaperplay.com/walls/full/2/4/c/112280.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }
            img.img20email {
                width: 20%;
                height: auto;
                margin: auto;
                margin-bottom: 30px;
            }
            table {
                width: 100%;
            }
            td {
                border-bottom: 1px solid #f8f8f8;
            }
            tr.bg-blues {
                background: #931c1a;
                color: #fff;
                text-align: center;
            }

            tr.bg-blues > th {
                padding: 10px;
            }
            .padding-30 {
                padding: 5% 20%;
            }
            .back-blue {
                background: #931c1a;
                padding: 20px 30px 20px 30px;
                color: #fff;
                width: 100%;
            }
            p.mb-0 {
                margin-bottom: 0rem;
            }
            .divgrey {
                background: #f8f8f8;
                padding: 5%;
                text-align: center;
                margin-top: 20px;
            }
            /*.divgrey a {
                background: #004d9d;
                color: #fff;
                padding: 20px 30px;
            }*/
            .text-footer {
                font-size: .6rem;
                padding: 0 10%;
                text-align: center
            }
            .f-8 {
                font-size: .8rem;
            }
            .f-1 {
                font-size: 1rem;
            }
            .text-right {
                text-align: right;
            }
            .text-left {
                text-align: left;
            }
            .text-center {
                text-align: center;
            }
            .mt-20 {
                margin-top: 20px;
            }
            .btn-email {
                background: #931c1a;
                color: #fff;
                padding: 5% 12%;
            }
            ul.socmed > li {
                display: inline;
                margin-right: 10px;
            }
            img.wid20 {
                width: 30px;
            }
            img.height40 {
                height: 25px !important;
                width: auto !important;
            }
            .form-info {
                width: 80%;
                border: 0px !important;
                padding: 5px 10px;
                background: #fff;
                color: #931c1a;
                margin: auto;
            }
            .mb-10 {
                margin-bottom: 10px;
                margin: auto;
                text-align: center;
            }
            .blues {
                color: #fff !important;
                font-weight: bold;
                font-size: .8rem;
                text-align: center;
                margin: auto;
                width: 100%;
            }
        </style>
    </head>
    <body>

        <section>
            <div class="container">
                <div class="bg-white padding-30">
                    <!-- <div class=""><img src="http://develsync.com/interbat/assets/img/logo.png" class="img20email" alt=""></div> -->
                    <div class="back-blue">
                        <h1 class="text-center">Form Contact</h1>
                        <div class="mb-10">
                            <p class="mb-0">Nama :</p>
                            <div class="form-info"><?php echo $nama;?></div>
                        </div>
                        <div class="mb-10">
                            <p class="mb-0">Email :</p>
                            <div class="form-info"><?php echo $email;?></div>
                        </div>
                        <div class="mb-10">
                            <p class="mb-0">No. Telp :</p>
                            <div class="form-info"><?php echo $notelp;?></div>
                        </div>
                        <div class="mb-10">
                            <p class="mb-0">Message :</p>
                            <div class="form-info"><?php echo $isi;?></div>
                        </div>
                        <br>
                        <div class="blues text-center">Copyright © 2020 Perspektiv.id, All Rights Reserved.</div>
                        <br>
                    </div>
                </div>
            </div>
        </section>

        <!-- Whatsapp -->
        <script async data-id="5706" src="https://cdn.widgetwhats.com/script.min.js"></script>  

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.slim.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/css/bootstrap.min.js"></script>
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src='https://unpkg.com/xzoom/dist/xzoom.min.js'></script>
        <script src='https://hammerjs.github.io/dist/hammer.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js'></script>

    </body>
</html>