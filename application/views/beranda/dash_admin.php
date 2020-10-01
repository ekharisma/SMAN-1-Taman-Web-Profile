<body>
    <div class="container d-flex justify-content-center mt-5">
        <div class="card text-center" style="width: 18rem;">
        <?= '<img class="img-fluid rounded-circle" src="data:image/jpg;base64,'.base64_encode( $_SESSION['user']['foto'] ).'"/>'; ?>
            <div class="card-body">
                <h5 class="card-title"><?= $_SESSION['user']['nama']?></h5>
                <p class="card-text">Kelas : </p>
                <a href="logout" class="btn btn-danger">Log out</a>
            </div>
        </div>
    </div>
</body>