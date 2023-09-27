        

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Achievement</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Achievement</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Add Achievement</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <!-- <h5 class="hk-sec-title">Default Layout</h5> -->
                            <div class="row">
                                <div class="col-sm">
                                    <form action="<?php echo base_url()."backend/do_insertachiev" ?>" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="judul_achiev">Nama Achievement</label>
                                                <input class="form-control" id="judul_achiev" name="judul_achiev" placeholder="" value="" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="nama_tim">Nama Team</label>
                                                <input class="form-control" id="nama_tim" name="nama_tim" placeholder="" value="" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="kategori_game">Kategori Game</label>
                                                <select class="form-control" id="kategori_game" name="kategori_game">
                                                    <option value="1">Mobile Legends</option>
                                                    <option value="2">PUBGM</option>
                                                    <option value="3">CODM</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="waktu">Waktu</label>
                                                <input class="form-control" id="waktu" name="waktu" placeholder="" value="" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="juara">Peringkat</label>
                                                <select class="form-control" id="juara" name="juara">
                                                    <option value="1">1st Place</option>
                                                    <option value="2">2nd Place</option>
                                                    <option value="3">3rd Place</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="username">Insert Image Kejuaraan</label>
                                            <div  class="row">
                                                <div class="col-sm">
                                                    <input type="file" id="files" name="files[]" class="dropify" multiple required /> <br>
                                                </div>
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