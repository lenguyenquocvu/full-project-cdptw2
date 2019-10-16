<?php

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
        //
        DB::table('account')->insert([
            'account_username' => 'admin',
            'account_pass' => 'admin12345',
            'account_role' => '0',
            'account_name' => 'Admin',
            'account_email' => 'admin@gmail.com',
        ]);
    }
}
