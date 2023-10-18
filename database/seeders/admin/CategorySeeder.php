<?php

namespace Database\Seeders\admin;

use App\Models\admin\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        Category::unguard();
        $tablePath = public_path('db/categories.sql');
        DB::unprepared(file_get_contents($tablePath));
   }
}
