## Dockerized Laravel + Vue Movie App

## Dependencies: 
1. Docker
 
## Steps

1. in folderul src modificam .env.example in .env
2. rulam din terminal "docker-compose up -d" and that's all :)

!! Dupa ce au fost ridicate containerele se ruleaza automat composer install, php artisan migrate si php artisan seed,
aplicatia este functionala in momentul in care s-au instalat pachetele de composer si a terminat 
de migrat. Putem verifica citind log-urile de la composer prin comanda "docker-compose logs composer", aplicatia este vizbila
in momentul in care ultimul mesaj este "Database seeding completed successfully". 

Aplicatia ar trebui sa fie acum vizibila la 127.0.0.1:8033

## Endpoints

- /list-movies
- /delete-movie/{$id}
- /add-movie?name={$name}&rating={$rating}&description={$description}&image={$image_url}

## Pentru a rula migrarile si seedurile
1. docker exec -ti php /bin/sh
2. php artisan migrate
3. php artisan db:seed


## Ports

- **nginx** - `:8033`
- **mysql** - `:33051`
- **php** - `:4555`

