
<h1><?= $title ?></h1>

<div>
    <?php foreach($posts as $post): ?>
        <div>
            <h3><?= $post; ?></h3>
            <img src="<?= base_url('assets/images/sample.jpeg') ?>" style="width: 200px; height: auto;" alt="sample">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero perferendis esse, quas atque ipsum obcaecati dolorum quod sed numquam commodi laboriosam non vitae maiores tempore recusandae laborum, ratione veniam modi?</p>
        </div>
    <?php endforeach; ?>
</div>