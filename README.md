# Simulador Loteria Brasil
Jogos da loteria do Brasil (Mega-Sena, Lotomania e Lotofácil), gerador de cartelas.  
### Utilizando com Framework Laravel/composer
- install: composer require tigo/loteria
- Configuração import class 
```php
 use loteria\Loteria;
``` 
- Sintaxe exemplo:
```php
 $mega = Loteria::megaSena()->create(1);// array multidimensional jogos da mega-sena
 $quina = Loteria::quina()->create(1);// array multidimensional jogos da quina
 $lotofacil = Loteria::lotoFacil()->create(1);//array multidimensional jogos lotofacil
 $lotomania = Loteria::lotoMania()->create(1);//array multidimensional jogos lotomania
 ```
