<?php

use Illuminate\Database\Seeder;
use App\User;
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
        $superadmin = User::create([
            'name' => 'super admin',
            'gender' => 'pria',
            'address' => 'ciomas permai',
            'agency' => 'Sekolah Vokasi IPB',
            'line_id' => 'super.admin',
            'phone' => '088212558452',
            'identity_card' => 'identitas-super-admin.jpg',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('super'),
        ]);
        $superadmin->assignRole('super-admin');
       
        $admin = User::create([
            'name' => 'admin',
            'gender' => 'pria',
            'address' => 'ciomas permai',
            'agency' => 'Sekolah Vokasi IPB',
            'line_id' => 'admin.admin',
            'phone' => '088212558452',
            'identity_card' => 'identitas-admin.jpg',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Arsyandi',
            'gender' => 'pria',
            'address' => 'Sentul City',
            'agency' => 'Sekolah Vokasi IPB',
            'line_id' => 'arsyandi.develop',
            'phone' => '088212558452',
            'identity_card' => 'identitas-arsyandi.jpg',
            'email' => 'arsyandi@gmail.com',
            'password' => Hash::make('arsyandi'),
        ]);
        $user->assignRole('user');
    }
}
