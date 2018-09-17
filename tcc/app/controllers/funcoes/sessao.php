<?php
function esta_logado(){
    if (isset($_SESSION['logado']) && $_SESSION['logado'] == true){
        return true;
    } else {
        return false;
    }
}

function e_admin(){
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == true){
        return true;
    } else {
        return false;
    }
}