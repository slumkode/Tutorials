<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h1><?= $title ?></h1>

<div class="row">
    <?= $this->include('partials/sidebar') ?>
    <div class="col-12 col-sm-9">
        <form action="<?= base_url('blog/new') ?>" method="post">
            <div class="form-group">
                <label for="post_title">Post Title</label>
                <input type="text" name="" id="post_title" name="post_title" class="form-control"
                    placeholder="Post Title">
            </div>
            <div class="form-group">
                <label for="post_content">Post Content</label>
                <textarea class="form-control" name="post_content" id="post_content" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm">Create Post</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>