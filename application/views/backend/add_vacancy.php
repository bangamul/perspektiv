        

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Job Vacancy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Job Vacancy</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Add Job Vacancy</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <!-- <h5 class="hk-sec-title">Default Layout</h5> -->
                            <div class="row">
                                <div class="col-sm">
                                    <form action="<?php echo base_url()."backend/do_insertvacancy" ?>" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="judul_job">Judul Job Vacancy</label>
                                                <input class="form-control" id="judul_job" name="judul_job" placeholder="" value="" type="text">
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="lokasi">Lokasi</label>
                                                <input class="form-control" id="lokasi" name="lokasi" placeholder="" value="" type="text">
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="post_content">Isi Job Vacancy</label>
                                                <div class="tinymce-wrap">
                                                    <textarea class="tinymce" id="post_content" name="isi_job"></textarea>
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