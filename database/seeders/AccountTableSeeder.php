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
            'code' =>   123456,
            'balance' => 1200.30,
        ]);
        Account::create([
            'name' => 'Ciclana',
            'code' =>   654321,
            'balance' => 500.40,
        ]);
    }
}
