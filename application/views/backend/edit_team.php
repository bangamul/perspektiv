        

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Edit Team</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Team</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Edit Team</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <!-- <h5 class="hk-sec-title">Default Layout</h5> -->
                            <div class="row">
                                <div class="col-sm">
                                    <form action="<?php echo base_url()."backend/do_updateteammember" ?>" method="POST" enctype="multipart/form-data">
                                        <?php foreach ($getMemberTM as $row) { ?>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="<?= $row->nama_user;?>">Nama User</label>
                                                <input class="form-control" id="nama_user" name="nama_user" placeholder="" value="<?= $row->nama_user;?>" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="<?= $row->nama_lengkap;?>">Nama Lengkap</label>
                                                <input class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="" value="<?= $row->nama_lengkap;?>" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="kategori_news">Kategori Game</label>
                                                <input class="form-control" id="kategori_game" name="kategori_game" placeholder="" value="<?php 
                                                    $kategori = $row->kategori_game;
                                                    if($kategori == 1) {
                                                        echo "Mobile Legends";
                                                    } elseif($kategori == 2) {
                                                        echo "PUBGM";
                                                    } else {
                                                        echo "CODM";
                                                    }
                                                ?>" type="text" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="username">Image Team Member</label>
                                            <div  class="row">
                                                <div class="col-sm">
                                                    <input type="file" id="files" name="files[]" class="dropify" multiple required /> <br>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <input type="hidden" name="id_unique" id="id_unique" value="<?= $row->id_unique;?>">
                                        <button class="btn btn-red" type="submit">Submit</button>
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