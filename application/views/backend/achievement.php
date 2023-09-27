

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Achievement</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Achievement</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Achievement</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Achievement</h5>
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
                            <div class="mb-20">
                                <a role="button" class="btn btn-red" href="<?php echo site_url("backend/add_achievement");?>">Add New Achievement</a>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>Nama Kejuaraan</th>
                                                    <th>Kategori Game</th>
                                                    <th>Peringkat</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($getAchievement as $row) { ?>
                                                <tr>
                                                    <td><?php echo $row->judul_achiev ;?></td>
                                                    <td>
                                                        <?php 
                                                            $kategori = $row->kategori_game;
                                                            if ($kategori == 1) {
                                                                echo "Mobile Legends";
                                                            } elseif ($kategori == 2) {
                                                                echo "PUBGM";
                                                            } else {
                                                                echo "CODM";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            $juara = $row->juara;
                                                            if ($juara == 1) {
                                                                echo "1st Place";
                                                            } elseif ($juara == 2) {
                                                                echo "2nd Place";
                                                            } else {
                                                                echo "3rd Place";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= site_url("backend/do_deleteachievement/" . $row->id_unique);?>">
                                                            <i class="fa fa-remove"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Nama Kejuaraan</th>
                                                    <th>Kategori Game</th>
                                                    <th>Peringkat</th>
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