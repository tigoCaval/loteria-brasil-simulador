<?php
namespace loteria\Game;

use loteria\Contract\GameInterface;

/**
 * Class LotoFacil | Regra do jogo LotoFacil
 */
class LotoFacil implements GameInterface
{
    const LOTOFACIL = "LOTOFACIL";
    const LOTOFACIL_VOLANTE = 25;
    const MARCADOR = 15;
    const LIMITE = 20;
    private $cartela = 1;

    /**
     * Gerar número aleatório
     * @return void
     */
    public function random()
    {
       return rand(1, self::LOTOFACIL_VOLANTE); 
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