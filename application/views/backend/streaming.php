        

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Streaming</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add URL Streaming</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>URL Streaming</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <div>
                                <?php if($this->session->flashdata('success')){ ?>
                                    <div class="alert alert-success" id="success-alert">
                                        <a href="" class="close" data-dismiss="alert">&times;</a>
                                        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php }else if($this->session->flashdata('error')){  ?>
                                    <div class="alert alert-danger" id="error-alert">
                                        <a href="" class="close" data-dismiss="alert">&times;</a>
                                        <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- <h5 class="hk-sec-title">Default Layout</h5> -->
                            <div class="row">
                                <div class="col-sm">
                                    <form action="<?php echo base_url()."backend/do_updatestreaming" ?>" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="url">Input URL Streaming</label>
                                                <input class="form-control" id="url" name="url" placeholder="" value="" type="text">
                                            </div>
                                        </div>

                                        <hr>
                                        <button class="btn btn-red" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container