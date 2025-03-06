<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-md-4">
        <h2 class="text-center">Login</h2>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <form action="<?= base_url('/login') ?>" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">USER ID</label>
                <input type="text" class="form-control" name="userId" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="userPassword" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
