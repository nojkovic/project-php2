<?php

namespace Database\Seeders;

use App\Models\TypeOfActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types=[
            ['name'=>'Login'],
            ['name'=>'Logout'],
            ['name'=>'AddToReservationCart'],
            ['name'=>'ReservationCart'],
            ['name'=>'Checkout'],
            ['name'=>'RemoveToReservationCart'],


        ];

        foreach ($types as $type){
            TypeOfActivity::create($type);

        }
    }
}
