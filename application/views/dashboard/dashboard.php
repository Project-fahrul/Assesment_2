<section class="content" style="position: relative;">
    <div class="card" style="border-top: 3px solid #D5D9E0; background-color: white; margin-bottom: 0px; box-shadow: none;">
        <div class="card-header clear-after" style="display: flex; justify-content: space-between; align-items: center;">
            <h3 class="card-title d-block">Biodata</h3>
        </div>
    </div>
    <div class="card-body" style="background-color: white;">
        <p style="margin: 0 2px;">NIM: <?php echo $mhs->nim?></p>
        <p style="margin: 0 2px;">Name: <?php echo $mhs->nama?></p>
        <p style="margin: 0 2px;">Kelas: <?php echo $mhs->kelas?></p>
        <div style="max-width: 300px; margin-top: 10px;">
            <img src="<?php echo $this->config->config['base_url']."asset/foto/". $mhs->foto?>" alt="" width="100%">
        </div>
    </div>
</section>