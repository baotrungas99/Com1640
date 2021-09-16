<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::truncate();//xoá dữ liệu cũ
        Roles::create(['name' => 'admin']);
        Roles::create(['name' => 'QA manager']);
        Roles::create(['name' => 'QA']);
        Roles::create(['name' => 'users']);

    }
}
