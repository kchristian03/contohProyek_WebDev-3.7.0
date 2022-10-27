<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Writer;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
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

        $index = 0;

        foreach (Writer::all() as $writer) {
            if ($index==0){
                Book::factory()->create([
                    "title" => $fakerID->text,
                    "synopsis" => "Synopsis Buku Penulis 1",
                    "writer_name" => $writer->name
                ]);
            } else if ($index==1){
                Book::factory()->create([
                    "title" => $fakerFR->text,
                    "synopsis" => "Synopsis Buku Penulis 2",
                    "writer_name" => $writer->name
                ]);
            } else if ($index==2){
                Book::factory()->create([
                    "title" => $fakerIT->text,
                    "synopsis" => "Synopsis Buku Penulis 3",
                    "writer_name" => $writer->name
                ]);
            } else if ($index==3){
                Book::factory()->create([
                    "title" => $fakerRU->text,
                    "synopsis" => "Synopsis Buku Penulis 4",
                    "writer_name" => $writer->name
                ]);
            } else if ($index==4){
                Book::factory()->create([
                    "title" => $fakerUS->text,
                    "synopsis" => "Synopsis Buku Penulis 5",
                    "writer_name" => $writer->name
                ]);
            }
            $index++;
        }
    }
}
