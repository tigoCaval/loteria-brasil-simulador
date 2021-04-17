## Atenção
Este projeto foi descontinuado

As novas atualizações estão neste link [Lottery-Br](https://github.com/tigoCaval/Lottery-Br)

---
## Simulador Loteria Brasil
Jogos da loteria do Brasil (Mega-Sena, Quina, Lotomania e Lotofácil), gerador de cartelas.  

- Observação: este pacote pode ser utilizado com Laravel/composer ou em qualquer aplicação PHP.
- Baixar pacote: ```composer require tigo/loteria```
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
 ## Licença

Licença MIT. Veja o arquivo [License](https://github.com/tigoCaval/loteria-brasil-simulador/blob/master/LICENSE).

---



