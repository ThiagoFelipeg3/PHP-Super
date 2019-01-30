# Parte do curso PHP do zero ao profissional (PZP)

Oque vai ser mostrado aqui são projetos realizados no curso PZP
na qual são projetos simples porem de grande valor para futuras consultas.

A cada criação será acrescentado mais projetos explicando as funcionalidade de cada um.      

## instalando o composer

Site: https://getcomposer.org/

Instale o composer no diretório raiz do seu projeto
Você pode esta intalando o composer com os seguintes comandos:

```
php -r "copy ('https://getcomposer.org/installer', 'composer-setup.php');"
```
```
php -r "if (arquivo_hahle ('sha384', 'compositer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') {echo 'Instalador verificado';} else {echo 'Instalador corrompido'; unlink ('composer-setup. php ');} echo PHP_EOL; "
```
```
php composer-setup.php
```
php -r "unlink ('composer-setup.php');"
```

## Projeto Relatório PDF

Este projeto foi utilizado o composer para a criação do PDF.
O código mostra uma forma de criação de um relatório em pdf simples, utilizando biblioteca Mpdf\Mpdf do composer. Para executar e necessário intalar o composer no diretório raiz do projeto.
