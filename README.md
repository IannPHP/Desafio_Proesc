# Passos para roda a Aplicação para teste !

# Primeiro você deve Abrir o docker na sua maquina !

Em seguida você deve abrir o terminal para digita os comandos para inicia aplicação !

# OBS: Tirar o .Exemple do .env antes de rodar aplicação !
O Primeiro .env.exemple que está localizado na raiz do projeto !
O Segundo .env.exemple que está localizado na raiz de application

# OBS: Para rodar os comando você deve esta na Raiz do Projeto !!

# OBS: Pode demorar um pouco para iniciar o Docker ! 


# Primeiro Comando !
./bin/build.sh

# Segundo Comando !
docker-compose up -d

# Terceiro Comando !
docker-compose exec app sh

# Quarto Comando !
composer install

# Quinto Comando !
php artisan key:generate

# Sexto Comando !
php artisan migrate


# Setimo Comando !
php artisan db:seed


# Com isso você ja deve está rodando a aplicação para teste !!

# Agora para acessar a aplicação para teste, você tem entrar no Docker e acessar o Containers e acessar o nginx clicando na porta 8080:80

# É isso agora você pode testa a vontade a aplicação !!
Obrigado !
 
Time Proesc