
<main role="main" class="">

    <section class="home-part-about">
        <div class="container">
            <div class="hometitle text-center">
                
                <h2 class="capitalize">
                    <?php 
                        $kat = $getPhotokategori[0]->kategori;
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
                
                <!-- <h2 class="capitalize">Photography</h2> -->
                <p>LOOK IT! are services in the field of photography and videography.<br> Completing the name LOOK IT! itself becomes LOOK IT! Studio & Photography.</p>
                <br>
                <div class="imageGrid">
                    <?php foreach ($getPhotodetail as $row) { ?>
                    <a href="#img<?php echo $row->id;?>">
                        <div class="tile" style="background-image: url('<?= base_url("assets/images/project/" . $row->nama_image);?>');"></div>
                    </a>

                        <div class="lightbox-target new-lightbox-target" id="img<?php echo $row->id;?>">
                            <img src="<?= base_url("assets/images/project/" . $row->nama_image);?>" class=""/>
                            <a class="lightbox-close" href="#imglagi<?php echo $row->id;?>"></a>
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