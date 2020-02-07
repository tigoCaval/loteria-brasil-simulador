<?php
namespace loteria;

use loteria\Game\Quina;
use loteria\Game\MegaSena;
use loteria\Game\LotoFacil;
use loteria\Game\LotoMania;
  
/**
 * Class Loteria | instancia dos jogos 
 */
class Loteria
{

    private function __construct()
    {

    } 

    public static function megaSena()
    {
        return new MegaSena();
    }

    public static function quina()
    {
        return new Quina();
    }

    public static function lotoMania()
    {
        return new LotoMania();
    }

    public static function lotoFacil()
    {
        return new LotoFacil();
    }

}