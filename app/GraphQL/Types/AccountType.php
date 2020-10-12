<?php
/*
Laravel Application
Author: Larissa Moro S. dos Santos
https://github.com/LariMoro20/AccountsAPI
*/
namespace App\GraphQL\Types;

use App\Account;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class AccountType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Account',
        'description' => 'Details about a account',
        'model' => Account::class
    ];

    public function fields(): array
    {
        return [
            'Id' => [
                'type' => Type::int(),
                'description' => 'Id of the account',
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'The name of the user',
            ],
            'code' => [
                'type' => Type::string(),
                'description' => 'Code of account',
            ],
            'balance' => [
                'type' => Type::string(),
                'description' => 'Balance of account',
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'Date started',
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'Date updated',
            ],
            'status' => [
                'type' => Type::string(),
                'description' => 'State of account',
            ]
        ];
    }
}