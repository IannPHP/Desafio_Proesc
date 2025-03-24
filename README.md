# Passos para roda a Aplicação para teste !

# Primeiro você deve Abrir o docker na sua maquina !

Em seguida você deve abrir o terminal para digita os comandos para inicia aplicação !

# OBS: Para rodar os comando você deve esta na Raiz do Projeto !!

# Primeiro Comando !
./bin/build.sh

# Segundo Comando !
docker network create_backend_network

# Terceiro Comando !
docker_compose up -d

# Quarto Comando !
docker-compose exec app sh

# Quinto Comando !
composer install

# Sexto Comando !
php artisan key:generate

# Setimo Comando !
php artisan migrate

# Oitavo Comando !
php artisan db:seed

# Com isso você ja deve está rodando a aplicação para teste !!

Obrigado !
 




























# Desafio técnico - Proesc


## Índice

- [Sobre o desafio](#sobre-o-desafio)
  - [Desafio 1](#desafio-1)
  - [Desafio 2](#desafio-2)
  - [Desafio 3](#desafio-3)
- [Bonus](#bonus)
- [Entrega](#entrega)

## Sobre o desafio

Olá, bem vindo(a) ao desafio técnico do Proesc.com! 

Este desafio técnico é uma atividade prática, onde avaliaremos seus conhecimentos de lógica de programação, banco de dados e html, assuntos que precisará utilizar diariamente para a função desenvolvedor backend no Proesc

- Linguagens: PHP **5.6** (atualmente estamos migrando nosso principal projeto do 5.6 para a versão 8.2)
- Framework: Laravel
- Banco de dados: Postgres

### Desafio 1
No dia a dia utilizamos de html, css e javascript para criar relatórios para nossas instituições de ensino. 

Assim, uma escola pediu auxílio para criar uma declaração de matrícula. Verifique o modelo disponibilizado pela escola e crie o código para que o relatório seja disponibilizado para a escola.

 **Requisitos**
- Utilize html e css puro
- Crie o relatório com base na imagem dispobilizada pela escola: [Modelo de declaração de matrícula](./desafio1/modelo-declaracao.png)

    
**Entregável**
- Código html e css

Adicione sua solução na pasta [Desafio 1](./desafio1/)

### Desafio 2
Você recebeu um chamado de um cliente e vai precisar realizar algumas consultas no banco. Utilize um banco de dados local disponível para realizar as consultas necessárias. 

Para conectar-se, crie uma nova base de dados PostgreSQL utilizando os comandos disponíveis [aqui](#como-executar).

**Consultas a serem feitas**<br>
1. O cliente gostaria de saber quantos produtos ele possui em cada categoria. Qual SQL você faria para realizar essa consulta?<br>
2. Além disso, também quer saber a média de preços de cada categoria. Monte o SQL para essa solicitação<br>
3. Faça um SQL para atualizar todos os produtos da categoria Cremes e Geleias para a categoria Frutas

**Entregável**
- 3 consultas SQL que retornem como resultado os pedidos acima

Adicione sua solução na pasta [Desafio 2](./desafio2/)

### Desafio 3

Nesse desafio, usuários relataram alguns problemas no uso de uma simples aplicação.
Como desenvolvedor, você deverá realizar uma análise dos problemas relatados e disponibilizar uma correção para normalizar a aplicação.

1. É encontrado um erro na página inicial ao tentar navegar para página a "Produtos" ou "Categorias". Realize uma correção na navegação.<br>
2. Um usuário relatou dificuldades ao realizar o cadastro de uma nova categoria. Ao preencher os dados e apertar em "Salvar", mostra a mensagem de sucesso no entanto não é feito o cadastro. Realize uma correção nesse procedimento<br>
3. Na página de listagem de Produtos, usuários identificaram que não está sendo exibido o nome da Categoria relacionada. Realize uma correção para exibir o nome correto da categoria vinculada ao produto.<br>

Faça sua solução na pasta [Desafio 3](./desafio2/)


### Como executar 

Para iniciá-lo, siga os passos abaixo:

**Docker**



1 -  Criando os volumes e a network:
***(Linux/Mac)***
```bash
$ ./bin/build.sh
$ ./bin/startDaemon.sh (executa o comando docker compose up -d)
```
***Windows (Utilizar git bash)***
```bash
$ ./bin/build.sh
$ ./bin/startDaemon.sh (executa o comando docker compose up -d)
```

```bash
$ sudo apt-get update
$ sudo apt-get install apt-transport-https ca-certificates -y 
$ sudo update-ca-certificates 
```

1 -  Clone o projeto para o seu computador:
```bash
$ git clone https://gitfront.io/r/proesc/wucsJbTiQMt4/desafio-tecnico-backend.git
```
Se tiver algum problema pra clonar, verifique se a parte de certificados está atualizada:

```bash
$ sudo apt-get update
$ sudo apt-get install apt-transport-https ca-certificates -y 
$ sudo update-ca-certificates 
```

2 - Entre na pasta do projeto
```bash
$ cd desafio3
```
3 - Instale as depêndencias

```bash
$ composer install
```

4 - Crie o arquivo arquivo .env copiando o arquivo [.env.example](./desafio3/.env.example) e configure com as informações do seu banco local


5 - Crie uma nova chave para a aplicação
```bash
$ php artisan key:generate
```

6 - Rode as migrations
```bash
$ php artisan migrate
```
7 - Rode o seeder
```bash
$ php artisan db:seed
```
8 - Inicie o projeto:
```bash
$ php artisan serve
```


## Entrega
Para entregar sua solução, baixe este projeto e resolva os 3 desafios propostos.

Assim que finalizar, suba a sua solução para o github e nos envie o link do seu repositório respondendo o e-mail recebido.

Em caso de dúvida, não hesite em nos contatar através do e-mail recebido ou para lorena@proesc.com :)
