
<section class="animated animatedFadeInUp fadeInUp">

    <section class="newsdetail-part-breadcrumb" style="background: url(<?= base_url("assets/images/news/" . $getNews[0]->image_name);?>);">
        <div class="overlaynews">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="aboutbread">News</h2>
                        <h3><?= $getNews[0]->judul_news;?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newsdetail-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                     <div class="infosidedetail">
                        <?php
                            $sampleDate = $getNews[0]->tanggal_news;
                            $convertDate = date("d - m - Y", strtotime($sampleDate));
                            print_r($convertDate);
                        ?>
                    </div>
                    <div class="infosidedetail">By <?= $getNews[0]->author_news;?></div>
                    <a href="https://api.whatsapp.com/send?text=<?= current_url();?>" data-action="share/whatsapp/share" target="_blank"><div class="infosidedetail"><i class="fas fa-share-alt"></i> Share</div></a>

                    <a href="http://www.facebook.com/sharer.php?u=<?php echo base_url(uri_string())?>" target="_blank"><div class="infosidedetail-facebook">Facebook</div></a>

                    <a href="https://twitter.com/share?text=&url=<?php echo base_url(uri_string());?>" target="_blank"><div class="infosidedetail-twitter">Twitter</div></a>
                    <a class="cls_copy_pg_action copyAction copy-action-btn" data-value="<?= current_url();?>"> <div class="infosidedetail"><i class="fas fa-link"></i> Copy Link</div></a>
                </div>
                <div class="col-md-9 mm-20 mmt-20">
                    <?= $getNews[0]->content_news;?>

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

</section>