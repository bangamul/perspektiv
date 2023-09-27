        

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Request Order</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Request Order</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Detail Request Order</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <!-- <h5 class="hk-sec-title">Default Layout</h5> -->
                            <div class="row">
                                <div class="col-sm">
                                    <form action="<?php echo base_url()."backend/do_updaterequestorder" ?>" method="POST" enctype="multipart/form-data">
                                        <?php foreach ($getData as $row) { ?>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="nama">Nama Client</label>
                                                <input class="form-control" id="nama" name="nama" placeholder="" type="text" value="<?= $row->nama;?>" readonly="true">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" id="email" name="email" placeholder="" type="text" value="<?= $row->email;?>" readonly="true">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="mobile">Mobile Phone</label>
                                                <input class="form-control" id="mobile" name="mobile" placeholder="" type="text" value="<?= $row->mobile;?>" readonly="true">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="service">Service Request</label>
                                                <input class="form-control" id="service" name="service" placeholder="" type="text" value="<?php 
                                                            $services = $row->service;
                                                            if ($services == 'website') {
                                                                echo "Website Development";
                                                            } elseif ($services == 'mobile') {
                                                                echo "Mobile Apps";
                                                            } elseif ($services == 'design') {
                                                                echo "Design Graphic";
                                                            } elseif ($services == 'photo') {
                                                                echo "Photography";
                                                            } elseif ($services == 'seo') {
                                                                echo "SEO";
                                                            } else {
                                                                echo "IT Consultant";
                                                            }
                                                        ?>" readonly="true">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="pesan">Message</label>
                                                <textarea class="form-control" id="pesan" name="pesan" readonly="true"><?= $row->pesan;?></textarea>
                                            </div>
                                        </div>

                                        <hr>
                                        <input class="form-control" id="id_unique" name="id_unique" placeholder="" type="hidden" value="<?= $row->id_unique;?>">
                                        <button class="btn btn-red" type="submit">Proses Order</button>
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container