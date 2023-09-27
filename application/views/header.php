<html lang="en">
<head><meta charset="euc-jp">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jasa Pembuatan Website, Mobile Apps, Design Graphic, Photography, SEO, IT Consultant">
    <meta name="author" content="Perspektiv">
    <meta name="keywords" content="Web Development">
    <meta name="generator" content="Perspektiv v0.1.0"> 
    <title>Perspektiv.id</title>

    <!-- Facebook -->
    <meta property="og:url"           content="<?= current_url()?>" />
    <meta property="og:type"          content="Web Development" />
    <meta property="og:title"         content="Perspektiv" />
    <meta property="og:description"   content="Jasa Pembuatan Website, Mobile Apps, Design Graphic, Photography, SEO, IT Consultant" />
    <meta property="og:image"         content="<?= base_url("assets/images/");?>perspektiv-ig.png" />

    <link href="https://fonts.googleapis.com/css?family=Anton|Baloo+Thambi+2|Lobster&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url("assets/images/");?>favicon.png" sizes="16x16" type="image/png">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("assets/");?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("assets/");?>css/style.css" rel="stylesheet">

    <!-- Harusnya Footer -->
    <script src="<?php echo base_url("assets/");?>js/jquery-3.4.1.slim.min.js"></script>

    <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <!-- <script src="<?php echo base_url("assets/");?>js/bootstrap.bundle.min.js"></script> -->
    <script src="<?php echo base_url("assets/");?>js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/f7296f59e0.js" crossorigin="anonymous"></script>
    
    <meta name="facebook-domain-verification" content="i0our2nx0pvigp9eflh8r0tudlvfsl" />
    
    <!-- Hotjar Tracking Code for https://perspektiv.id/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:3280344,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

</head>
<body id="<?php echo $this->uri->segment('1');?>">
    
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-transparent"> <!-- bg-yellow -->
        <div class="container posrel">
            <a class="navbar-brand" href="<?= site_url("");?>"><img src="<?= base_url("assets/images/");?>perspektiv-logo-black.png" class=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">  <!-- mr-auto new-head-menu -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url();?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03" style="width:100%">
                            <div class="px-0 container">
                                <div class="w100">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="<?= site_url('website');?>">Website Development</a>
                                            <a class="dropdown-item" href="<?= site_url('mobile');?>">Mobile Apps</a>
                                            <a class="dropdown-item" href="<?= site_url('consultant');?>">IT Consultant</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="<?= site_url('photo');?>">Photography</a>
                                            <a class="dropdown-item" href="<?= site_url('seo');?>">SEO</a>
                                        </div>
                                        <div class="col-md-4">
                                            <!--<a class="dropdown-item" href="#">Digital Marketing-->
                                            <!--    <p class="fwhite f8">Coming Soon</p>-->
                                            <!--</a>-->
                                            <!--<a class="dropdown-item" href="#">Copywriting-->
                                            <!--    <p class="fwhite f8">Coming Soon</p>-->
                                            <!--</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03" style="width:100%">
                            <div class="px-0 container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="<?= site_url('news');?>">News</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('product');?>">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('portfolio');?>">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('about');?>">Tentang</a>
                    </li>
                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03" style="width:100%">
                            <div class="px-0 container">
                                <div class="w100 text-center">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="<?= site_url("news");?>">Berita</a>
                                        </div>
                                        <!--<div class="col-md-4">-->
                                        <!--    <a class="dropdown-item" href="<?= site_url("vacancy");?>">Job Vacancy</a>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4">-->
                                        <!--    <a class="dropdown-item" href="<?= site_url("contact");?>">Contact Us</a>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- <form class="form-inline mt-2 mt-md-0 posrel">
                    <ul class="socmed-header">
                        <li><a href="https://www.youtube.com/channel/UCELWsflq4r_hUc1O5DQM_pQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        <li><i class="fab fa-facebook"></i></li>
                        <li><a href="https://www.instagram.com/rimoteam/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </form> -->
            </div>
        </div>
    </nav>