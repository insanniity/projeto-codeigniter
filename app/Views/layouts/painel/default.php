<!DOCTYPE html>
<html lang="pt-br">

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
    <link rel="stylesheet" href="<?= base_url('assets/css/layout.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>
    <?= $this->include('layouts/painel/navbar') ?>
    <!-- main -->
    <section class="d-flex">
        <?= $this->include('layouts/painel/menu') ?>
        <div class="content p-4 w-100">
            <?= $this->renderSection('content') ?>
        </div>
    </section>
    <?= $this->include('layouts/painel/footer') ?>
    <!-- bootstrap -->
    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
    <script>
        document.querySelector(".btn-main-menu").addEventListener("click", () => {
            document.querySelector(".main-menu").classList.toggle("show");
            document.querySelector(".content").classList.toggle("show");
        })
    </script>
</body>

</html>