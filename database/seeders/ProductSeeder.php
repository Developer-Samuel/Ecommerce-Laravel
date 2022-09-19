<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => "GTA 5",
                'oldprice' => "59.99",
                'newprice' => "29.99",
                'description' => "GTA 5 PC game",
                "category" => "game",
                "gallery" => "/products/games/pc/gta5.jpg"
            ],
            [
                'name' => "Mafia 2",
                'oldprice' => "19.99",
                'newprice' => "9.99",
                'description' => "Mafia 2 PC game",
                "category" => "game",
                "gallery" => "/products/games/pc/mafia2.jpg"
            ],
            [
                'name' => "Red Dead Redemption 2",
                'oldprice' => "59.99",
                'newprice' => "49.99",
                'description' => "Red Dead Redemption 2 PC game",
                "category" => "game",
                "gallery" => "/products/games/pc/rdr2.jpg"
            ],
            [
                'name' => "Geforce RTX 3090",
                'oldprice' => "1684.49",
                'newprice' => "1460.99",
                'description' => "Best 2022 gaming graphic card: RTX 3090",
                "category" => "graphic_card",
                "gallery" => "/products/pc/geforce-rtx3090.jpg"
            ],
        ]);
    }
}
