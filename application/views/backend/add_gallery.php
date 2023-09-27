        

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Gallery</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Gallery</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Add Gallery</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <!-- <h5 class="hk-sec-title">Default Layout</h5> -->
                            <div class="row">
                                <div class="col-sm">
                                    <form action="<?php echo base_url()."backend/do_insertgallery" ?>" method="POST" enctype="multipart/form-data">
                                        <!-- <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="nama_brand">Nama Gallery</label>
                                                <input class="form-control" id="nama_brand" name="nama_brand" placeholder="" value="" type="text">
                                            </div>
                                        </div> -->

                                        <div class="form-group">
                                            <label for="username">Insert Image Gallery</label>
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