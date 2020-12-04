<?php

function displayItem1() {
    global $articles;
    echo '<div class="card bg-light mb-3" style="width: 18rem;">
    <div class="card-header">'. $articles[0]['nom'] .'</div>
    <img src="'. $articles [0] ['photo'] .'" class="card-img-top" >
    <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">lorem ipsum lorem ipsumle</p>
        <a href="#" class="btn btn-primary">'. $articles [0] ['prix'] .'</a>
    </div>
    </div>';
}

function displayItem2() {
    global $articles;
    echo '<div class="card bg-light mb-3" style="width: 18rem;">
    <div class="card-header">'. $articles[1]['nom'] .'</div>
    <img src="'. $articles [1] ['photo'] .'" class="card-img-top" >
    <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">lorem ipsum lorem ipsumle</p>
        <a href="#" class="btn btn-primary">'. $articles [1] ['prix'] .'</a>
    </div>
    </div>';
}

function displayItem3() {
    global $articles;
    echo '<div class="card bg-light mb-3" style="width: 18rem;">
    <div class="card-header">'. $articles[2]['nom'] .'</div>
    <img src="'. $articles [2] ['photo'] .'" class="card-img-top" >
    <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">lorem ipsum lorem ipsumle</p>
        <a href="#" class="btn btn-primary">'. $articles [2] ['prix'] .'</a>
    </div>
    </div>';
}


?>