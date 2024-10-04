<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items=[
            ['menu'=>'Home','href'=>'home'],
            ['menu'=>'About','href'=>'about'],
            ['menu'=>'Gallery','href'=>'gallery'],
            ['menu'=>'Contact','href'=>'contact'],
            ['menu'=>'Reservation','href'=>'reservation'],
            ['menu'=>'Checkout','href'=>'checkout'],
            ['menu'=>'CheckoutAll','href'=>'checkoutAll'],
            ['menu'=>'Admin','href'=>'admin2'],
            ['menu'=>'Author','href'=>'author']
        ];

        foreach ($items as $item){
            Menu::create($item);

        }
    }
}
