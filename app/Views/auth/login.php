<?= $this->extend('layouts/auth/default') ?>

<?= $this->section('content') ?>
<div class="login-box">

    <div class="text-center mb-3">
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
    </div>


    <?= form_open('login_submit', ['novalidate' => true]) ?>

    <div class="mb-3">
        <select name="select_restaurant" id="select-restaurant" class="form-select" >
            <option value="" <?= (empty(old("select_restaurant"))) ? "selected" : "" ?>>Selecione o restaurante</option>
            <?php foreach ($restaurants as $restaurant) : ?>
                <option value="<?= Encrypt($restaurant->restaurant_id)  ?>" <?= ($restaurant->restaurant_id == Decrypt(old('select_restaurant'))) ? "selected" : '' ?> ><?= $restaurant->name ?></option>
            <?php endforeach; ?>    
        </select>
    </div>

    <hr>

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
        <?= DisplayError($errors) ?>
    <?php endif; ?>


    <div class="text-center">
        <p>Não tem conta? <a href="#" class="login-link">Cadastre-se</a></p>
        <p><a href="#" class="login-link">Reperar senha</a></p>
    </div>
</div>
<?= $this->endSection() ?>