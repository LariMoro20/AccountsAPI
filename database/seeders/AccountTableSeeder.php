<?php

namespace Database\Seeders;
use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create([
            'name' => 'Fulana',
            'code' =>   28012328,
            'balance' => 1200.30,
        ]);
        Account::create([
            'name' => 'Ciclana',
            'code' =>   23232358,
            'balance' => 500.40,
        ]);
    }
}
