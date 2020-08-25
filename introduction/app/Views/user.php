<?=$this->extend('layouts/main')?>

<?=$this->section('content')?>
    <h1><?=$title?></h1>

    <div class="row">
        <?=$this->include('partials/sidebar2')?>

        <div class="col-12 col-sm-9">
            <div class="row">
                <?php foreach ($users as $user): ?>
                    <?=view_cell('\App\Libraries\User::userItem', ['title' => $user]);?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
<?=$this->endSection()?>