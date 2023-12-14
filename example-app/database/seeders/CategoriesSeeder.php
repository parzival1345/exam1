<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('categories')->insert([
         'title' => 'ورزشی'
      ]);
      DB::table('categories')->insert([
         'title' => 'هنری'
      ]);
      DB::table('categories')->insert([
         'title' => 'اجتماعی'
      ]);
    }
}
