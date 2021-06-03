<?php
function open_session(){
    if(session_status()==PHP_SESSION_NONE){
        session_start();
    }
}
function destroy_session() {
    session_destroy();
}
function est_connecter(): bool{
    return est_connecter()&& $_SESSION['userConnection']['role']=='Role_admin';
}
?>