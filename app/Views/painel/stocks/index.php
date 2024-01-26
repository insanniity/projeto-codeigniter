<?= $this->extend('layouts/painel/default') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
        <?php if (isset($errors)) : ?>
        <?= DisplayError($errors) ?>
    <?php endif; ?>

            <h3>Produtos</h3>

            <?php if (empty($products)) : ?>
                <div class="text-center mt-5">
                    <h4 class="opacity-50 mb-3">Não existem produtos disponíveis.</h4>
                    <span>Clique <a href="<?= site_url('/painel/produtos/create') ?>">aqui</a> para adicionar o primeiro produto do restaurante.</span>
                </div>
            <?php else : ?>

                <?php foreach($products as $product) : ?>
                    <?= view('components/stock_product', ['product' => $product]) ?>
                <?php endforeach; ?>

            <?php endif; ?>

        </div>
    </div>
</div>

<?= $this->endSection() ?>