
# Setup docker laravel 10

Instruções para iniciar um projeto do 0

### Clone o repositório 

```bash
  git clone https://github.com/Diegojacober/setup-laravel.git
```
    
### Crie o arquivo .env

```bash
  cp .env.example .env
```

### Suba os container do projeto

```bash
 docker-compose up -d
```

### Acesse o container app
```bash
 docker-compose exec app bash
```

### Instale as dependencias
```bash
 composer install
```

### Gere a key do projeto
```bash
 php artisan key:generate
```

#### acesse em http://localhost:8989
