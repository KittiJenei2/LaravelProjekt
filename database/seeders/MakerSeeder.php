<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakerSeeder extends Seeder
{
    const ITEMS = [
        "Ford",
        "Mercedes",
        "Fiat",
        "Opel",
        "Audi",
        "Peugeot"
    ];


    /**
     * Run the database seeds.
     */

    
    public function run(): void
    {
        foreach (self::ITEMS as $item) {
            $maker = new Maker();
            $maker->name = $item;
            $maker->save();
        }
    }
}
