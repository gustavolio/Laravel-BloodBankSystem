## Instalação do Projeto

- Ambiente Laravel: Composer, php 7.2 ou maior, Servidor AMP;
- Clonar o diretorio dentro do repositório do servidor (Ex.: Xamp Pasta: "C:\xampp\htdocs");
- Configurar o arquivo .env com banco, user, senha e app key;

APP_KEY=base64:uU2a42r6kQA64fxg5EyswM08nKF+A6GJJSGd6YFv4uI=
...
DB_PORT=3306
DB_DATABASE=bancosangue
DB_USERNAME=(Usuario)
DB_PASSWORD=(Sua senha ou senha em branco)
...

## Rodando o Projeto

- composer install
- composer update
- composer dump-autoload
- php artisan optimize
- php artisan view:clear
- php artisan serve