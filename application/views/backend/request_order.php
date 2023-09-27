

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Request Order</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Request Order</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Request Order</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title mb-20">Request Order</h5>
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
                            <!-- <div class="mb-20">
                                <a role="button" class="btn btn-red" href="<?php echo site_url("backend/add_tournament");?>">Add New Tournament</a>
                            </div> -->
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Request Service</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($getData as $row) { ?>
                                                <tr class="<?php if($row->status == 1) { echo 'fontbold'; } ?>">
                                                    <td><?php echo $row->nama ;?></td>
                                                    <td><?php echo $row->email ;?></td>
                                                    <td>
                                                        <?php 
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
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= site_url("backend/edit_requestorder/" . $row->id_unique);?>">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Request Service</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- /Row -->

            </div>
            <!-- /Container -->