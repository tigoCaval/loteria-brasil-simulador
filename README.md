# Simulador Loteria Brasil
Jogos da loteria do Brasil (Mega-Sena, Lotomania e Lotofácil), gerar cartelas.  
### Utilizando com Framework Laravel/composer
- install: composer require tigo/loteria
- Configuração import class 
```php
 use loteria\Loteria;
``` 
- Sintaxe exemplo:
```php
 $loteria = new Loteria(); 
 $mega = $loteria::megaSena()->create(1);// array multidimensional jogos da mega-sena
 $lotofacil = $loteria::lotoFacil()->create(1);//array multidimensional jogos lotofacil
 $lotomania = $loteria::lotoMania()->create(1);//array multidimensional jogos lotomania
 ```
