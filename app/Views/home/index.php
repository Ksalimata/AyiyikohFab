<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?= view('home/_hero') ?>
<div class="divider"></div>
<?= view('home/_about') ?>
<div class="divider"></div>
<?= view('home/_contact') ?>
<?php /* view('home/_formations') */ ?>
<?php /* view('home/_adhesion') */ ?>
<?php /* view('home/_projets') */ ?>
<?php /* view('home/_cta_band') */ ?>

<?= $this->endSection() ?>
