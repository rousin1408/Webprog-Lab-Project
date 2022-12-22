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
        DB::table('product')->insert([
            'id' => 1,
            'category_id' => 1,
            'name' => 'lorem',
            'category' => 'Beauty',
            'detail' => 'lorem',
            'price' => '20.000',
            'photo' => 'beauty1.jpg',
        ]);
        DB::table('product')->insert([
            'id' => 2,
            'category_id' => 1,
            'name' => 'lorem',
            'category' => 'Beauty',
            'detail' => 'lorem',
            'price' => '20.000',
            'photo' => 'beauty2.jpg',
        ]);
        DB::table('product')->insert([
            'id' => 3,
            'category_id' => 1,
            'name' => 'lorem',
            'category' => 'Beauty',
            'detail' => 'lorem',
            'price' => '20.000',
            'photo' => 'beauty3.jpg',
        ]);
        DB::table('product')->insert([
            'id' => 4,
            'category_id' => 1,
            'name' => 'lorem',
            'category' => 'Beauty',
            'detail' => 'lorem',
            'price' => '20.000',
            'photo' => 'beauty4.jpg',
        ]);
        DB::table('product')->insert([
            'id' => 5,
            'category_id' => 1,
            'name' => 'lorem',
            'category' => 'Beauty',
            'detail' => 'lorem',
            'price' => '20.000',
            'photo' => 'beauty5.jpg',
        ]);

        DB::table('product')->insert([
            'id' => 6,
            'category_id' => 2,
            'name' => 'lorem',
            'category' => 'Camera',
            'detail' => 'lorem',
            'price' => '20.000',
            'photo' => 'camera1.jpg',
        ]);
        DB::table('product')->insert([
            'id' => 7,
            'category_id' => 2,
            'name' => 'lorem',
            'category' => 'Camera',
            'detail' => 'lorem',
            'price' => '20.000',
            'photo' => 'camera2.jpg',
        ]);
        DB::table('product')->insert([
            'id' => 8,
            'category_id' => 2,
            'name' => 'lorem',
            'category' => 'Camera',
            'detail' => 'lorem',
            'price' => '20.000',
            'photo' => 'camera3.jpg',
        ]);
        DB::table('product')->insert([
            'id' => 9,
            'category_id' => 2,
            'name' => 'lorem',
            'category' => 'Camera',
            'detail' => 'lorem',
            'price' => '20.000',
            'photo' => 'camera4.jpg',
        ]);
        DB::table('product')->insert([
            'id' => 10,
            'category_id' => 2,
            'name' => 'lorem',
            'category' => 'Camera',
            'detail' => 'lorem',
            'price' => '20.000',
            'photo' => 'camera5.jpg',
        ]);
    }
}
