
<main role="main" class="">

    <section class="home-part-about">
        <div class="container">
            <div class="hometitle text-center">
                
                <h2 class="capitalize">
                    <?php 
                        $kat = $getkategori[0]->kategori;
                        if ($kat == "session") {
                            echo "Session Photography";
                        } elseif ($kat == "family") {
                            echo "Family Photography";
                        } elseif ($kat == "product") {
                            echo "Product Photography";
                        } elseif ($kat == "personal") {
                            echo "Personal Photography";
                        } elseif ($kat == "rent") {
                            echo "Rental Studio";
                        } elseif ($kat == "prewed") {
                            echo "Pre Wedding Photography";
                        } elseif ($kat == 'wedding') {
                            echo "Wedding Photography";
                        } elseif ($kat == "booth") {
                            echo "Booth Photography";
                        } else {
                            echo "Other Photography";
                        }
                    ?>
                </h2>
                
                <p>LOOK IT! are services in the field of photography and videography.<br> Completing the name LOOK IT! itself becomes LOOK IT! Studio & Photography.</p>
                <br>
                <div class="imageGrid">
                    <?php foreach ($getData as $row) { ?>
                    <div class="tile" style="background-image: url('<?= base_url("assets/images/project/" . $row->image_name);?>');">
                        <a href="<?= site_url("detail/" . $row->slug);?>">
                            <div class="overlay-image">
                                <div class="text-image">
                                    <?= $row->nama_client;?>
                                    <p class="capitalize"><?= $row->kategori;?> Photography</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section class="home-part-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="">Brand</h2>
                    <hr class="hr-text" data-content="Client">
                </div>
                <?php foreach ($getBrand as $row) { ?>
                <div class="col-md-3 text-center mbl50">
                    <img src="<?php echo base_url("assets/images/brand/" . $row->image_name);?>" class="img100">
                </div>
                <?php } ?>
            </div>
        </div>
    </section>


</main>
