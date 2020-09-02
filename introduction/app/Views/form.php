<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div class="container" style="margin-top: 20px;">


        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>Form Validation</legend>
            </div>
            <?php if (isset($validation)):?>
            <div class="text-danger">
                <?= $validation->listErrors(); ?>
            </div>
            <?php endif; ?>
            <!-- Email Input -->
            <div class="form-group">
                <label for="email" class="col-sm-2">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" id="email" class="form-control" value="<?= set_value('email') ?>"
                        title="Email">
                </div>

            </div>
            <!-- End Email Input -->

            <!-- Password Input -->
            <div class="form-group">
                <label for="password" class="col-sm-2">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" id="password" class="form-control" title="Password">
                </div>
            </div>
            <!-- End Password Input -->

            <!-- Category Input -->
            <div class="form-group">

                <label for="category" class="col-sm-2">Category</label>
                <div class="col-sm-10">
                    <select name="category" id="category" class="form-control">
                        <option value="">-- Select One --</option>
                        <?php foreach ($categories as $cat): ?>
                        <option <?= set_select('category', $cat, true) ?> value="<?= $cat ?>"><?= $cat ?></option>
                        <!-- <option <?= set_select('category', $cat) ?> value="<?= $cat ?>"><?= $cat ?></option> -->
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- End Category Input -->

            <!-- Date -->
            <div class="form-group">
                <label for="date" class="col-sm-2">Date</label>
                <div class="col-sm-10">
                    <input type="date" name="date" id="date" class="form-control" value="<?= set_value('date') ?>">
                </div>
            </div>

            <pre>
                <?= print_r($_POST) ?>
            </pre>


            <!-- Submit button -->
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <!-- End Submit Button -->
        </form>

    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>