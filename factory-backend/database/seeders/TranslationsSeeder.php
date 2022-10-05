<?php

namespace Database\Seeders;

use App\Models\Translations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class TranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Translations::factory()
            ->count(500)
            ->sequence(fn ($sequence) =>
            ['table_name'=>'meals',
                'resource_id'=>$sequence->index + 1,
                'resource_name'=>'title',
                'en'=>'naslov jela EN ' . $sequence->index + 1,
                'hr'=>'naslov jela HR ' . $sequence->index + 1,
                'de'=>'naslov jela DE ' . $sequence->index + 1]
            )
            ->create();

        Translations::factory()
            ->count(500)
            ->sequence(fn ($sequence) =>
            ['table_name'=>'meals',
                'resource_id'=>$sequence->index + 1,
                'resource_name'=>'description',
                'en'=>'opis jela EN ' . $sequence->index + 1,
                'hr'=>'opis jela HR ' . $sequence->index + 1,
                'de'=>'opis jela DE ' . $sequence->index + 1])
            ->create();

        Translations::factory()
            ->count(500)
            ->sequence(fn ($sequence) =>
            ['table_name'=>'tags',
                'resource_id'=>$sequence->index + 1,
                'resource_name'=>'title',
                'en'=>'naslov taga EN ' . $sequence->index + 1,
                'hr'=>'naslov taga HR ' . $sequence->index + 1,
                'de'=>'naslov taga DE ' . $sequence->index + 1])
            ->create();

        Translations::factory()
            ->count(500)
            ->sequence(fn ($sequence) =>
            ['table_name'=>'categories',
                'resource_id'=>$sequence->index + 1,
                'resource_name'=>'title',
                'en'=>'naslov kategorije EN ' . $sequence->index + 1,
                'hr'=>'naslov kategorije HR ' . $sequence->index + 1,
                'de'=>'naslov kategorije DE ' . $sequence->index + 1])
            ->create();

        Translations::factory()
            ->count(500)
            ->sequence(fn ($sequence) =>
            ['table_name'=>'ingredients',
                'resource_id'=>$sequence->index + 1,
                'resource_name'=>'title',
                'en'=>'naslov sastojka EN ' . $sequence->index + 1,
                'hr'=>'naslov sastojka HR ' . $sequence->index + 1,
                'de'=>'naslov sastojka DE ' . $sequence->index + 1])
            ->create();
    }
}
