<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $complaints = ['Rückenschmerzen', '', '', '', ''];
        $user = new User();
        $user->name = 'Simon Königsreiter';
        $user->email = 'simon.koenigsreiter@gmail.com';
        $user->password = Hash::make('bmw850gs');
        $user->street = 'Austraße 10/2';
        $user->city = 'Kottingbrunn';
        $user->zipCode = 2542;
        $user->complaints = $complaints;
        $user->messages = [];
        $user->save();
    }
}
