# docker-compose-laravel

**how to make it work :)**

1. Trebuie sa ai instalat Docker Desktop pe masina

2. Modifica .env.example din src in .env si schimba db host
(momentan trebuie pus IPv4 in db host deoarece refuza sa se conecteze prin 127.0.0.1)

2. docker-compose up -d in folderul unde ai clonat repo-ul


**localhost:8033**


That's All :)

## Ports

- **nginx** - `:8033`
- **mysql** - `:33051`
- **php** - `:4555`

