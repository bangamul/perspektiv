<section class="topbgnews"></section>

<section class="breadcrumbs">
    <div class="container f8"><a href="<?= site_url("portfolio");?>">Portfolio</a> / <?= $getPortfolio[0]->judul_portfolio;?></div>
</section>

<section class="newsdetail-content">
    <div class="container">
        <div class="row">

            <div class="col-md-12 mt-4 mb-4">
                <div class="row">
                    <div class="col-md-8">
                        <h3><?= $getPortfolio[0]->judul_portfolio;?></h3>
                        <span class="f8">
                            Date Publish : <?php
                                $sampleDate = $getPortfolio[0]->waktu;
                                $convertDate = date("d - m - Y", strtotime($sampleDate));
                                print_r($convertDate);
                            ?>
                        </span>
                        <div class="mt-3">
                            <?= $getPortfolio[0]->deskripsi_portfolio;?>
                        </div>
                        <div class="mt-4 mb-4">
                            <a href="<?= $getPortfolio[0]->web_client;?>" role="button" class="btn btn-yellow" target="_blank">View</a>
                        </div>     
                    </div>
                    <div class="col-md-4"><img src="<?= base_url('assets/images/portfolio/' . $getPortfolio[0]->image_name);?>" alt="<?= $getPortfolio[0]->judul_portfolio?>" title="<?= $getPortfolio[0]->judul_portfolio?>"></div>
                </div>
            </div>

            <hr>

            <div class="row mt-4 mb-4 w-100 px-4">
                <div class="col-md-6">
                    <h5>Deliverables</h5>
                    <?= $getPortfolio[0]->deliverables;?>
                </div>

                <div class="col-md-6">
                    <h5>Technologies</h5>
                    <?= $getPortfolio[0]->technology;?>
                </div>
            </div>

            <hr>

            <div class="col-md-12 mt-4 mb-4">
                <div class="card new-card py-5 px-5">
                    <div class="row w-100">
                        <div class="col-md-6">
                            <h5><strong>Interested to build awesome project like this? Let's started!</strong></h5>
                            <p class="mt-3">Let’s talk about your project. For starters, we’d like to come prepared for our initial conversation. Start request free consultation and we will be in touch to arrange your free, no-obligation, initial consultation.</p>
                        </div>
                        <div class="col-md-6 startnow">
                            <a href="<?= site_url('request_form');?>">Start Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4 mb-4">
                <h5>Share Via :</h5>
                <a href="https://api.whatsapp.com/send?text=<?= current_url();?>" data-action="share/whatsapp/share" target="_blank"><i class="fa fa-whatsapp"></i></a>
                <a href="http://www.facebook.com/sharer.php?u=<?php echo base_url(uri_string())?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/share?text=&url=<?php echo base_url(uri_string());?>" target="_blank"><i class="fab fa-twitter"></i></a>
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