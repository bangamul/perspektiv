<style>
.error{ color:red; } 
</style>

<script src='https://www.google.com/recaptcha/api.js'></script>

<section class="contact-part-breadcrumb">
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5608.54601391213!2d106.86873802756104!3d-6.284632147712681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3c60e834ae9%3A0xb4d0dc15035f15e7!2sPerspektiv!5e0!3m2!1sen!2sid!4v1644857853694!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15863.287903894527!2d106.87684175000001!3d-6.2871166999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91f80e398e8c8060!2sLookit%20Studio!5e0!3m2!1sen!2sid!4v1583036330888!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>-->
    </div>
</section>

<section class="contact-part-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
            <div class="col-md-6 about-top text-center">
                <img src="<?= base_url("assets/images/");?>about-banner.png" class="img80p">
            </div>
            <div class="col-md-6 about-top">
                <div class="about-content">
                    <h1>Perspektiv.id</h1>
                    <h3><em>Introduce</em></h3>
                    <p>LOOK IT! are services in the field of photography and videography. Completing the name LOOK IT! itself becomes LOOK IT! Studio & Photography, We also provide rental service studio as a place for photographers to more easily get a place to meet consumers with a photo studio facility which is capable enough.</p>
                    <span>
                        <form action="<?php echo base_url()."front/googleCaptachStore" ?>" method="POST" enctype="multipart/form-data">
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
                            <div class="g-recaptcha mb-2" data-sitekey="6LcKb78ZAAAAAMsXAKER86TLEsRw02ych6XnOoqr"></div>  
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
