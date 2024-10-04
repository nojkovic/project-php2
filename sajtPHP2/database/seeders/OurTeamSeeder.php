<?php

namespace Database\Seeders;

use App\Models\OurTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items=[
            ['name'=>'Edvards','lastname'=>'Doe','description'=>'A serious worker, full of love and care for our pets','image'=>'t1.jpg'],
            ['name'=>'Sofia','lastname'=>'Mark','description'=>'Very pleasant and good with pets, pets adore her','image'=>'t2.jpg'],
            ['name'=>'Michael','lastname'=>'Amet','description'=>'A big lover of animals, especially dogs. He loves his job','image'=>'t3.jpg'],
            ['name'=>'Daniel','lastname'=>'Niary','description'=>'Very sensitive, emotional and attached to pets','image'=>'t4.jpg']

        ];

        foreach ($items as $item){
            OurTeam::create($item);

        }
    }
}
