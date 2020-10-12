

## API BANCO

Aplicação desenvolvida em Laravel v8.9.0 para fim de teste em empresa


## Instalação
 Comandos iniciais (executar via terminal no diretório do projeto)<br>

- Clonar o projeto para seu computador<br>
git clone https://github.com/LariMoro20/AccountsAPI <br>
- Abrir pasta do projeto<br>
cd AccountsAPI</br>
- Executar na pasta do projeto<br>
composer install<br>
php artisan key:generate<br>
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

## Testando a aplicação
Para testar a aplicação, foi utilizada a ferramenta GraphiQL que pode ser baixada aqui: <br>
**https://www.electronjs.org/apps/graphiql**<br>

Após fazer download, execute a aplicação e informe a seguinte URL: 

**http://localhost:8000/graphql**<br>

Para verificar se está funcionando corretamente, no campo a esquerda do programa, informe a seguinte consulta:<br>

{<br>
  accounts{<br>
     Id,<br>
 	 name,<br>
    code,<br>
    balance,<br>
    }<br>
}<br>

Para fazer as operações de saque e deposito, precisa ser informada a conta e o valor desejado: <br>

**Exemplo**<br>
- sacar(conta: 123456, valor:120 )<br>
- depositar(conta: 123456, valor:120 )<br>

**Exemplo de saque**<br>
{<br>
  sacar(conta: 123456, valor:120 ){<br>
 	 name,<br>
    code,<br>
    balance,<br>
    status<br>
    }<br>
}<br>

Retorno esperado:<br>
{<br>
  "data": {<br>
    "sacar": {<br>
      "name": "Fulana",<br>
      "code": "123456",<br>
      "balance": "3723.3",<br>
      "status": "SUCESSO, saque realizado com sucesso!"<br>
    }<br>
  }<br>
}<br>


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
