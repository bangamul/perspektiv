<section class="topbgnews"></section>

<!-- <section class="breadcrumbs">
    <div class="container f8"><a href="<?= site_url("portfolio");?>">Portfolio</a> / <?= $getPortfolio[0]->judul_portfolio;?></div>
</section> -->

<style>
    .title {
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
  color: #FF8F00;
  font-weight: 300;
  font-size: 24px;
  letter-spacing: 1px;
}

.description {
  text-align: center;
  color: #666;
  margin-bottom: 30px;
}

input[type="text"],
input[type="email"] {
  padding: 10px 20px;
  border: 1px solid #999;
  border-radius: 3px;
  display: block;
  width: 100%;
  margin-bottom: 20px;
  box-sizing: border-box;
  outline: none;
}
input[type="text"]:focus,
input[type="email"]:focus {
  border-color: #FF6F00;
}

input[type="radio"] {
  margin-right: 10px;
}

label {
  margin-bottom: 20px;
  display: block;
  font-size: 18px;
  color: #666;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  padding: 20px 0;
  cursor: pointer;
}
label:first-child {
  margin-bottom: 0;
  border-bottom: none;
}

.button,
.rerun-button {
  /*padding: 10px 20px;
  border-radius: 3px;
  background: #FF6F00;
  color: white;
  text-transform: uppercase;
  letter-spacing: 1px;
  display: inline-block;
  cursor: pointer;*/
    background: #ffdb58;
    color: #000;
    padding: 10px 60px;
    border-radius: 30px;
    text-decoration: none !important;
    text-transform: uppercase;
    display: inline-block;
    cursor: pointer;
}
.button:hover,
.rerun-button:hover {
    background: #ffdb58;
    color: #000;
    padding: 10px 60px;
    border-radius: 30px;
    text-decoration: none !important;
    text-transform: uppercase;
}
.button.rerun-button,
.rerun-button.rerun-button {
  border: 1px solid rgba(255, 255, 255, 0.6);
  margin-bottom: 50px;
  box-shadow: 0px 10px 15px -6px rgba(0, 0, 0, 0.2);
  display: none;
}

.text-center {
  text-align: center;
}

.modal-wrap {
  max-width: 600px;
  margin: 50px auto;
  -webkit-transition: -webkit-transform 300ms ease-in-out;
  transition: -webkit-transform 300ms ease-in-out;
  transition: transform 300ms ease-in-out;
  transition: transform 300ms ease-in-out, -webkit-transform 300ms ease-in-out;
}

.modal-header {
  height: 45px;
  background: white;
  border-bottom: 1px solid #ccc;
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-box-align: center;
          align-items: center;
}
.modal-header span {
  display: block;
  height: 12px;
  width: 12px;
  margin: 5px;
  border-radius: 50%;
  background: rgba(0, 0, 0, 0.2);
}
.modal-header span.is-active {
  background: rgba(0, 0, 0, 0.4);
  background: #FF8F00;
}

.modal-bodies {
  position: relative;
  -webkit-perspective: 1000px;
          perspective: 1000px;
}

@media(max-width: 600px) {
    .modal-body {
        padding: 40px !important;
    }
}

.modal-body {
  background: white;
  padding: 40px 100px;
  box-shadow: 0px 50px 30px -30px rgba(0, 0, 0, 0.3);
  margin-bottom: 50px;
  /*position: absolute;*/
  position: relative;
  top: 0;
  display: none;
  box-sizing: border-box;
  width: 100%;
  -webkit-transform-origin: top left;
          transform-origin: top left;
}
.modal-body.is-showing {
  display: block;
}

.animate-out {
  -webkit-animation: out 600ms ease-in-out forwards;
          animation: out 600ms ease-in-out forwards;
}

.animate-in {
  -webkit-animation: in 500ms ease-in-out forwards;
          animation: in 500ms ease-in-out forwards;
  display: block;
}

.animate-up {
  -webkit-transform: translateY(-500px) rotate(30deg);
          transform: translateY(-500px) rotate(30deg);
}

@-webkit-keyframes out {
  0% {
    -webkit-transform: translateY(0px) rotate(0deg);
            transform: translateY(0px) rotate(0deg);
  }
  60% {
    -webkit-transform: rotate(60deg);
            transform: rotate(60deg);
  }
  100% {
    -webkit-transform: translateY(800px) rotate(10deg);
            transform: translateY(800px) rotate(10deg);
  }
}

