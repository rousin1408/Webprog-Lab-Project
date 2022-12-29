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
        // kategori beauty
        // id nya dikomen soalnya udah auto increment
        DB::table('product')->insert([
            // 'id' => 1,
            'category_id' => 1,
            'name' => 'aazz',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'beauty1.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 2,
            'category_id' => 1,
            'name' => 'aabb',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'beauty2.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 3,
            'category_id' => 1,
            'name' => 'bbcc',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'beauty3.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 4,
            'category_id' => 1,
            'name' => 'ccdd',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'beauty4.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 5,
            'category_id' => 1,
            'name' => 'ddee',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'beauty5.jpg',
        ]);

        DB::table('product')->insert([
            // 'id' => 6,
            'category_id' => 1,
            'name' => 'eeff',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'beauty6.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 7,
            'category_id' => 1,
            'name' => 'ffgg',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'beauty7.jpg',
        ]);

        DB::table('product')->insert([
            // 'id' => 8,
            'category_id' => 1,
            'name' => 'gghh',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'beauty8.jpg',
        ]);

        // kategori kamera

        DB::table('product')->insert([
            // 'id' => 9,
            'category_id' => 2,
            'name' => 'hhii',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'camera1.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 7,
            'category_id' => 2,
            'name' => 'iijj',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'camera2.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 8,
            'category_id' => 2,
            'name' => 'jjkk',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'camera3.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 9,
            'category_id' => 2,
            'name' => 'kkll',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'camera4.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'llmm',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'camera5.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'mmnn',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'camera6.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'nnoo',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'camera7.jpg',
        ]);

        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'oopp',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae esse pariatur alias accusamus cupiditate aliquam! Eligendi perferendis tempore repellat inventore sunt blanditiis eos quam excepturi quas? Facilis, ratione nostrum!',
            'price' => '20.000',
            'photo' => 'camera8.jpg',
        ]);

    }
}
