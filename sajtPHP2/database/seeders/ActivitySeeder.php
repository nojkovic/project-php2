<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items=[
            ['id_user'=>1,'id_type'=>3,'ip'=>'100.43.67.23'],
            ['id_user'=>1,'id_type'=>1,'ip'=>'100.43.67.23'],
            ['id_user'=>1,'id_type'=>2,'ip'=>'100.43.67.23'],
            ['id_user'=>1,'id_type'=>5,'ip'=>'100.43.67.23'],
            ['id_user'=>2,'id_type'=>4,'ip'=>'100.43.72.200'],
            ['id_user'=>2,'id_type'=>5,'ip'=>'100.43.72.200'],
            ['id_user'=>2,'id_type'=>1,'ip'=>'100.43.72.200'],

        ];

        foreach ($items as $item){
            Activity::create($item);

        }
    }
}
