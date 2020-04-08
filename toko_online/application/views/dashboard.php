<div class="container-fluid">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url() ?>assets/img/slider1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url() ?>assets/img/slider1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url() ?>assets/img/slider1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row text-center mt-3 ">
        <?php foreach ($barang as $brg) : ?>
            <div class=" card ml-3" style="width: 228px; height:310px;">
                <img src="<?php echo base_url('/assets/uploads')   . $brg->gambar ?> " class="card-img-top"><br>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                    <small><?php echo $brg->keterangan ?></small><br>
                    <span class="badge badge-pill badge-success">Rp. <?php echo $brg->harga ?></span>

                    <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg
                        ->id_brg, '<div class= "btn btn-sm btn-primary"> Tambah ke Keranjang </div>') ?>

                    <a href="#" class="btn btn-success">Detail</a>

                </div>

            </div>
    </div>
<?php endforeach; ?>
</div>

</div>