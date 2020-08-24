<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= (isset($meta_title) ? $meta_title : 'Codeigniter default title')  ?></title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="<?= base_url('blog') ?>">Blog</a></li>
            <li><a href="<?= base_url('blog/post') ?>">Single post URL</a></li>
        </ul>
    </nav>