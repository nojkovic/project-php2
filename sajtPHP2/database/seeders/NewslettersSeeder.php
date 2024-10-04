<?php

namespace Database\Seeders;

use App\Models\Newsletter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewslettersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items=[
            ['email'=>'sara@gmail.com'],
            ['email'=>'admin@gmail.com']

        ];

        foreach ($items as $item){
            Newsletter::create($item);

        }
    }
}
