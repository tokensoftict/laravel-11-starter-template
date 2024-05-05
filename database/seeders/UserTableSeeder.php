<?php

namespace Database\Seeders;

use App\Models\User;
use Laravolt\Avatar\Facade as Avatar;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\{Role, Permission};

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!file_exists(public_path('storage/users'))) {
            mkdir(public_path('storage/users'), 0777, true);
        }

        Avatar::create('superadmin')->save(public_path('storage/users/superadmin.png'));

        $user = User::create([
            'name' => 'Super Administrator',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'phone' => '0123456789',
            'email' => 'superadmin@yahoo.com',
            'image' => 'users/superadmin.png'
        ]);

        $user->assignRole('Super Administrator');

    }
}
