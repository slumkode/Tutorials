<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h1><?= $title ?></h1>


<div class="row">
    <?= $this->include('partials/sidebar')?>
    <div class="col-12 col-sm-9">
        single post content goes here
    </div>
</div>

<?= $this->endSection() ?>