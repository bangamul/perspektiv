        

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">News</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add News</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Add News</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <!-- <h5 class="hk-sec-title">Default Layout</h5> -->
                            <div class="row">
                                <div class="col-sm">
                                    <form action="<?php echo base_url()."backend/do_insertnews" ?>" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="judul_news">Judul News</label>
                                                <input class="form-control" id="judul_news" name="judul_news" placeholder="" value="" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="kategori_news">Kategori News</label>
                                                <select class="form-control" id="kategori_news" name="kategori_news">
                                                    <option value="1">Mobile Legends</option>
                                                    <option value="2">PUBGM</option>
                                                    <option value="3">CODM</option>
                                                    <option value="4">General</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="author_news">Penulis</label>
                                                <input type="text" class="form-control" id="author_news" name="author_news">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="tanggal_news">Tanggal</label>
                                                <input type="date" class="form-control" id="tanggal_news" name="tanggal_news">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="excerpt_news">Excerpt</label>
                                                <input type="text" class="form-control" id="excerpt_news" name="excerpt_news">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="post_content">Content News</label>
                                                <div class="tinymce-wrap">
                                                    <textarea class="tinymce" id="post_content" name="post_content"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="username">Insert Image News</label>
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