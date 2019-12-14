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

## Descrição do Mini mundo
- O funcionário do banco de sangue acessa o sistema e ao chegar um doador ou receptor ele verifica na lista se
  aquela pesoa ja possui um cadastro se sim serão oferecidas opções doação seja ela entrada ou saida, editar seu cadastro
  vizualizar suas informações e remover o cadastro. Poderá cadastrar a pessoa caso não haja cadastro. Ao registrar uma
  doação o funcionário define a data e a quantidade de sangue doada. O sistema também mostra uma lista contendo as doações
  feitas.

  Obs.: Para testes apenas foi setado um banco de dados por Id um, não houve tempo para a criação de mais bancos de dados.

- Uma imagem com o modelo conceitual está na pasta Modelo Banco de Dados.