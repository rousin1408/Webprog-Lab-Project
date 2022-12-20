<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
            'name' => 'Beauty',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
        Category::create([
            'name' => 'Camera',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
    }
}
