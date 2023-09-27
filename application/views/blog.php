

<section class="blog">
    <div class="container-fluid no-padding">
        <div>
            <div class="text_container" style="background: url(<?= base_url("assets/images/");?>blog-1.jpg);">
                <div><!--div that we want to hide-->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam blandit, eros id adipiscing congue, lorem ante sagittis elit, id malesuada nibh est sed orci</p>
                    <button class="btn btn-orange">Check Details</button>
                </div>
            </div><!--end div_text_container-->
        </div>
    </div>
</section>


<script type="text/javascript">
    $(document).ready(function(){
        $('.text_container').addClass("hidden");

        $('.text_container').click(function() {
            var $this = $(this);

            if ($this.hasClass("hidden")) {
                $(this).removeClass("hidden").addClass("visible");

            } else {
                $(this).removeClass("visible").addClass("hidden");
            }
        });
    });
</script>