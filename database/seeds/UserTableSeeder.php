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

        $fiona = new User();
        $fiona->name = 'Fiona Kirk';
        $fiona->email = 'fiona@kirk.at';
        $fiona->password = Hash::make('adminpw');
        $fiona->street = 'Musterstraße 10';
        $fiona->city = 'Musterstadt';
        $fiona->zipCode = 6969;
        $fiona->complaints = [];
        $fiona->messages = [];
        $fiona->save();

        $user = new User();
        $user->name = 'Simon Königsreiter';
        $user->email = 'simon.koenigsreiter@gmail.com';
        $user->password = Hash::make('passw0rd');
        $user->street = 'Austraße 10/2';
        $user->city = 'Kottingbrunn';
        $user->zipCode = 2542;
        $user->complaints = $complaints;
        $user->messages = [];
        $user->save();
    }
}
