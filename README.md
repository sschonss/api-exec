# API-EXEC
## API que executa comandos cron no servidor com PHP

### Link para o repositório: https://lnkd.in/dc7_BhTT
### Link para o docker hub: https://lnkd.in/dgRpqbrQ

Executar cron diretamente no servidor nem sempre é algo recomendado, pois podemos executar um comando errado, ou gerar um carga de processamento desnecessária (experiência própria), ou até mesmo executar um comando que não deveria ser executado naquele momento.

Pensando em trabalhar da forma mais desacoplada possível, criei essa API que recebe a parametrização de um comando cron e o executa no servidor.

Essa API pode ser utilizada para executar comandos de backup, limpeza de cache, envio de e-mails, etc.

Senti a necessidade de criar essa API pois em um projeto que estou trabalhando, precisava executar um comando de atualização de versão de um sistema, e não queria colocar essa responsabilidade no sistema principal, pois se algo desse errado, o sistema principal poderia ficar fora do ar.
Dessa forma, criei essa API que recebe o comando de atualização e executa no servidor.

A API pode ser utilizada de duas formas:

- Via PHP instalado no servidor
- Via Docker

Com o PHP instalado no servidor, basta clonar o repositório, configurar o arquivo .env e executar o comando:

```
php index.php
```

Com o Docker você pode baixar a imagem do Docker Hub, configurar o arquivo .env e os volumes e executar o comando:

```
docker-compose up
```

A API possui apenas um função, que recebe o tempo de execução do comando e o comando a ser executado.

Ainda é a primeira versão da API, então não possui muitas validações, mas já está funcionando, e já está sendo utilizada em um projeto de teste.

O código está disponível no GitHub, e pode ser utilizado livremente.
Caso encontre algum problema, ou tenha alguma sugestão, fique a vontade para abrir uma issue no repositório, vou ficar muito feliz em ter uma contribuição e/ou feedback.

#### Leia o [DOC.md](DOC.md)
