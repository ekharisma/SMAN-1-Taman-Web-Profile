<?php
    function truncateNews($berita) {
        if (str_word_count($berita, 0) > 20) {
            $words = str_word_count($berita, 2);
            $pos = array_keys($words);
            $berita = substr($berita, 0, $pos[20]) . '...';
        }
        return $berita;
    }
?>

<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/profil-1.jpg')?>" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/profil-2.jpg')?>" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/profil-3.jpg')?>" class="d-block w-100 img-fluid" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container-fluid">
        <h3 class='display text-center mt-3'>Berita dan Informasi</h3>
        <p class='lead text-center'>Berita dan Informasi mengenai SMA Negeri 1 Taman</p>
        <hr>
        <?php $id=1; foreach($data as $datum) :?>
        <h3 class='display'><?= $datum->judul?></h3>
        <p class='lead mb-3'>Ditulis pada : <?= $datum->tanggal?></p>
        <hr>
        <article>
            <?= truncateNews($datum->berita)?>
            <a href='<?= site_url('profil/berita/') . $datum->id ?>'>Selengkapnya</a>
        </article>
        <?php $id++; endforeach?>
    </div>
</body>