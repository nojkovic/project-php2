<?php

namespace Database\Seeders;

use App\Models\ReservationLine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items=[
            ['date'=>'2024-04-01 00:09:43','id_reservation'=>1,'id_gallery'=>2],
            ['date'=>'2024-05-13 00:12:30','id_reservation'=>2,'id_gallery'=>4],
            ['date'=>'2024-03-28 00:12:32','id_reservation'=>2,'id_gallery'=>1]

        ];

        foreach ($items as $item){
            ReservationLine::create($item);

        }
    }
}
