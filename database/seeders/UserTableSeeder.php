<?php

namespace Database\Seeders;
use App\Models\Profile;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Pyei Phyo Htet',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'is_admin' => '1'
        ]);
        Profile::create([
            'user_id' => '1',
            'profile_image' => 'default.png',
            'about' => 'this is devpph',
            'facebook_link' => 'www.facebook.com',
            'youtube_link' => 'www.youtube.com'
        ]);
    }
}
