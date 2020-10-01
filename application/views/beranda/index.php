<body>
    <div class='container-fluid'>
        <section class='row'>
            <div class='col'>
                <h1 class='display'>Sivitas Akademik Smanita ?</h1>
                <p class='lead'>Mari masuk</p>
                <form method='POST' action='' style="width: 18rem;">
                    <div class='form-group'>
                        <label for='username'>Username</label>
                        <input type='text' name='username' class='form-control' id='username' placeholder='Username Anda'>
                        <label for='password'>Password</label>
                        <input type='password' name='password' class='form-control' id='password' placeholder='Password Anda'>
                        <input type='submit' class='btn btn-primary btn-lg btn-block mt-3' name='masuk' value='Submit'>
                    </div>
                </form>
            </div>
            <div class='col'>
                <img src=<?= base_url("assets/img/smanita.jpeg")?> class='img-fluid'/>
            </div>
        </section>
    </div>
</body>