<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items=[
            ['role'=>'Admin'],
            ['role'=>'User'],

        ];

        foreach ($items as $item){
            Role::create($item);

        }
    }
}
