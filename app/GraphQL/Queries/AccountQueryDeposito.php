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

class AccountQueryDeposito extends Query
{
    protected $attributes = [
        'name' => 'depositar',
    ];
    public function type(): Type{
        return GraphQL::type('Account');
    }

    public function args():array
    {
        return [
            'conta' => [
                'name' => 'conta',
                'type' => Type::int(),
                'rules' => ['required']
            ],
            'valor' => [
                'name' => 'valor',
                'type' => Type::float(),
                'rules' => ['required']
            ],
        ];
    }
                                                                                                                                                          
    public function resolve($root, $args)
    {


        try {
            $conta = Account::where('code', '=', $args['conta'])->firstOrFail();
            $conta->balance=$conta->balance+$args['valor'];
            Account::where('code', $args['conta'])->update(array('balance' => $conta->balance));
            $conta->status='SUCESSO, deposito realizado com sucesso!';
             return $conta;
         } catch (\Throwable $th) {
             $conta = new Account;
             $conta->status='ERRO, conta não encontrada.';
             return $conta;
         }

            

        
        return $conta;

    }
}