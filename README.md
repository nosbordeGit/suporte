1 - Alterar o arquivo .env.example para .env

2 - altere as configurações para acesso a base de dados mysql

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=suporte
DB_USERNAME=root
DB_PASSWORD=

3 - Utilize o comando dentro da pasta do projeto 
composer install 

4 - Crie a chave de Segurança usando o comando
php artisan key:generate

5 - Para funcionar o sistema de autenticação dentro da pasta do projeto instale o npm
npm install

6 - inicie o servidor vit utilizando o comando 
npm run dev

0bs. abra um terminal dentro do projeto para iniciar o servidor, pois este comando trava o terminal.


