<?php

namespace Database\Seeders;

use App\Models\UserOur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password=md5('sara123');
        $passwordA=md5('Administrator321');
        $items=[
            ['name'=>'Sara ','lastname'=>'Nojkovic','email'=>'sara@gmail.com','password'=>$password,'active'=>1,'id_role'=>1],
            ['name'=>'Admin ','lastname'=>'Administrator','email'=>'admin@gmail.com','password'=>$passwordA,'active'=>1,'id_role'=>1]
        ];

        foreach ($items as $item){
            UserOur::create($item);

        }
    }
}
