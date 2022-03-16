<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User:: create([
            'name'          => 'Lorena Mejia',
            'email'         => 'lorena4516@hotmail.com',
            'password'      => Hash::make('password'),
           
        ]);
    }
}
