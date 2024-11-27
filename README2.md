criar schema no mysql
schema com o nome rango-do-rei

***para o projeto rodar no0 localhost puxando as rotas corretas:
criar no .env
APP_KEY=
depois rodas no terminal: php artisan key:generate


***para verificar se o projeto está conectado ao banco rodar:
php artisan tinker
DB::connection()->getPdo();