@keyframes out {
  0% {
    -webkit-transform: translateY(0px) rotate(0deg);
            transform: translateY(0px) rotate(0deg);
  }
  60% {
    -webkit-transform: rotate(60deg);
            transform: rotate(60deg);
  }
  100% {
    -webkit-transform: translateY(800px) rotate(10deg);
            transform: translateY(800px) rotate(10deg);
  }
}
@-webkit-keyframes in {
  0% {
    opacity: 0;
    -webkit-transform: rotateX(-90deg);
            transform: rotateX(-90deg);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
  }
}
@keyframes in {
  0% {
    opacity: 0;
    -webkit-transform: rotateX(-90deg);
            transform: rotateX(-90deg);
  }
  100% {
    opacity: 1;
    -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
  }
}

</style>

<section class="newsdetail-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mm-20 mmt-20">

                <div class="text-center">
                    <h1>Request Order</h1>
                    <p>Isi fill di bawah untuk membuat Request Order Perspektiv.id</p>
                </div>

                <div>
                    <?php if($this->session->flashdata('success')){ ?>
                        <div class="alert alert-success" id="success-alert">
                            <a href="" class="close" data-dismiss="alert">&times;</a>
                            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php }else if($this->session->flashdata('error')){  ?>
                        <div class="alert alert-danger" id="error-alert">
                            <a href="" class="close" data-dismiss="alert">&times;</a>
                            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="modal-wrap">
                    <div class="modal-header"><span class="is-active"></span><span></span><span></span></div>
                    <div class="modal-bodies">
                        <form action="<?php echo base_url()."front/do_requestform" ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body modal-body-step-1 is-showing">
                                <div class="title">Step 1</div>
                                <div class="description">Halo, Isi biodata pribadimu dulu ya.</div>
                                    <input type="text" class="form-control" placeholder="Name" id="nama" name="nama" required/>
                                    <input type="email" class="form-control" placeholder="Email" id="email" name="email" required/>
                                    <input type="text" class="form-control" placeholder="Mobile Number / WA Number" id="mobile" name="mobile" required/>
                                    <div class="text-center">
                                        <div class="button">Start</div>
                                    </div>
                            </div>
                            <div class="modal-body modal-body-step-2">
                                <div class="title">Step 2</div>
                                <div class="description">Service yang kamu inginkan</div>
                                    <select class="form-control mb-20" id="service" name="service">
                                        <option value="website">Website Development</option>
                                        <option value="mobile">Mobile Apps</option>
                                        <option value="design">Design Graphic</option>
                                        <option value="photo">Photography</option>
                                        <option value="seo">SEO</option>
                                        <option value="consultant">IT Consultant</option>
                                    </select>
                                    <textarea class="form-control mb-20" id="pesan" name="pesan" placeholder="tuliskan pesan untuk kami"></textarea>
                                    <div class="text-center fade-in">
                                        <div class="button">Next</div>
                                    </div>
                            </div>
                            <div class="modal-body modal-body-step-3">
                                <div class="title">Step 3</div>
                                <div class="description">Terima kasih telah mengisi form kami, Silahkan klik tombol kirim agar kami bisa proses Request Order kamu.</div>
                                <div class="text-center">
                                    <button class="btn btn-yellow" type="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center">
                    <div class="rerun-button">ReRun</div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- <script>
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
</script> -->

<script>
    $('.button').click(function(){
  var $btn = $(this),
      $step = $btn.parents('.modal-body'),
      stepIndex = $step.index(),
      $pag = $('.modal-header span').eq(stepIndex);

  if(stepIndex === 0 || stepIndex === 1) { step1($step, $pag); }
  else { step3($step, $pag); }
  
});


function step1($step, $pag){
console.log('step1');
  // animate the step out
  $step.addClass('animate-out');
  
  // animate the step in
  setTimeout(function(){
    $step.removeClass('animate-out is-showing')
         .next().addClass('animate-in');
    $pag.removeClass('is-active')
          .next().addClass('is-active');
  }, 600);
  
  // after the animation, adjust the classes
  setTimeout(function(){
    $step.next().removeClass('animate-in')
          .addClass('is-showing');
    
  }, 1200);
}


function step3($step, $pag){
console.log('3');

  // animate the step out
  $step.parents('.modal-wrap').addClass('animate-up');

  setTimeout(function(){
    $('.rerun-button').css('display', 'inline-block');
  }, 300);
}

$('.rerun-button').click(function(){
 $('.modal-wrap').removeClass('animate-up')
                  .find('.modal-body')
                  .first().addClass('is-showing')
                  .siblings().removeClass('is-showing');

  $('.modal-header span').first().addClass('is-active')
                          .siblings().removeClass('is-active');
 $(this).hide();
});

</script>