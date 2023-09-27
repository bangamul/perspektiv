

<section class="order-part-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="">Order</h2>
                <hr class="hr-text" data-content="Lookit! Studio Photography">
            </div>
        </div>
    </div>
</section>

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
                    <p>Isi fill di bawah untuk melakukan order di Lookit! Studio Photography.</p>
                    <span>
                        <form action="<?php echo base_url()."front/do_orders" ?>" method="POST" enctype="multipart/form-data">
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
                                <label for="tanggal">Tanggal</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                  </div>
                                  <input type="date" class="form-control" id="tanggal" name="tanggal" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenis">Kategori Photography</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                  </div>
                                  <select class="form-control" id="jenis" name="jenis">
                                    <option value="session">Session Photography</option>
                                    <option value="family">Family Photography</option>
                                    <option value="product">Product Photography</option>
                                    <option value="personal">Personal Photography</option>
                                    <option value="rent">Rental Studio</option>
                                    <option value="wedding">Wedding Photography</option>
                                    <option value="prewed">Pre Wedding Photography</option>
                                    <option value="booth">Photo Booth</option>
                                    <option value="other">Other Photography</option>
                                  </select>
                                </div>
                            <div class="form-group">
                                <label for="qty">Jumlah Anggota</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                  </div>
                                  <input type="text" class="form-control" id="qty" name="qty" >
                                </div>
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
                                <button class="btn btn-red-contact" type="submit">Kirim</button>
                            </div>
                        </form>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
