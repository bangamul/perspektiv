        

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Order</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Order</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Order</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                    <form>
                                        <?php foreach ($getOrderdetail as $row) { ?>
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
                                            <div class="col-md-4 form-group">
                                                <label for="tanggal">Tanggal</label>
                                                <input class="form-control" id="tanggal" name="tanggal" placeholder="" value="<?= $row->tanggal;?>" type="text">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="jenis">Kategori</label>
                                                <input class="form-control" id="jenis" name="jenis" placeholder="" value="<?php 
                                                            $kategori = $row->jenis;
                                                            if ($kategori == 'session') {
                                                                echo "Session Photography";
                                                            } elseif ($kategori == 'family') {
                                                                echo "Family Photography";
                                                            } elseif ($kategori == 'personal') {
                                                                echo "Personal Photography";
                                                            } elseif ($kategori == 'prewed') {
                                                                echo "Prewed Photography";
                                                            } elseif ($kategori == 'wedding') {
                                                                echo "Wedding Photography";
                                                            } elseif ($kategori == 'rent') {
                                                                echo "Rental Photography";
                                                            } elseif ($kategori == 'booth') {
                                                                echo "Booth Photography";
                                                            } elseif ($kategori == 'product'){
                                                                echo "Product Photography";
                                                            } else {
                                                                echo "Other Photography";
                                                            }
                                                        ?>" type="text">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="qty">Jumlah Team</label>
                                                <input class="form-control" id="qty" name="qty" placeholder="" value="<?= $row->qty;?>" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="pesan">Message</label>
                                                <textarea class="form-control" id="pesan" name="pesan"><?= $row->pesan;?></textarea>
                                            </div>
                                        </div>

                                        <hr>
                                        <a href="<?= site_url("backend/order");?>" role="button" class="btn btn-red" type="submit">Back</a>
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