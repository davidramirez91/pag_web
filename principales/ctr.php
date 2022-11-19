<?php
class Mcontrolador{
    public function plantilla(){
        include "templates/layout.php";
    }
    public function enlaceC($enlaces){
        #$enlaces = $_GET["accion"];
        return "principales/".$enlaces.".php";
    }
    public function enlaceS($enlaces3){
        #$enlaces = $_GET["accion"];
        return "secundarios/"."$enlaces3".".php";
    }
    public function enlaceIm($enlaces2){
        return "static/img/pagos/"."$enlaces2".".png";
    }
}
?>