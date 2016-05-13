<?php
// inclusion du fichier de definition des pages
include('includes/data.php');
define('PAGE_PAR_DEFAUT','teletubbies');
// test si la page demandee existe
if(isset($_GET['p']) && isset($pages[$_GET['p']])){
    $pageCourante = $_GET['p'];
}else {
    header("HTTP/1.0 404 Not Found");
    $pageCourante = PAGE_PAR_DEFAUT;
}
// generation de l'en-tete HTML
include('includes/header.php');
// generation du H1 et du body
?>
<h1><?=$pages[$pageCourante]['h1'];?></h1>
<?=$pages[$pageCourante]['body'];?>
<span class="label <?=$pages[$pageCourante]['span-class'];?>"><?=$pages[$pageCourante]['span-text'];?></span>
<?php
// recuperation de l'image de footer
$image = $pages[$pageCourante]['img'];
include('includes/footer.php');
?>
