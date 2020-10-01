<body>
    <?php foreach ($data as $datum) : ?>
    <div class="container-fluid">
        <a class='btn btn-primary' href='<?= site_url('profil')?>'>< Kembali</a>
        <h1 clas='display'><?= $datum->judul?></h1>
        <?= '<img class=img-fluid src="data:image/jpg;base64,'.base64_encode( $datum->image ).'"/>'; ?>
        <p class='lead'>Dibuat pada : <?=$datum->tanggal?></p>
        <hr>
        <p><?=$datum->berita?></p>
    </div>
    <?php endforeach ?>
</body>