

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
                <!-- Title -->
                <div class="hk-pg-header align-items-top">
                    <div>
                        <h2 class="hk-pg-title font-weight-600 mb-10">Perspektiv</h2>
                    </div>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hk-row">
                            <div class="col-sm-12">
                                <div class="card-group hk-dash-type-2">
                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-5">
                                                <div>
                                                    <span class="d-block font-15 text-dark font-weight-500">Target</span>
                                                </div>
                                                <div>
                                                    <span class="text-success font-14 font-weight-500">2020</span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block display-4 text-dark mb-5">100</span>
                                                <small class="d-block">Order</small>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-5">
                                                <div>
                                                    <span class="d-block font-15 text-dark font-weight-500">Current WIN</span>
                                                </div>
                                                <div>
                                                    <span class="text-success font-14 font-weight-500">2020</span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block display-4 text-dark mb-5"><span class="counter-anim">0</span></span>
                                                <small class="d-block">Order</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="hk-row">
                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header card-header-action">
                                        <h6>List of Client</h6>
                                        <div class="d-flex align-items-center card-action-wrap">
                                            <a href="#" class="inline-block refresh mr-15">
                                                <i class="ion ion-md-arrow-down"></i>
                                            </a>
                                            <a href="#" class="inline-block full-screen mr-15">
                                                <i class="ion ion-md-expand"></i>
                                            </a>
                                            <!-- <a class="inline-block card-close" href="#" data-effect="fadeOut">
                                                <i class="ion ion-md-close"></i>
                                            </a> -->
                                        </div>
                                    </div>
                                    <div class="card-body pa-0">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="w-40">Nama Client</th>
                                                            <th>Harga</th>
                                                            <th class="w-25">Tanggal</th>
                                                            <th>Kategori Order</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($getAllclient as $row) { ?>
                                                        <tr>
                                                            <td><?= $row->nama_client;?></td>
                                                            <td><?= number_format($row->harga);?></td>
                                                            <td><?= $row->tanggal;?></td>
                                                            <td>
                                                                <?php 
                                                                    $kategori = $row->kategori;
                                                                    if ($kategori == 'website') {
                                                                        echo "Website Development";
                                                                    } elseif ($kategori == 'mobile') {
                                                                        echo "Mobile Apps";
                                                                    } elseif ($kategori == 'design') {
                                                                        echo "Design Graphic";
                                                                    } elseif ($kategori == 'photo') {
                                                                        echo "Photography";
                                                                    } elseif ($kategori == 'seo') {
                                                                        echo "SEO";
                                                                    } else {
                                                                        echo "IT Consultant";
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->