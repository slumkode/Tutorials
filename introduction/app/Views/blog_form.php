<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog: blog form</title>
</head>

<body>
    <?= base_url(); ?>
    <form action="/admin/blog/new" method="post">
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="desc">Description</label>
            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="create">
    </form>
</body>

</html>