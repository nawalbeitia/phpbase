
<?php
  $nom = 'Sac';
  $prix = 19;
  $photo = 'https://cdn.pixabay.com/photo/2016/11/23/18/12/bag-1854148__340.jpg';
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<!-- Bootstrap Static Header -->
<div style="background: url(https://i.postimg.cc/3N7wnb75/background.jpg)" class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold">Bootstrap static header</h1>
        <p class="font-italic mb-0">Using simple jumbotron-style component, create a nice Bootstrap 4 header with a background image.</p>
        <p class="font-italic">Snippe by
            <a href="https://bootstrapious.com" class="text-white">
                <u>Bootstrapious</u>
            </a>
        </p>
        <a href="#" role="button" class="btn btn-primary px-5">See All Features</a>
    </div>
</div>

<!-- For Demo Purpose -->
<div class="container py-5">
    <h2 class="h3 font-weight-bold">Some demo content</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
            <p class="font-italic text-muted">Lorem ipsum dolor sit aud edolor.</p>
            <p class="font-italic text-muted">Lorem ipsum do. Ut enim ad miure dolor.</p>
        </div>
        <div class="col-lg-8">
            <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur <strong class="font-weight-bold text-dark">adipisicing elit, sed </strong>do laborum.</p>
        </div>
    </div>
</div>

<?php


?>

<div class="card" style="width: 18rem;">
    <img src="<?php echo $photo ?>" class="card-img-top" alt=<?php echo $nom ?> >
    <div class="card-body">
        <h5 class="card-title"><?php echo $nom ?></h5>
        <a href="#" class="btn btn-primary"><?php echo $prix ?></a>
    </div>
</div>

<?php


?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>


