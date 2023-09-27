<section class="topbgnews"></section>

<!-- <section class="newsdetail-part-breadcrumb" style="background: url(<?= base_url("assets/images/news/" . $getNews[0]->image_name);?>);">
</section> -->

<section class="newsdetail-content">
    <div class="container">

        <div class="row mb-4">
            <div class="col-md-6">
                <h3>
                    <?php 
                        $judul = $getService[0]->judul_service;
                        if ($judul == 'website') {
                            echo "Website Development";
                        } elseif ($judul == 'mobile') {
                            echo "Mobile Apps";
                        } elseif ($judul == 'design') {
                            echo "Design Graphic";
                        } elseif ($judul == 'photo') {
                            echo "Photography";
                        } elseif ($judul == 'seo') {
                            echo "SEO";
                        } else {
                            echo "IT Consultant";
                        }
                    ?>
                </h3>
                <div class="mt-3">
                    <?= $getService[0]->konten_service;?>
                </div>   
            </div>
            <div class="col-md-6"><img src="<?= base_url('assets/images/service/' . $getService[0]->img_service);?>"></div>
        </div>

        <?php 
            $judul = $getService[0]->judul_service;
            if ($judul == 'consultant') { 
        ?>

        <?php } elseif ($judul == 'seo') { ?>
        
        <?php } elseif ($judul == 'photo') {?>

        <?php } else { ?>

        <hr>

        <div class="row mt-4 mb-4">
            <div class="col-md-12">
                <h5>Process</h5>
                <?= $getService[0]->proses;?>
            </div>
            <div class="col-md-12 mt-3">
                <h5>Technology</h5>
                <?= $getService[0]->technology;?>
            </div>
        </div>
        <?php } ?>

        <hr>

        <div class="row">
            <div class="col-md-12 mt-4 mb-4">
                <div class="card new-card py-5 px-5">
                    <div class="row w-100">
                        <div class="col-md-6">
                            <h5><strong>Tertarik untuk membangun proyek yang luar biasa? Ayo mulai!</strong></h5>
                            <p class="mt-3">Mari kita bicara tentang proyek Anda. Sebagai permulaan, kami ingin bersiap untuk percakapan awal. Mulailah meminta konsultasi gratis dan kami akan menghubungi Anda untuk mengatur konsultasi awal gratis.</p>
                        </div>
                        <div class="col-md-6 startnow">
                            <a href="<?= site_url('quote');?>">Mulai sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    $(document).on("click", ".copy-action-btn", function() { 
      var trigger = $(this);
      $(".copy-action-btn").removeClass("text-success");
      var $tempElement = $("<input>");
        $("body").append($tempElement);
        var copyType = $(this).data("value");
        $tempElement.val(copyType).select();
        document.execCommand("Copy");
        $tempElement.remove();
        $(trigger).addClass("text-success");

  });
</script>