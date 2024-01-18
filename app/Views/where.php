<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

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




<?= $this->endSection() ?>