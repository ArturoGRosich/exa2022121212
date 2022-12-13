<?php

namespace Database\Seeders;

use App\Models\Comunity;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comunity::factory(3)->has(User::factory())->create();
    }
}
