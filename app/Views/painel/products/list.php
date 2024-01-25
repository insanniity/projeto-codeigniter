<?= $this->extend('layouts/painel/default') ?>

<?= $this->section('content') ?>

<!-- new product -->
<div class="mb-3">
    <a href="<?= site_url('/products/new') ?>" class="btn btn-outline-secondary"><i class="fa-solid fa-plus me-2"></i>Novo produto</a>
</div>

<!-- products list -->
<?php if(empty($products)):  ?>
    <div class="text-center mt-5">
        <h4 class="opacity-50 mb-3">Não existem produtos disponíveis.</h4>
        <span>Clique <a href="<?= site_url('/products/new') ?>">aqui</a> para adicionar o primeiro produto do restaurante.</span>
    </div>
<?php else: ?>
    <div class="container-fluid mb-5">
        <div class="row">
            <?php foreach($products as $product) : ?>
                <?= view('components/product', ['product' => $product]) ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>


<?= $this->endSection() ?>