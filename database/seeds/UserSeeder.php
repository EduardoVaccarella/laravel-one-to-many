<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newCategory = new User();

        $newCategory->name = 'Eduardo Vaccarella';
        $newCategory->email = 'eduardo0vaccarella@gmail.com';
        $newCategory->password = Hash::make('provaprova1');

        $newCategory->save();
    }
}
