<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?= view('home/_hero') ?>
<div class="divider"></div>
<?= view('home/_formations') ?>
<div class="divider"></div>
<?= view('home/_adhesion') ?>
<div class="divider"></div>
<?= view('home/_projets') ?>
<div class="divider"></div>
<?= view('home/_entreprises') ?>
<?= view('home/_cta_band') ?>
<?= view('home/_contact') ?>

<?= $this->endSection() ?>
