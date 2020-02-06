<?php
namespace loteria;

use loteria\Game\MegaSena;
use loteria\Game\LotoFacil;
use loteria\Game\LotoMania;


/**
 * Class Loteria | instancia dos jogos 
 */
class Loteria
{
    public static function megaSena()
    {
        return new MegaSena();
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