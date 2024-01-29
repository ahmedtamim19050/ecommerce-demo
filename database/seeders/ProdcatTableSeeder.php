<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdcatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        foreach (range(1, 10) as $index) {

            $data[] = [
                'shop_id' => rand(11, 15),
                'name' => fake()->name(),
                'slug' => fake()->unique()->username(),
                'logo' => 'https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg',
            ];
        }

        DB::table('prodcats')->insert($data);
    }
}
