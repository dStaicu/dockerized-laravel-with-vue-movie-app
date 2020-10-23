## Dockerized Laravel + Vue Movie App

## Dependencies: 
1. php
2. composer
3. node
4. npm
5. docker
 
## Steps

1. git clone la repo
2. in folderul src modificam .env.example in .env
3. tot in folderul src rulam din terminal composer install --no-interaction --ignore-platform-reqs
4. rulam din terminal docker-compose up -d
5. npm install & npm run dev and that's all :)

Acum aplicatia ar trebui sa fie vizibila la 127.0.0.1:8033

## Pentru a rula migrarile si seedurile
1. docker exec -ti php /bin/sh
2. php artisan migrate
3. php artisan db:seed


## Ports

- **nginx** - `:8033`
- **mysql** - `:33051`
- **php** - `:4555`

