

<section class="about-part-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="aboutbread">Our Staff</h2>
            </div>
        </div>
    </div>
</section>

<section class="staff-part-1">
    <div class="container">

        <div class="row">
            <?php foreach ($getStaffFront as $row) { ?>
            <div class="col-md-4">
                <div class="content">
                    <a>
                        <div class="content-overlay"></div>
                        <img class="content-image" src="<?= base_url("assets/images/staff/" . $row->image_name);?>">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title"><?= $row->nama_staff;?></h3>
                            <p class="content-text"><?= $row->jabatan;?></p>
                        </div>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</section>
