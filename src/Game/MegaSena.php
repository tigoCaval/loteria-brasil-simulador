<?php
namespace loteria\Game;

use loteria\Contract\GameInterface;

/**
 * Class MegaSena | Regra do jogo Mega Sena
 */
class MegaSena implements GameInterface
{
    const MEGASENA = "MEGASENA";
    const MEGA_VOLANTE = 60;
    const MARCADOR = 6;
    const LIMITE = 20;
    private $cartela = 1;

    /**
     * Gerar número aleatório
     * @return void
     */
    public function random()
    {
       return rand(1, self::MEGA_VOLANTE); 
    }

    /**
     * Gerar cartelas do jogo 
     * @param int $qtd
     * 
     * @return array
     */
    public function create($qtd) : array
    {
          $checks = [];
          $array = [];
          $sorteio = 1;
          if(self::LIMITE >= $qtd){
                while($this->cartela <= $qtd){
                    for($i = 1; $i <= self::MARCADOR; $i++){
                        $sorteio = $this->random();  
                        if(!in_array($sorteio, $checks)){
                              $checks[] = $sorteio; 
                              $array[$this->cartela][] = $sorteio; 
                              if(count($checks) == self::MARCADOR )
                                  $checks = [];
                        }
                        else{
                             $sorteio = $this->inArrayNumber($sorteio, $checks);
                             $checks[] = $sorteio; 
                             $array[$this->cartela][] = $sorteio; 
                             if(count($checks) == self::MARCADOR )
                                 $checks = [];
                        }  
                    }   
                    $this->cartela++;     
                }
          }     
          return $array;        
    }
    

     /**
      * Verificar números repetidos e retornar um novo valor
      * @param int $sorteio
      * @param array $array
      * 
      * @return int
      */
     private function inArrayNumber($sorteio, array $array): int
     {
           for($i=1; in_array($sorteio,$array);$i++){
                $sorteio = $i; 
           }
           return $sorteio;        
     }

}