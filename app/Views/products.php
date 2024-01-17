<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIGBurger</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
    <!-- app.css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>
<body>

    <!-- nav -->
    <nav class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-3">
                <!-- logo -->
                <a href="<?= site_url('/') ?>">
                    <img src="<?= base_url('assets/images/logo.png') ?>" alt="CIGBurger Logo">
                </a>
            </div>
            <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
                <div><a class="nav-link ms-5" href="<?= site_url('/') ?>">Início</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('products') ?>">Produtos</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('where') ?>">Onde estamos?</a></div>
            </div>
        </div>
    </nav>



    <!-- main -->
    <section class="container">
        <div class="col">

            <!-- burger 01 -->
            <div class="row mb-5 product-box">
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_01.png') ?>" alt="Burger 1">
                </div>
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger 01</h1>
                    <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis praesentium quaerat sint deleniti officiis quas minus commodi ipsa ducimus, alias quis, dolore fugit repellat saepe, architecto omnis consequuntur quibusdam sequi!
                    Quia cum assumenda vel in exercitationem inventore architecto perferendis asperiores sapiente optio adipisci illo, incidunt recusandae dolorem, vero nemo dolorum totam itaque sit! Dolorem rem aliquam voluptatem ipsam nam expedita?</p>
                    <h2 class="mt-3 product-text-color">15,00€</h2>
                </div>
            </div>

            <!-- burger 02 -->
            <div class="row mb-5 product-box">
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger 02</h1>
                    <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis praesentium quaerat sint deleniti officiis quas minus commodi ipsa ducimus, alias quis, dolore fugit repellat saepe, architecto omnis consequuntur quibusdam sequi!
                    Quia cum assumenda vel in exercitationem inventore architecto perferendis asperiores sapiente optio adipisci illo, incidunt recusandae dolorem, vero nemo dolorum totam itaque sit! Dolorem rem aliquam voluptatem ipsam nam expedita?</p>
                    <h2 class="mt-3 product-text-color">14,00€</h2>
                </div>
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_02.png') ?>" alt="Burger 2">
                </div>
            </div>

            <!-- burger 03 -->
            <div class="row mb-5 product-box">
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_03.png') ?>" alt="Burger 3">
                </div>
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger 03</h1>
                    <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis praesentium quaerat sint deleniti officiis quas minus commodi ipsa ducimus, alias quis, dolore fugit repellat saepe, architecto omnis consequuntur quibusdam sequi!
                    Quia cum assumenda vel in exercitationem inventore architecto perferendis asperiores sapiente optio adipisci illo, incidunt recusandae dolorem, vero nemo dolorum totam itaque sit! Dolorem rem aliquam voluptatem ipsam nam expedita?</p>
                    <h2 class="mt-3 product-text-color">12,00€</h2>
                </div>
            </div>

            <!-- burger 04 -->
            <div class="row mb-5 product-box">
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger 04</h1>
                    <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis praesentium quaerat sint deleniti officiis quas minus commodi ipsa ducimus, alias quis, dolore fugit repellat saepe, architecto omnis consequuntur quibusdam sequi!
                    Quia cum assumenda vel in exercitationem inventore architecto perferendis asperiores sapiente optio adipisci illo, incidunt recusandae dolorem, vero nemo dolorum totam itaque sit! Dolorem rem aliquam voluptatem ipsam nam expedita?</p>
                    <h2 class="mt-3 product-text-color">9,00€</h2>
                </div>
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_04.png') ?>" alt="Burger 4">
                </div>
            </div>

        </div>
    </section>



    <!-- social networks -->
    <footer class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-6 d-flex flex-row justify-content-center">
                <div class="text-center mx-4">
                    <a href="#">
                        <img src="<?= base_url('assets/images/facebook.png') ?>" alt="Facebook">
                    </a>
                </div>
                <div class="text-center mx-4">
                    <a href="#">
                        <img src="<?= base_url('assets/images/instagram.png') ?>" alt="Instagram">
                    </a>
                </div>
                <div class="text-center mx-4">
                    <a href="#">
                        <img src="<?= base_url('assets/images/whatsapp.png') ?>" alt="Whatsapp">
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col text-center">
                <h6>Todos os direitos reservados &copy; <?= date('Y') ?></h6>
            </div>
        </div>
    </footer>

    <!-- bootstrap -->
    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>