
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="description" content="Game Online Master #1 Indonesia">
        <meta name="author" content="RiMO TEAM">
        <meta name="keywords" content="Game Online">
        <meta name="generator" content="Jekyll v3.8.6"> 
        <title>Perspektiv</title>
        
        <!-- Favicon -->
        <link rel="icon" href="<?php echo base_url("assets/images/");?>favicon.png" sizes="16x16" type="image/png">
        
        <!-- Toggles CSS -->
        <link href="<?php echo base_url("assets/backend/");?>vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url("assets/backend/");?>vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
        
        <!-- Custom CSS -->
        <link href="<?php echo base_url("assets/backend/");?>dist/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader-it">
            <div class="loader-pendulums"></div>
        </div>
        <!-- /Preloader -->
        
        <!-- HK Wrapper -->
        <div class="hk-wrapper">
            
            <!-- Main Content -->
            <div class="hk-pg-wrapper hk-auth-wrapper">
                <!-- <header class="d-flex justify-content-end align-items-center">
                    <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-outline-secondary">Help</a>
                        <a href="#" class="btn btn-outline-secondary">About Us</a>
                    </div>
                </header> -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 pa-0">
                            <div class="auth-form-wrap pt-xl-0 pt-70">
                                <div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
                                    <a class="auth-brand text-center d-block mb-20" href="#">
                                        <img class="brand-img" src="<?php echo base_url("assets/images/");?>perspektiv-logo.png" alt="brand"/>
                                    </a>
                                    <form action="<?php echo base_url("login/do_login");?>" method="POST">
                                        <h1 class="display-4 text-center mb-10">Welcome Back :)</h1>
                                        <p class="text-center mb-30">Sign in to your account and enjoy your journey.</p> 
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" id="password" name="password" placeholder="Password" type="password">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-red btn-block" type="submit">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Main Content -->
        
        </div>
        <!-- /HK Wrapper -->
        
        <!-- JavaScript -->
        
        <!-- jQuery -->
        <script src="<?php echo base_url("assets/backend/");?>vendors/jquery/dist/jquery.min.js"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url("assets/backend/");?>vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?php echo base_url("assets/backend/");?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <!-- Slimscroll JavaScript -->
        <script src="<?php echo base_url("assets/backend/");?>dist/js/jquery.slimscroll.js"></script>
    
        <!-- Fancy Dropdown JS -->
        <script src="<?php echo base_url("assets/backend/");?>dist/js/dropdown-bootstrap-extended.js"></script>
        
        <!-- FeatherIcons JavaScript -->
        <script src="<?php echo base_url("assets/backend/");?>dist/js/feather.min.js"></script>
        
        <!-- Init JavaScript -->
        <script src="<?php echo base_url("assets/backend/");?>dist/js/init.js"></script>
    </body>
</html>