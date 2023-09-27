        

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Message</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Message</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Message</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                    <form>
                                        <?php foreach ($getContactdetail as $row) { ?>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="nama_client">Nama</label>
                                                <input class="form-control" id="nama_client" name="nama_client" placeholder="" value="<?= $row->nama;?>" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" id="email" name="email" placeholder="" value="<?= $row->email;?>" type="text">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="notelp">No. Telpon</label>
                                                <input class="form-control" id="notelp" name="notelp" placeholder="" value="<?= $row->notelp;?>" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="isi">Message</label>
                                                <textarea class="form-control" id="isi" name="isi"><?= $row->isi;?></textarea>
                                            </div>
                                        </div>

                                        <hr>
                                        <a href="<?= site_url("backend/contact");?>" role="button" class="btn btn-red" type="submit">Back</a>
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