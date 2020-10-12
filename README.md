

## API BANCO

Aplicação desenvolvida em Laravel v8.9.0 para fim de teste em empresa


## Instalação
 Comandos iniciais (executar via terminal no diretório do projeto)<br>

- Clonar o projeto para seu computador<br>```
git clone https://github.com/LariMoro20/AccountsAPI ```<br>
- Abrir pasta do projeto<br>
``` cd AccountsAPI ```
- Executar na pasta do projeto<br>
```
composer install
php artisan key:generate
php artisan migrate
php artisan serve
```
## Como começar

- Criar uma base de dados e alterar as informações no arquivo .env localizado na raiz do projeto

**Exemplo:**<br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=appapi
DB_USERNAME=root
DB_PASSWORD=root
```
- Popular a base de dados com as informações teste (executar via terminal no diretório do projeto)<br>
<small>ATENÇÃO: Esse comando deleta todos os dados e tabelas e refaz o banco com as informações contidas no arquivo ```database/seeds/AccountTableSeeder.php```</small><br><br>
```php artisan migrate:fresh --seed```<br><br>
- Para instalar o plugin GraphQl<br>
```composer require rebing/graphql-laravel```<br>
E após execute: <br>
```php artisan vendor:publish --provider="Rebing\GraphQL\GraphQLServiceProvider"```


- **em construção**

## Testando a aplicação
Para testar a aplicação, foi utilizada a ferramenta GraphiQL que pode ser baixada aqui: <br>
**https://www.electronjs.org/apps/graphiql**<br>

Após fazer download, execute a aplicação e informe a seguinte URL: 

**http://localhost:8000/graphql**<br>

Para verificar se está funcionando corretamente, no campo a esquerda do programa, informe a seguinte consulta:<br>
```
{
    accounts{
        name,
        code,
        balance,
    }
}
```
<br>
Retorno esperado:<br>
(Todas as contas do banco)<br>

```
{
  "data": {
    "accounts": [
      {
        "name": "Fulana",
        "code": "123456",
        "balance": "3723.3"
      },
      {
        "name": "Ciclana",
        "code": "654321",
        "balance": "596.4"
      }
    ]
  }
}
```

Para fazer as operações de saque e deposito, precisa ser informada a conta e o valor desejado: <br>

**Exemplo**<br>
```
- sacar(conta: 123456, valor:120 )
- depositar(conta: 123456, valor:120 )
```
**Exemplo de saque**<br>
```
{
    sacar(conta: 123456, valor:120 ){
        name,
        code,
        balance,
        status
    }
}
```
Retorno esperado:<br>
```
{
  "data": {
    "sacar": {
      "name": "Fulana",
      "code": "123456",
      "balance": "3723.3",
      "status": "SUCESSO, saque realizado com sucesso!"
    }
  }
}
```
<br>

Para visualizar o saldo, é necessario informar o número da conta desejada <br>

**Exemplo**
```
{
    saldo(conta: 123456 ){
        name,
        code,
        balance,
        status
    }
}
```

<br>
Retorno esperado:

```
{
  "data": {
    "saldo": {
      "name": "Fulana",
      "code": "123456",
      "balance": "3723.3",
      "status": "SUCESSO, conta encontrada."
    }
  }
}
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
