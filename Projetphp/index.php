<?php
require_once("model/bib.model.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php?view=1">Auteur</a></li>
            <li><a href="index.php?view=2">Exemplaire</a></li>
            <li><a href="index.php?view=3">Adherent</a></li>
            <li><a href="index.php?view=4">Ouvrage</a></li>
            <li><a href="index.php?view=5">Pret</a></li>
            <li><a href="index.php?view=6">Demande de pret</a></li>
        </ul>
    </div>
<?php 
if (isset($_GET['view'])){
    //$view=$_GET["view"];
    extract($_GET);
    if($view==1){
        require_once("view/auteur.html.php"); 
    }elseif ($view==2){
        require_once("view/exemplaire.html.php");
    }elseif ($view==3){
        require_once("view/adherent.html.php");
    }elseif ($view==4){
        require_once("view/ouvrage.html.php");
    }elseif ($view==5){
        require_once("view/pret.html.php");
    }elseif ($view==6){
        require_once("view/demande.html.php");
    }
}else{
    require_once("view/auteur.html.php");
}

?>
</body>
</html>