        

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Portfolio</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Add Portfolio</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <!-- <h5 class="hk-sec-title">Default Layout</h5> -->
                            <div class="row">
                                <div class="col-sm">
                                    <form action="<?php echo base_url()."backend/do_insertportfolio" ?>" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="judul_portfolio">Judul Portfolio</label>
                                                <input class="form-control" id="judul_portfolio" name="judul_portfolio" placeholder="" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="nama_client">Nama Client</label>
                                                <input class="form-control" id="nama_client" name="nama_client" placeholder="" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="waktu">Waktu</label>
                                                <input class="form-control" id="waktu" name="waktu" placeholder="" type="date">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="web_client">URL Website</label>
                                                <input class="form-control" id="web_client" name="web_client" placeholder="" type="text">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="kategori_portfolio">Kategori Portfolio</label>
                                                <select class="form-control" id="kategori_portfolio" name="kategori_portfolio">
                                                    <option value="1">Website Development</option>
                                                    <option value="2">Mobile Apps</option>
                                                    <option value="3">Design Graphic</option>
                                                    <option value="4">Photography</option>
                                                    <option value="5">SEO</option>
                                                    <option value="6">IT Consultant</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="post_content">Deskripsi</label>
                                                <div class="tinymce-wrap">
                                                    <textarea class="tinymce" id="post_content" name="post_content"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="deliverables">Deliverables</label>
                                                <textarea class="form-control" id="deliverables" name="deliverables"></textarea>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="technology">Technology</label>
                                                <textarea class="form-control" id="technology" name="technology"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="username">Insert Image Portfolio</label>
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