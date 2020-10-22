# docker-compose-laravel

**how to make it work :)**

1. Trebuie sa ai instalat Docker Desktop pe masina

Inainte sa dai docker-compose up treuie sa te asiguri ca in env este corect db-host-ul
deoarece la docker-compose up rulez migrarile si seed-urile din dockerfile
(momentan trebuie pus IPv4 in db host deoarece refuza sa se conecteze prin 127.0.0.1)

2. docker-compose up -d in folderul unde ai clonat repo-ul


**localhost:8033**


That's All :)

## Ports

- **nginx** - `:8033`
- **mysql** - `:33051`
- **php** - `:4555`

