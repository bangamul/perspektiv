        

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Service</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Service</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Add Service</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <!-- <h5 class="hk-sec-title">Default Layout</h5> -->
                            <div class="row">
                                <div class="col-sm">
                                    <form action="<?php echo base_url()."backend/do_insertservice" ?>" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="judul_service">Pilih Service</label>
                                                <select class="form-control" id="judul_service" name="judul_service">
                                                    <option value="website">Website Development</option>
                                                    <option value="mobile">Mobile Apps</option>
                                                    <option value="design">Design Graphic</option>
                                                    <option value="photo">Photography</option>
                                                    <option value="seo">SEO</option>
                                                    <option value="consultant">IT Consultant</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="post_content">Konten Service</label>
                                                <div class="tinymce-wrap">
                                                    <textarea class="tinymce" id="post_contenta" name="post_contenta"></textarea>
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