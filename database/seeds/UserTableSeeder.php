<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::table('users')->insert([
            'name' => 'Königsreiter Simon',
            'email' => 'simon.koenigsreiter@gmail.com',
            'password' => Hash::make('passw0rd'),
            'street' => 'Austraße',
            'city' => 'Kottingbrunn',
            'zipCode' => 2542,
            'complaint' => serialize($complaints),
        ]);
    }
}
