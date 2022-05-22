<?php

use Illuminate\Database\Seeder;
use App\Methode;

class MethodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Methode::create([
            'id' => '1',
            'methode_name' => 'Workshop/Self Learning'
        ]);

        App\Methode::create([
            'id' => '2',
            'methode_name' => 'Sharing Practice/Professionals Talk'
        ]);

        App\Methode::create([
            'id' => '3',
            'methode_name' => 'Discussion Room'
        ]);

        App\Methode::create([
            'id' => '4',
            'methode_name' => 'Coaching'
        ]);

        App\Methode::create([
            'id' => '5',
            'methode_name' => 'Mentoring'
        ]);

        App\Methode::create([
            'id' => '6',
            'methode_name' => 'Job Assignment'
        ]);
    }
}
