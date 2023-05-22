# API Exec - PHP
#### Autor: [Luiz Schons](https://www.linkedin.com/in/luiz-schons/)

---

## Sobre

API para execução de scripts no lado do servidor a cada X segundos.

A ideia é que a API trabalhe de forma similar ao cron, porém sem a necessidade de configuração no servidor.

Dessa forma, desaclopamos a execução de scripts do servidor, e passamos a ter um serviço que pode ser consumido por qualquer aplicação.

## Requisitos

- Ter o PHP instalado na máquina, na versão 7.4 ou superior.
- Ter o Composer instalado na máquina.
- Ter o Git instalado na máquina.

## Como usar

- Clone o repositório para a sua máquina.
- Acesse a pasta do projeto e execute o comando `composer install`.
- Faça sua configuração no arquivo `config/.env`. (Não usamos dados sensíveis)
- Execute o comando `php index.php` para iniciar a API.

## Como funciona

A API funciona com base em um arquivo de configuração, onde você pode definir os scripts que serão executados, e o intervalo de tempo entre cada execução.

A expressão de tempo segue o padrão do cron. [Clique aqui](https://crontab.guru/) para saber mais.

## Exemplo de configuração

```dotenv
# Arquivo: config/.env
PATH_FILE=public/file.sh
EXPRESSION='* * * * *'
```

## Pasta de scripts

A pasta de scripts é a pasta `public/`. Nela você pode colocar os scripts que deseja executar.

## Exemplo de script

```bash
#!/bin/bash

echo "Hello World" >> public/file.log
```

A cada execução, o script irá escrever a mensagem `Hello World` no arquivo `public/file.log`.

Fique a vontade para criar seus scripts e testar a API.

## Contato

- [LinkedIn](https://www.linkedin.com/in/luiz-schons/)
- [E-mail](mailto:schonsluuiz@gmail.com)


