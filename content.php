<?php
if(isset($_GET['module'])) {
    $modul = $_GET['module'];

    if($modul=="homepage") {
        include "jumbotron.php";
    }
    elseif($modul=="profil") {
        include "profil.php";
    }
    elseif($modul=="hometown") {
        include "hometown.php";
    }
    elseif($modul=="food") {
        include "food.php";
    }
    elseif($modul=="tourist") {
        include "tourist.php";
    }
}
else {
    include "jumbotron.php";
}
?>