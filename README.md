

## API BANCO

Aplicação desenvolvida em Laravel v8.9.0 para fim de teste de emprego


## Instalação
 Comandos iniciais (executar via terminal no diretório do projeto)<br>

- Clonar o projeto para seu computador<br>
git clone https://github.com/LariMoro20/AccountsAPI <br>

- Executar na pasta do projeto<br>
composer install<br>
php artisan migrate<br>
php artisan serve<br><br>

## Como começar

- Criar uma base de dados e alterar as informações no arquivo .env localizado na raiz do projeto

**Exemplo:**<br>
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=appapi<br>
DB_USERNAME=root<br>
DB_PASSWORD=root<br>

- Popular a base de dados com as informações teste (executar via terminal no diretório do projeto)<br>
<small>ATENÇÃO: Esse comando deleta todos os dados e tabelas e refaz o banco com as informações contidas no arquivo database/seeds/AccountTableSeeder.php</small><br><br>
*php artisan migrate:fresh --seed*<br><br>
- Para instalar o plugin GraphQl<br>
*composer require rebing/graphql-laravel*<br>
E após execute: <br>
*php artisan vendor:publish --provider="Rebing\GraphQL\GraphQLServiceProvider"*
- **em construção**


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
