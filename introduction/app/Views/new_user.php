<?=$this->extend('layouts/main')?>

<?=$this->section('content')?>

<h1><?=$title?></h1>

<div class="row">
    <?=$this->include('partials/sidebar2')?>
    <div class="col-12 col-sm-9">
        <form action="<?=base_url('user/new')?>" method="post">
            <div class="form-group">
                <label for="user_email">User Email</label>
                <input type="email" name="user_email" id="user_email" class="form-control"
                    placeholder="User Email">
            </div>
            <div class="form-group">
                <label for="user_password">User Password</label>
                <input type="password" name="user_password" id="user_password" class="form-control" placeholder="User Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm">Create User</button>
            </div>
        </form>
    </div>
    </div>

<?=$this->endSection()?>
