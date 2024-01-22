<?= $this->extend('layouts/painel/default') ?>

<?= $this->section('content') ?>

<div class="mb3">
    <h1 class="h3">Produtos</h1>
    <a href="<?= site_url("/painel/produtos/create") ?>" class="btn btn-outline-secondary"><i class="fa-solid fa-plus me-2"></i> Produto</a>
</div>

<div class="text-center mt-5">
    <h4 class="opacity-50 mb-3">Não existe produtos disponiveis.</h4>
    <span> Clique <a href="<?= site_url("/painel/produtos/create") ?>">aqui</a> para adicionar o primeiro produto do restaurante </span>
</div>


<?= $this->endSection() ?>