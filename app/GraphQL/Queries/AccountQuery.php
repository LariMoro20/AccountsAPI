<?php
namespace App\GraphQL\Queries;

use App\Models\Account;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class AccountQuery extends Query
{
    protected $attributes = [
        'name' => 'saldo',
    ];
    public function type(): Type
    {
        return GraphQL::type('Account');
    }

    public function args():array
    {
        return [
            'conta' => [
                'name' => 'conta',
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }
                                                                                                                                                          
    public function resolve($root, $args)
    {
        try {
           $conta = Account::where('code', '=', $args['conta'])->firstOrFail();
           $conta->status='SUCESSO, conta encontrada.';
            return $conta;
        } catch (\Throwable $th) {
            $conta = new Account;
            $conta->status='ERRO, conta não encontrada.';
            return $conta;
        }
    }
}