
<section class="team-part-1">
    <div class="container">
        <div class="">
            <img src="<?= base_url("assets/images/");?>mobilelegends.png" class="img100">
        </div>
        <p class="text-center"><?= $getMemberFrontkontent[0]->konten_game;?></p>
    </div>
</section>

<section class="bgblack">
    <div class="container padbot-40">
        <div class="row">
            <div class="col-md-3 mb-3">
                <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                    <?php 
                        $i=1;
                        foreach ($getMemberFrontkontent as $row) { 
                    ?>
                    <li class="nav-item text-center bg-yellow-nav">
                        <a class="nav-link active" id="team-tab" data-toggle="tab" href="#team" role="tab" aria-controls="team" aria-selected="true"><?= $row->nama_user;?><br> <?= $row->nama_lengkap;?></a>
                    </li>
                    <?php } ?>
                    <?php 
                        $i=1;
                        foreach ($getMemberFrontfirst as $row) { 
                    ?>
                    <li class="nav-item text-center bg-yellow-nav posrel">
                        <span class="captain"><img src="<?= base_url("assets/images/");?>captain.png" class="img100"></span>
                        <a class="nav-link" id="team1-tab" data-toggle="tab" href="#team1" role="tab" aria-controls="team1" aria-selected="false"><span class="teamname">"<?= $row->nama_user;?>"</span> <br> <?= $row->nama_lengkap;?></a>
                    </li>
                    <?php } ?>
                    <?php 
                        $i=2;
                        foreach ($getMemberFront as $row) { 
                    ?>
                    <li class="nav-item text-center bg-yellow-nav">
                        <a class="nav-link" id="team2-tab" data-toggle="tab" href="#team<?php echo $i++;?>" role="tab" aria-controls="team2" aria-selected="false">
                            <span class="teamname">"<?= $row->nama_user;?>"</span> <br> 
                            <?= $row->nama_lengkap;?></a>
                    </li>
                    <?php } ?>

                </ul>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-9">
                <div class="tab-content" id="myTabContent">
                    <?php 
                        $i=1;
                        foreach ($getMemberFrontkontent as $row) { 
                    ?>
                    <div class="tab-pane fade show active" id="team" role="tabpanel" aria-labelledby="team-tab">
                        <img src="<?= base_url("assets/images/gamemember/" . $row->image_name);?>" class="img100">
                    </div>
                    <?php } ?>
                    <?php 
                        $i=1;
                        foreach ($getMemberFrontfirst as $row) { 
                    ?>
                    <div class="tab-pane fade" id="team1" role="tabpanel" aria-labelledby="team1-tab">
                        <img src="<?= base_url("assets/images/gamemember/" . $row->image_name);?>" class="img100">
                    </div>
                    <?php } ?>
                    <?php 
                        $i=2;
                        foreach ($getMemberFront as $row) { 
                    ?>
                    <div class="tab-pane fade" id="team<?php echo $i++;?>" role="tabpanel" aria-labelledby="team2-tab">
                        <img src="<?= base_url("assets/images/gamemember/" . $row->image_name);?>" class="img100">
                    </div>
                    <?php } ?>

                </div>
            </div>
            <!-- /.col-md-8 -->
        </div>



    </div>
    <!-- /.container -->
</section>
