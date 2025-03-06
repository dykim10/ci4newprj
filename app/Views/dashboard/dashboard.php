<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<h1>Dashboard</h1>
<p>Welcome, <?= session()->get('username') ?>!</p>
<p>This is a secure area only accessible after login.</p>
<?= $this->endSection() ?>
