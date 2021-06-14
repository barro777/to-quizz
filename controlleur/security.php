<?php

if ( $_SERVER['REQUEST_METHOD']=="GET"){
    if (isset($_GET['views'])) {
        if ($_GET['views']=='connection') {
            require_once ROUTE_DIR.'/views/security/connection.html.php';
        }elseif ($_GET['views']=='inscription') {
            require_once ROUTE_DIR.'/views/security/inscription.html.php';
        }
    }else {
        require_once ROUTE_DIR.'/views/security/connection.html.php';
       }
}elseif($_SERVER['REQUEST_METHOD']=="POST"){
    if (isset($_POST['action'])) {
        if ($_POST['action']=='connection') {
            require_once ROUTE_DIR.'views/security/connection.html.php';
        }elseif ($_POST['action']=='inscription') {
            require_once ROUTE_DIR.'views/security/inscrition.html.php';
        }
    }else {
        require_once ROUTE_DIR.'/views/security/connection.html.php'; 
    } 
}

        



function inscription($data):void{
    $arrayError=array();
    extract($data);
    validation_password($valeur,'pass',$arrayError);
    validation_email($valeur,'login',$arrayError);
    valid_name($valeur,'name',$arrayError);
    
}
function connection($log, $pass):void{
    $arrayError=array();
    validation_password($log,'pass',$pass);
    validation_email($log,'login',$pass);
   if(form_valid($arrayError)){
       $user= find_login($log,$pass);
       $arrayError['arrayUser'] = 'login or passwoerd is incorrect';
       $_SESSION['arrayError'] = $arrayError;
            header("location:".WEB_ROUTE.'controlleur=securyity&views=connection');
   } else {
    $_SESSION['arrayError']=$arrayError;
    header("location:".WEB_ROUTE.'controlleur=securyity&views=inscription');
}
}

?>