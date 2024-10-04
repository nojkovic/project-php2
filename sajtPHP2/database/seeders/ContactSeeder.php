<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items=[
            ['name'=>'Saraa','email'=>'sara@gmail.com','mobile'=>'06359721006','message'=>'Thank you for your cooperation.'],
            ['name'=>'User','email'=>'user@gmail.com','mobile'=>'06542108641','message'=>'The team is very friendly and always there to help.'],

        ];

        foreach ($items as $item){
            Contact::create($item);

        }
    }
}
