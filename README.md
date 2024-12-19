# laravel CRUD
About
This project is a basic CRUD (Create, Read, Update, Delete) application developed using Laravel.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 📦 Tecnologias Utilizadas
- Laravel 11 - Framework PHP.
- Vite - Ferramenta de build rápida para o frontend.
- Tailwind CSS - Estilização (se configurado).



# ⚙️ Instalação

### 1. Clone o repositório
``` bash
git https://github.com/gilberto-dev-silva/laravel-crud
cd nome-do-repositorio
```

### 2. Instale as dependências do Composer
``` bash
composer install
```
### 3. Instale as dependências do NPM/Yarn
``` bash
npm install
# ou
yarn install
```
### 4. Configuração do ambiente

#### Renomeie o arquivo .env.example para .env:
``` bash
cp .env.example .env
```

### 5. Gere a chave da aplicação Laravel:
``` bash
php artisan key:generate
```

### 6. Gere as migrates para o banco de dados:
``` bash
php artisan migrate
```

### 7. Rode o servidor local
``` bash
php artisan serve
```
### 8. Compilar os assets do frontend:
```bash 
npm run dev
```
### Acesse o projeto no navegador:
``` bash 
http://127.0.0.1:8000
```
### Rotas 
#### Este projeto não tem tela, para ver o resultado você pode apenas acesssar as rotas, o banco de dados é o sqlite.
```bash
http://127.0.0.1:8000/post/create
http://127.0.0.1:8000/post/read
http://127.0.0.1:8000/post/readAll
http://127.0.0.1:8000/post/update
http://127.0.0.1:8000/post/updateAll
http://127.0.0.1:8000/post/delete
http://127.0.0.1:8000/post/deleteAll
```
## License
licença [MIT license](https://opensource.org/licenses/MIT).
