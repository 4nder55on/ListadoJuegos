<?php 

class ControllerGames{

    static public function ObtenerJuegos($plataform){

        $listado = ModelGames::ObtenerJuegosJson($plataform);

        $listado = json_decode($listado, true);

        return $listado;

    }

}