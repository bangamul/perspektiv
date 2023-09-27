
<section class="animated animatedFadeInUp fadeInUp">

    <section class="news-part-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="aboutbread">News</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="about-part-1">
        <div class="container">
            <div class="newscategory">
                
                <ul class="nav nav-tabs newscat" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link newnav-link active" data-toggle="tab" href="#tabs-1" role="tab">Latest</a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">General</a>-->
                    <!--</li>-->
                </ul><!-- Tab panes -->
                <div class="tab-content mt-20">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <div class="row">
                            <?php foreach ($getNews as $row) { ?>
                            <div class="col-md-3 mb-20">
                                <div class="card">
                                    <div class="imageGrid">
                                        <a href="<?= site_url("news/" . $row->slug_news);?>">
                                            <div class="tile" style="background-image: url('<?= base_url("assets/images/news/" . $row->image_name);?>');">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6><span class="fyellow">
                                            <?php 
                                                $kategori = $row->kategori_news;
                                                if ($kategori == 1) {
                                                    echo "Mobile Legends";
                                                } elseif ($kategori == 2) {
                                                    echo "PUBGM";
                                                } elseif ($kategori == 3) {
                                                    echo "CODM";
                                                } else {
                                                    echo "General";
                                                }
                                            ?> 
                                            </span> <?= $row->tanggal_news;?></h6>
                                        <h5 class="card-title"><a href="<?= site_url("news/" . $row->slug_news);?>"><?= $row->judul_news;?></a></h5>
                                        <p class="card-text"><?= $row->excerpt_news;?></p>
                                        <a href="<?= site_url("news/" . $row->slug_news);?>" class="btn btn-orange">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <div class="row">
                            <?php foreach ($getNewsML as $row) { ?>
                            <div class="col-md-3 mb-20">
                                <div class="card">
                                    <div class="imageGrid">
                                        <a href="<?= site_url("news/" . $row->slug_news);?>">
                                            <div class="tile" style="background-image: url('<?= base_url("assets/images/news/" . $row->image_name);?>');">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6><span class="fyellow">
                                            <?php 
                                                $kategori = $row->kategori_news;
                                                if ($kategori == 1) {
                                                    echo "Mobile Legends";
                                                } elseif ($kategori == 2) {
                                                    echo "PUBGM";
                                                } elseif ($kategori == 3) {
                                                    echo "CODM";
                                                } else {
                                                    echo "General";
                                                }
                                            ?>
                                            </span> <?= $row->tanggal_news;?></h6>
                                        <h5 class="card-title"><a href="<?= site_url("news/" . $row->slug_news);?>"><?= $row->judul_news;?></a></h5>
                                        <p class="card-text"><?= $row->excerpt_news;?></p>
                                        <a href="<?= site_url("news/" . $row->slug_news);?>" class="btn btn-orange">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                        <div class="row">
                            <?php foreach ($getNewsPUBGM as $row) { ?>
                            <div class="col-md-3 mb-20">
                                <div class="card">
                                    <div class="imageGrid">
                                        <a href="<?= site_url("news/" . $row->slug_news);?>">
                                            <div class="tile" style="background-image: url('<?= base_url("assets/images/news/" . $row->image_name);?>');">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6><span class="fyellow">
                                            <?php 
                                                $kategori = $row->kategori_news;
                                                if ($kategori == 1) {
                                                    echo "Mobile Legends";
                                                } elseif ($kategori == 2) {
                                                    echo "PUBGM";
                                                } elseif ($kategori == 3) {
                                                    echo "CODM";
                                                } else {
                                                    echo "General";
                                                }
                                            ?>
                                            </span> <?= $row->tanggal_news;?></h6>
                                        <h5 class="card-title"><a href="<?= site_url("news/" . $row->slug_news);?>"><?= $row->judul_news;?></a></h5>
                                        <p class="card-text"><?= $row->excerpt_news;?></p>
                                        <a href="<?= site_url("news/" . $row->slug_news);?>" class="btn btn-orange">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="tab-pane" id="tabs-4" role="tabpanel">
                        <div class="row">
                            <?php foreach ($getNewsCODM as $row) { ?>
                            <div class="col-md-3 mb-20">
                                <div class="card">
                                    <div class="imageGrid">
                                        <a href="<?= site_url("news/" . $row->slug_news);?>">
                                            <div class="tile" style="background-image: url('<?= base_url("assets/images/news/" . $row->image_name);?>');">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6><span class="fyellow">
                                            <?php 
                                                $kategori = $row->kategori_news;
                                                if ($kategori == 1) {
                                                    echo "Mobile Legends";
                                                } elseif ($kategori == 2) {
                                                    echo "PUBGM";
                                                } elseif ($kategori == 3) {
                                                    echo "CODM";
                                                } else {
                                                    echo "General";
                                                }
                                            ?>
                                            </span> <?= $row->tanggal_news;?></h6>
                                        <h5 class="card-title"><a href="<?= site_url("news/" . $row->slug_news);?>"><?= $row->judul_news;?></a></h5>
                                        <p class="card-text"><?= $row->excerpt_news;?></p>
                                        <a href="<?= site_url("news/" . $row->slug_news);?>" class="btn btn-orange">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="tab-pane" id="tabs-5" role="tabpanel">
                        <div class="row">
                            <?php foreach ($getNewsGeneral as $row) { ?>
                            <div class="col-md-3 mb-20">
                                <div class="card">
                                    <div class="imageGrid">
                                        <a href="<?= site_url("news/" . $row->slug_news);?>">
                                            <div class="tile" style="background-image: url('<?= base_url("assets/images/news/" . $row->image_name);?>');">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6><span class="fyellow">
                                            <?php 
                                                $kategori = $row->kategori_news;
                                                if ($kategori == 1) {
                                                    echo "Mobile Legends";
                                                } elseif ($kategori == 2) {
                                                    echo "PUBGM";
                                                } elseif ($kategori == 3) {
                                                    echo "CODM";
                                                } else {
                                                    echo "General";
                                                }
                                            ?>
                                            </span> <?= $row->tanggal_news;?></h6>
                                        <h5 class="card-title"><a href="<?= site_url("news/" . $row->slug_news);?>"><?= $row->judul_news;?></a></h5>
                                        <p class="card-text"><?= $row->excerpt_news;?></p>
                                        <a href="<?= site_url("news/" . $row->slug_news);?>" class="btn btn-orange">Read More</a>
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

</section>