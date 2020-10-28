## Dockerized Laravel + Vue Movie App

## Dependencies: 
1. Docker
 
## Steps

1. change .env.example to .env in '/src'
2. go to root folder and run "docker-compose up -d"

After all containers are up, composer container will run automatically 'composer install && php artisan migrate && php artisan db:seed"
The app is working only after the composer has finished installing the packages.
To see the current status of composer you need to run in terminal "docker-composer logs composer"

The app should be visible at 127.0.0.1:8033

## Endpoints

- /list-movies
- /delete-movie/{$id}
- /add-movie?name={$name}&rating={$rating}&description={$description}&image={$image_url}

## For migrations and seeds
1. docker exec -ti php /bin/sh
2. php artisan migrate
3. php artisan db:seed


## Ports

- **nginx** - `:8033`
- **mysql** - `:33051`
- **php** - `:4555`

