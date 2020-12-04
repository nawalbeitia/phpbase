


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
        <h1 class="display-4 font-weight-bold">NOM  ENTREPRISE</h1>
        <p class="font-italic mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing .</p>
    </div>
</div>
<!-- Fin  -->

<!-- For Demo Purpose -->
<div class="container py-5">
    <h2 class="h3 font-weight-bold">Liste articles</h2>
</div>
<!-- Fin  -->


<?php
    
    $articles = [[ 
        'nom'=> 'sac', 
        'prix'=>'5 euros', 
        'photo'=>'https://cdn.pixabay.com/photo/2016/11/23/18/12/bag-1854148__340.jpg'
    ],
    [
        'nom'=> 'montre', 
        'prix'=>'15 euros', 
        'photo'=>'https://cdn.pixabay.com/photo/2014/07/31/23/00/wristwatch-407096__340.jpg'
    ],
    [
        'nom'=> 'casquette', 
        'prix'=>'25 euros', 
        'photo'=>'https://cdn.pixabay.com/photo/2017/07/21/14/28/hat-2525910__340.png'
    ]];

    foreach ($articles as $article)
    {
        echo '<div class="card bg-light mb-3" style="width: 18rem;">
        <div class="card-header">'. $article['nom'] .'</div>
        <img src="'. $article ['photo'] .'" class="card-img-top" >
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">lorem ipsum lorem ipsumle</p>
            <a href="#" class="btn btn-primary">'. $article['prix'] .'</a>
        </div>
        </div>';


        /*echo '<div style ="border-width:2px;border-color=pink">';
        echo  $article['nom'].' vaut '.$article['prix']. 'est' .$article ['photo'];
        
        echo '<img src =' . $article ['photo'] .' >';
        echo '</div>';*/
    }   

?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

