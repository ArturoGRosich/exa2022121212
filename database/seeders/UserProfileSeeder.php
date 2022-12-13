<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create()->map(function($user) {
            $profile_id = Profile::factory(['user_id' => $user->id])->create()->id;
            $user->profile_id = $profile_id;
            $user->save();
        });;

        
    }
}
