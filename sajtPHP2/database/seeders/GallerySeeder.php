<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items=[
            ['name'=>'Cat Eli','description'=>'Ellie the cat is white with beautiful yellow fur.She eager for love','year'=>1,'month'=>3,'image'=>'1.jpg','id_category'=>'2'],
            ['name'=>'Cat Alf','description'=>'The cat Alf is a dark yellow color, a very calm cat eager to be cuddled and loved.','year'=>0,'month'=>5,'image'=>'g7.jpg','id_category'=>'2'],
            ['name'=>'Dog Aris','description'=>'Dog Aris is a very cuddly dog, full of love and desire for a new home.','year'=>1,'month'=>0,'image'=>'g2.jpg','id_category'=>'1'],
            ['name'=>'Dog Coco','description'=>'The dog Coco is very cuddly, full of love and a very cheerful dog.It will make everyones life better.','year'=>0,'month'=>9,'image'=>'g5.jpg','id_category'=>'1'],
            ['name'=>'Dog Don','description'=>'Don the dog is a very calm and withdrawn dog. He is afraid, but he is friendly when he meets someone.','year'=>1,'month'=>5,'image'=>'g6.jpg','id_category'=>'1'],
            ['name'=>'Dog Aris','description'=>'Dog Aris is a very cuddly dog, full of love and desire for a new home.','year'=>0,'month'=>7,'image'=>'g2.jpg','id_category'=>'1'],
            ['name'=>'Dog Coco','description'=>'The dog Coco is very cuddly, full of love and a very cheerful dog.It will make everyones life better.','year'=>0,'month'=>4,'image'=>'g5.jpg','id_category'=>'1'],
            ['name'=>'Dog Don','description'=>'Don the dog is a very calm and withdrawn dog. He is afraid, but he is friendly when he meets someone.','year'=>0,'month'=>3,'image'=>'g6.jpg','id_category'=>'1'],

        ];

        foreach ($items as $item){
            Gallery::create($item);

        }
    }
}
