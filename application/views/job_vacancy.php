
<section class="jobvacancy">
    <div class="container">
        <h2 class="fwhite"><span class="funder">Job</span> <span class="fyellow">Vacancy</span></h2>
        <div>
            <div class="mt-40">
                <ul class="nav flex-column verticalnav">

                    <?php foreach ($getJobVacancy as $row) { ?>
                    <li class="nav-item"><a class="nav-link" href="#<?= $row->job_slug;?>" data-toggle="collapse" aria-expanded="false" aria-controls="<?= $row->job_slug;?>">
                        <div class="jobvc">
                            <h4>Position</h4>
                            <h3><?= $row->judul_job;?></h3>
                            <h5><?= $row->lokasi;?></h5>
                        </div>
                    </a>
                        <div class="collapse p28" id="<?= $row->job_slug;?>">
                            <?= $row->isi_job;?>
                        </div>
                    </li>
                    <?php  } ?>
                    
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
    $(function() {
      $('#vacancy').find('.navbar-light').addClass('navbar-dark');
    });
</script>