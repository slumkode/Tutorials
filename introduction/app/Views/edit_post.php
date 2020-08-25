<?=$this->extend('layouts/main')?>

<?=$this->section('content')?>

<h1><?=$title?></h1>

<div class="row">
    <?=$this->include('partials/sidebar')?>
    <div class="col-12 col-sm-9">
        <form method="post">
            <div class="form-group">
                <label for="post_title">Post Title</label>
                <input type="text" name="post_title" id="post_title" class="form-control"
                    placeholder="Post Title" value="<?= $post['post_title'] ?>">
            </div>
            <div class="form-group">
                <label for="post_content">Post Content</label>
                <textarea class="form-control" name="post_content" id="post_content" rows="3"><?= $post['post_content'] ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm">Update Post</button>
            </div>
        </form>
    </div>
    </div>

<?=$this->endSection()?>
