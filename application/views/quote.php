
<section class="order-part-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 about-top">
                <div class="about-content">
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
                    <p>Isi fill di bawah untuk mendapatkan penawaran dari Perspektiv.id</p>
                    <span>
                        <form action="<?php echo base_url()."front/do_quote" ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama">Nama*</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                  </div>
                                  <input type="text" class="form-control" id="nama" name="nama" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                  </div>
                                  <input type="email" class="form-control" id="email" name="email" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="notelp">No. Telpon</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                  </div>
                                  <input type="text" class="form-control" id="notelp" name="notelp" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pesan">Message</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                  </div>
                                  <textarea class="form-control" id="pesan" name="pesan"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-yellow" type="submit">Kirim</button>
                            </div>
                        </form>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
