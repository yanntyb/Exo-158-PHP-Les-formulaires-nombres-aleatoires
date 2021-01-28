<?php
/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()

http://php.net/manual/fr/function.mt-rand.php
*/
function alea($min,$max): int{
    return rand($min,$max);
}

if(isset($_POST["submit"])){
    if(isset($_POST["min"]) && isset($_POST["max"])){
        $min = intval(strip_tags($_POST["min"]));
        $max = intval(strip_tags($_POST["max"]));
        if($min > $max){
            echo alea($max,$min);
        }
        else{
            echo alea($min,$max);
        }
    }
}
