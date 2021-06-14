<?php
//url=http:/localhost:8000/uri
//uri=controleur&view


if (isset($_REQUEST['controlleur'])) {
    if ($_REQUEST['controlleur']=='security') {
        require_once ROUTE_DIR.'controlleur/security.php';
    }elseif($_REQUEST['controlleur']== 'joueur') {
        require_once ROUTE_DIR.'controlleur/joueur.php';
    }elseif($_REQUEST['controlleur']== 'admin'){
        require_once ROUTE_DIR.'controlleur/joueur.php';
    }else {
        require_once ROUTE_DIR.'views/security/connection.html.php';
    }
}else {
        require_once ROUTE_DIR.'views/security/connection.html.php';
    }


?>