<?php
//require'../pages/profil/header.html';
require '../app/autoloader.php';
//require '../app/app.php';

 App\autoloader::register();


if (isset($_GET['p'])) {
    $p=$_GET['p'];

}

else {

    $p='home';
}

ob_start();
//mb_internal_encoding('UTF-8');
switch($p){
    case 'home':
        require '../pages/acceuil.php';
        break;
    case "blog":
        require '../pages/blog.php';
        break;
    case "galerie":
        require '../pages/portfolio.php';
        break;
    case 'services':
        require '../pages/services.php';
        break;
    case 'about':
        require '../pages/about.php';
        break;
    case 'contact':
        require '../pages/contact.php';
        break;
    default :
        require '../pages/acceuil.php';

}


$content = ob_get_clean();
require '../pages/template/default.php';

