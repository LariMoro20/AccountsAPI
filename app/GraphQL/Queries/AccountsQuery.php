<?php
/*
Laravel Application
Author: Larissa Moro S. dos Santos
https://github.com/LariMoro20/AccountsAPI
*/
namespace App\GraphQL\Queries;
use App\Models\Account;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class AccountsQuery extends Query
{
    protected $attributes = [
        'name' => 'accounts',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Account'));
    }

    public function resolve($root, $args)
    {

        try {
            $conta = Account::all();
            $conta->status='SUCESSO, contas listadas.';
             return $conta;
         } catch (\Throwable $th) {
             $conta = new Account;
             $conta->status='ERRO, nenhuma conta encontrada.';
             return $conta;
         }


       
    }
}