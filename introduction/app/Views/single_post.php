<?=$this->extend('layouts/main')?>

<?=$this->section('content')?>
<h1><?=$title?></h1>


<div class="row">
    <?=$this->include('partials/sidebar')?>
    <div class="col-12 col-sm-9">
        <h5 class="card-title"><?=$title;?></h5>
        <p class="card-text"><?=(isset($content) ? $content : '');?></p>
        <?php if (isset($post)): ?>
        <a class="btn btn-primary btn-sm" href="<?=(isset($post) ? base_url('blog/edit/' . $post['post_id']) : '#')?>" role="button">Edit Post</a>
        <a class="btn btn-danger btn-sm" href="<?=(isset($post) ? base_url('blog/delete/' . $post['post_id']) : '#')?>" role="button">Delete Post</a>
        <?php endif?>
    </div>
</div>
<?=$this->endSection()?>