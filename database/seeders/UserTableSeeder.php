<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Roles;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); //delete the old seeders

        $UserRoles = Roles::where('name', 'Users')->first();//first()=take(1)->get() lấy đầu tiên và duy nhất
        $QAmanagerRoles = Roles::where('name', 'QA manager')->first();
        $QARoles = Roles::where('name', 'QA')->first();
        $AdminRoles = Roles::where('name', 'admin')->first();

        $User = User::create([
            'name' => 'user',
            'email' => 'User@gmail.com',
            'password'=> md5('123')
        ]);
        $QAmanager = User::create([
            'name' => 'QA manager',
            'email' => 'QAMana@gmail.com',
            'password'=> md5('123')
        ]);
        $QA = User::create([
            'name' => 'QA',
            'email' => 'QA@gmail.com',
            'password'=> md5('123')
        ]);
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password'=> md5('123')
        ]);

        $User->roles()->attach($UserRoles);
        $QA->roles()->attach($QARoles);
        $QAmanager->roles()->attach($QAmanagerRoles);
        $admin->roles()->attach($AdminRoles);

    }
}
