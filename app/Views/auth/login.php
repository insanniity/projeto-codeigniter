<?= $this->extend('layouts/auth/default') ?>

<?= $this->section('content') ?>
<div class="login-box">

    <div class="text-center mb-3">
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
    </div>


    <?= form_open('login_submit', ['novalidate' => true]) ?>
    <!-- <div class="mb-3">
        <p class="mb-2">Restaurante</p>
        <select name="select-restaurant" id="select-restaurant" class="form-select">
            <option value=""></option>
            <option value="">Restaurante 1</option>
            <option value="">Restaurante 2</option>
            <option value="">Restaurante 3</option>
        </select>
    </div> -->

    <!-- <hr> -->

    <div class="mb-3">
        <input class="form-control" type="text" id="text-username" name="username" placeholder="Usuário" value="<?= old('username') ?>">
    </div>
    <div class="mb-3">
        <input class="form-control" type="password" id="text-password" name="password" placeholder="Senha" value="<?= old('password') ?>">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn-login" value="ENTRAR">
    </div>
    <?= form_close() ?>

    <?php if (isset($errors)) : ?>
        <?php foreach ($errors as $error) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $error ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>


    <div class="text-center">
        <p>Não tem conta? <a href="#" class="login-link">Cadastre-se</a></p>
        <p><a href="#" class="login-link">Reperar senha</a></p>
    </div>
</div>
<?= $this->endSection() ?>