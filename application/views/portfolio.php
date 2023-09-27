
<section class="portfolio">
    <div class="container">
        <div class="newscategory portfoliocategory">
            
            <ul class="nav nav-tabs portfoliocat" role="tablist">
                <li class="nav-item">
                    <a class="nav-link newnav-link active" data-toggle="tab" href="#tabs-1" role="tab">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Website</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Mobile Apps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Design Graphic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">IT Consultant</a>
                </li>
            </ul><!-- Tab panes -->

            <div class="tab-content mt-20">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <div class="row">
                        <?php foreach ($getPortfolio as $row) { ?>
                        <div class="col-md-3 mb-20">
                            <div class="card ">
                                <div class="imageGrid">
                                    <a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>">
                                        <div class="tile" style="background-image: url('<?= base_url("assets/images/portfolio/" . $row->image_name);?>');" alt="<?= $row->slug_portfolio?>" title="<?= $row->slug_portfolio?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6><span class="fyellow">
                                        <?php 
                                            $kategori = $row->kategori_portfolio;
                                            if ($kategori == 1) {
                                                echo "Website Development";
                                            } elseif ($kategori == 2) {
                                                echo "Mobile Apps";
                                            } elseif ($kategori == 3) {
                                                echo "Design Graphic";
                                            } else {
                                                echo "IT Consultant";
                                            }
                                        ?> 
                                        </span> 
                                        <?php
                                            $sampleDate = $row->waktu;
                                            $convertDate = date("d - m - Y", strtotime($sampleDate));
                                            print_r($convertDate);
                                        ?>
                                    </h6>
                                    <h5 class="card-title"><a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>"><?= $row->judul_portfolio;?></a></h5>
                                    <!--<p class="card-text"><?= $row->nama_client;?></p>-->
                                    <a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>" class="btn btn-yellow">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="tab-pane" id="tabs-2" role="tabpanel">
                    <div class="row">
                        <?php foreach ($getPortfolioWEB as $row) { ?>
                        <div class="col-md-3 mb-20">
                            <div class="card ">
                                <div class="imageGrid">
                                    <a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>">
                                        <div class="tile" style="background-image: url('<?= base_url("assets/images/portfolio/" . $row->image_name);?>');" alt="<?= $row->slug_portfolio?>" title="<?= $row->slug_portfolio?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6><span class="fyellow">
                                        <?php 
                                            $kategori = $row->kategori_portfolio;
                                            if ($kategori == 1) {
                                                echo "Website Development";
                                            } elseif ($kategori == 2) {
                                                echo "Mobile Apps";
                                            } elseif ($kategori == 3) {
                                                echo "Design Graphic";
                                            } else {
                                                echo "IT Consultant";
                                            }
                                        ?> 
                                        </span> 
                                        <?php
                                            $sampleDate = $row->waktu;
                                            $convertDate = date("d - m - Y", strtotime($sampleDate));
                                            print_r($convertDate);
                                        ?>
                                    </h6>
                                    <h5 class="card-title"><a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>"><?= $row->judul_portfolio;?></a></h5>
                                    <!--<p class="card-text"><?= $row->nama_client;?></p>-->
                                    <a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>" class="btn btn-yellow">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="tab-pane" id="tabs-3" role="tabpanel">
                    <div class="row">
                        <?php foreach ($getPortfolioApps as $row) { ?>
                        <div class="col-md-3 mb-20">
                            <div class="card ">
                                <div class="imageGrid">
                                    <a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>">
                                        <div class="tile" style="background-image: url('<?= base_url("assets/images/portfolio/" . $row->image_name);?>');" alt="<?= $row->slug_portfolio?>" title="<?= $row->slug_portfolio?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6><span class="fyellow">
                                        <?php 
                                            $kategori = $row->kategori_portfolio;
                                            if ($kategori == 1) {
                                                echo "Website Development";
                                            } elseif ($kategori == 2) {
                                                echo "Mobile Apps";
                                            } elseif ($kategori == 3) {
                                                echo "Design Graphic";
                                            } else {
                                                echo "IT Consultant";
                                            }
                                        ?> 
                                        </span> 
                                        <?php
                                            $sampleDate = $row->waktu;
                                            $convertDate = date("d - m - Y", strtotime($sampleDate));
                                            print_r($convertDate);
                                        ?>
                                    </h6>
                                    <h5 class="card-title"><a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>"><?= $row->judul_portfolio;?></a></h5>
                                    <!--<p class="card-text"><?= $row->nama_client;?></p>-->
                                    <a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>" class="btn btn-yellow">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="tab-pane" id="tabs-4" role="tabpanel">
                    <div class="row">
                        <?php foreach ($getPortfolioDesign as $row) { ?>
                        <div class="col-md-3 mb-20">
                            <div class="card ">
                                <div class="imageGrid">
                                    <a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>">
                                        <div class="tile" style="background-image: url('<?= base_url("assets/images/portfolio/" . $row->image_name);?>');" alt="<?= $row->slug_portfolio?>" title="<?= $row->slug_portfolio?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6><span class="fyellow">
                                        <?php 
                                            $kategori = $row->kategori_portfolio;
                                            if ($kategori == 1) {
                                                echo "Website";
                                            } elseif ($kategori == 2) {
                                                echo "Mobile Apps";
                                            } elseif ($kategori == 3) {
                                                echo "Design Graphic";
                                            } else {
                                                echo "IT Consultant";
                                            }
                                        ?> 
                                        </span> 
                                        <?php
                                            $sampleDate = $row->waktu;
                                            $convertDate = date("d - m - Y", strtotime($sampleDate));
                                            print_r($convertDate);
                                        ?>
                                    </h6>
                                    <h5 class="card-title"><a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>"><?= $row->nama_client;?></a></h5>
                                    <!--<p class="card-text"><?= $row->web_client;?></p>-->
                                    <a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>" class="btn btn-yellow">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="tab-pane" id="tabs-5" role="tabpanel">
                    <div class="row">
                        <?php foreach ($getPortfolioIT as $row) { ?>
                        <div class="col-md-3 mb-20">
                            <div class="card ">
                                <div class="imageGrid">
                                    <a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>">
                                        <div class="tile" style="background-image: url('<?= base_url("assets/images/portfolio/" . $row->image_name);?>');" alt="<?= $row->slug_portfolio?>" title="<?= $row->slug_portfolio?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6><span class="fyellow">
                                        <?php 
                                            $kategori = $row->kategori_portfolio;
                                            if ($kategori == 1) {
                                                echo "Website Development";
                                            } elseif ($kategori == 2) {
                                                echo "Mobile Apps";
                                            } elseif ($kategori == 3) {
                                                echo "Design Graphic";
                                            } else {
                                                echo "IT Consultant";
                                            }
                                        ?> 
                                        </span> 
                                        <?php
                                            $sampleDate = $row->waktu;
                                            $convertDate = date("d - m - Y", strtotime($sampleDate));
                                            print_r($convertDate);
                                        ?>
                                    </h6>
                                    <h5 class="card-title"><a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>"><?= $row->judul_portfolio;?></a></h5>
                                    <!--<p class="card-text"><?= $row->nama_client;?></p>-->
                                    <a href="<?= site_url("portfolio/" . $row->slug_portfolio);?>" class="btn btn-yellow">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
