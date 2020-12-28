# Simulador Loteria Brasil
Jogos da loteria do Brasil (Mega-Sena, Quina, Lotomania e Lotofácil), gerador de cartelas.  
### Utilizar com Laravel/composer
- Observação: este pacote pode ser utilizado em qualquer aplicação PHP.
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

[Donate/Doar](https://www.paypal.com/donate?hosted_button_id=QAANKJUX8M8LG) - 
Olá! Se você achou este pacote útil, considere fazer uma [doação](https://www.paypal.com/donate?hosted_button_id=QAANKJUX8M8LG). Fique à vontade para contribuir ou não.
