<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class asg extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@a.a',
            'password' => Hash::make('password'),
            'type' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@admitwtawn.pl',
            'password' => Hash::make('password'),
            'type' => 'user'
        ]);
        DB::table('repliki')->insert([
            'Model_oryginalny' => 'M4',
            'Producent' => 'Specna Arms',
            'Moc' => '450 FPS',
            'Kolor' => 'Czarny'
        ]);
        DB::table('repliki')->insert([
            'Model_oryginalny' => 'G36C',
            'Producent' => 'Specna Arms',
            'Moc' => '360 FPS',
            'Kolor' => 'Czarny'
        ]);
        DB::table('repliki')->insert([
            'Model_oryginalny' => 'AK-47',
            'Producent' => 'Cyma',
            'Moc' => '420 FPS',
            'Kolor' => 'Czarny'
        ]);
        DB::table('imprezy')->insert([
            'Miejsce' => 'Ursus',
            'Data' => '2020-10-11',
            'Charakter' => 'Zwykła strzelanka'
        ]);
        DB::table('imprezy')->insert([
            'Miejsce' => 'Arena',
            'Data' => '2020-10-20',
            'Charakter' => 'CQB'
        ]);
        DB::table('imprezy')->insert([
            'Miejsce' => 'Kazniów',
            'Data' => '2020-10-21',
            'Charakter' => 'CQB'
        ]);
        DB::table('imprezy')->insert([
            'Miejsce' => 'Ursus',
            'Data' => '2020-10-27',
            'Charakter' => 'Zwykła strzelanka'
        ]);
        DB::table('imprezy')->insert([
            'Miejsce' => 'Arena',
            'Data' => '2020-10-25',
            'Charakter' => 'CQB'
        ]);
        DB::table('imprezy')->insert([
            'Miejsce' => 'Kazniów',
            'Data' => '2020-10-26',
            'Charakter' => 'CQB'
        ]);
        for ($x = 0; $x < 10; $x++) {
            DB::table('news')->insert([
                'Title' => 'Lorem ipsum',
                'Subtitle' => 'Lorem ipsum',
                'description' => 'Dolore excepteur Lorem cupidatat minim ullamco dolor ut',
                'content' => 'Dolor non velit sunt nostrud voluptate nulla tempor labore exercitation proident deserunt non. Cupidatat do deserunt ullamco consectetur non officia veniam velit dolor in qui sint. Dolore excepteur Lorem cupidatat minim ullamco dolor ut sint eu nisi. Commodo nisi fugiat irure adipisicing sint.',
                'Data' => Date('Y-m-d'),
            ]);
        }
    }
}
