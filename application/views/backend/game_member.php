

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Game Member</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Game Member</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>
                        <?php 
                            $nama_game = $this->uri->segment('2');
                            if($nama_game = 'game_mobile_legends') {
                                echo "Mobile Legends";
                            } else {
                                echo "bebas";
                            }
                        ;?>
                    </h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title mb-20">Team Member</h5>
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
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>Nama User</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jenis Game</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($getMemberTM as $row) { ?>
                                                <tr>
                                                    <td><?php echo $row->nama_user ;?></td>
                                                    <td><?php echo $row->nama_lengkap ;?></td>
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
                                                        <a href="<?= site_url("backend/edit_game_member/" . $row->id_unique);?>">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Nama User</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jenis Game</th>
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