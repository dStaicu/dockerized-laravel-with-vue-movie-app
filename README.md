## Dockerized Laravel + Vue Movie App

## Dependencies: 
1. Docker Desktop
 
## Steps

1. git clone la repo
2. in folderul src modificam .env.example in .env
3. rulam din terminal "docker-compose up -d" and that's all :)

!!Dupa ce au fost ridicate containerele se ruleaza automat composer install, php artisan migrate si php artisan seed,
aplicatia este vizibila in momentul in care s-au instalat pachetele de composer si a terminat 
de migrat. Putem verifica citind log-urile de la composer prin comanda "docker-compose logs composer", daca 
apare Database seeding completed successfully. aplicatia este vizibila la 127.0.0.1:8033!!

## Pentru a rula migrarile si seedurile
1. docker exec -ti php /bin/sh
2. php artisan migrate
3. php artisan db:seed


## Ports

- **nginx** - `:8033`
- **mysql** - `:33051`
- **php** - `:4555`

