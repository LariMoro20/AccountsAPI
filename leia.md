Para manual depois:
Criar tabelas e popular:
php artisan migrate:fresh --seed

Instalar a api do laravel
composer require rebing/graphql-laravel







Link desafio: 
https://github.com/funcional-health/challenge/blob/master/php.md
==============================================================
Links uteis:
https://blog.codeexpertslearning.com.br/screencast-sua-primeira-api-rest-com-laravel-4262a57e6f95
https://auth0.com/blog/developing-and-securing-graphql-apis-with-laravel/
==============================================================

O DESAFIO: Desenvolver uma API em C# (.NET Core) ou PHP + Laravel ou Node.js que simule algumas funcionalidades de um banco digital.

Você deverá:

    Garantir que o usuário conseguirá realizar uma movimentação de sua conta corrente para quitar uma dívida;
    Providenciar uma pequena documentação de como levantar e testar o seu projeto;
    Enviar o seu código para um novo repositório público do Github, e compartilhe o link aos meus cuidados, através do e-mail mminichelli@funcionalcorp.com.br.

    Maiores instruções sobre o desafio encontram-se disponíveis no Github, através do link: https://github.com/funcional-health/challenge

FIQUE ATENTA: O PRAZO PARA CONCLUSÃO DA AVALIAÇÃO SERÁ NO DIA 13/10/2020 às 13:00.

==============================================================
Cenários

DADO QUE eu consuma a API
QUANDO eu chamar a mutation sacar informando o número da conta e um valor válido
ENTÃO o saldo da minha conta no banco de dados diminuirá de acordo
E a mutation retornará o saldo atualizado.

DADO QUE eu consuma a API
QUANDO eu chamar a mutation sacar informando o número da conta e um valor maior do que o meu saldo
ENTÃO a mutation me retornará um erro informando que eu não tenho saldo suficiente

DADO QUE eu consuma a API
QUANDO eu chamar a mutation depositar informando o número da conta e um valor válido
ENTÃO a mutation atualizará o saldo da conta no banco de dados
E a mutation retornará o saldo atualizado.

DADO QUE eu consuma a API
QUANDO eu chamar a query saldo informando o número da conta
ENTÃO a query retornará o saldo atualizado.


==============================================================
Exemplos

Nós utilizamos GraphQl para arquitetura de APIs, por isso, orientamos que você também opte por esse modelo. Caso ainda não tenha trabalhado com este modelo, não se preocupe pois não é um pré-requisito para vaga, apenas um diferencial. Mas, gostaríamos de desafiá-lo a experimentar

Exemplo 1

Requisição:

mutation {
  sacar(conta: 54321, valor: 140) {
    conta
    saldo
  }
}

Resposta:

{
  "data": {
    "sacar": {
      "conta": 54321,
      "saldo": 20
    }
  }
}
