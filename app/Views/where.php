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
    <section class="container product-box py-5">
        <div class="row">
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/room.jpg') ?>" alt="Our room">
            </div>
            <div class="col-6">
                <p class="where-we-are-title mb-0">CIGBurger Paris</p>
                <p class="where-we-are-subtitle">Rua des hamburgers, 123 Paris</p>
                <p class="mb-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quibusdam nulla distinctio iusto ducimus dicta quaerat consequuntur repellendus vero aliquam deleniti, sapiente, cum nisi unde, numquam excepturi nobis atque magnam.
                </p>

                <div class="d-flex align-items-center mb-3">
                    <img src="<?= base_url('assets/images/icon_phone.png') ?>" alt="Phone">
                    <p class="where-we-are-subtitle ms-3">
                        <a class="nav-link" href="tel:+33123456789">+33 1 23 45 67 89</a>
                    </p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <img src="<?= base_url('assets/images/icon_email.png') ?>" alt="Email">
                    <p class="where-we-are-subtitle ms-3">
                        <a class="nav-link" href="mailto:cigburger@paris.com">cigburger@paris.com</a>
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- map -->
    <section class="container product-box py-5">
        <div class="row">
            <div class="col text-center">
                <img src="<?= base_url('assets/images/map.jpg') ?>" alt="Map">
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