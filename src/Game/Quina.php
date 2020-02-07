<?php
namespace loteria\Game;

use loteria\Contract\GameInterface;
 
class Quina implements GameInterface
{
    const QUINA = "QUINA";
    const QUINA_VOLANTE = 80;
    const MARCADOR = 5;
    const LIMITE = 20;
    private $cartela = 1;

    /**
     * Gerar número aleatório
     * @return void
     */
    public function random()
    {
       return rand(1, self::QUINA_VOLANTE); 
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