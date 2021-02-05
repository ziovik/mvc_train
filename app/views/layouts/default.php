<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$this->siteTitle();  ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="<?=PROOT?>/css/bootstrap.min.css"  rel="stylesheet" media="screen" charset="utf-8">
    <link href="<?=PROOT?>/css/custom.css"  rel="stylesheet" media="screen" charset="utf-8">

    <script src="<?=PROOT?>/js/jQuery-2.2.4.min.js" ></script>
    <script src="<?=PROOT?>/js/bootstrap.min.js" ></script>

    <?= $this->content('head');  ?>
</head>
<body>
    <?= $this->content('body');  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>