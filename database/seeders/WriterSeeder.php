<?php

namespace Database\Seeders;

use App\Models\Writer;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerID = Factory::create('id_ID');
        $fakerFR = Factory::create('fr_FR');
        $fakerIT = Factory::create('it_IT');
        $fakerRU = Factory::create('ru_RU');
        $fakerUS = Factory::create('en_US');

        Writer::factory()->create([
            "contact" => $fakerID->phoneNumber,
            "images" => "pic1.jpg",
        ]);

        Writer::factory()->create([
            "contact" => $fakerFR->phoneNumber,
            "images" => "pic2.jpg",
        ]);
        Writer::factory()->create([
            "contact" => $fakerIT->phoneNumber,
            "images" => "pic3.jpg",
        ]);
        Writer::factory()->create([
            "contact" => $fakerRU->phoneNumber,
            "images" => "pic4.jpg",
        ]);

        Writer::factory()->create([
            "contact" => $fakerUS->phoneNumber,
            "images" => "pic5.jpg",
        ]);
    }
}
