<?php

namespace Database\Seeders\admin;

use App\Models\admin\BannerCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerCategorySeeder extends Seeder
{
    public function run(): void
    {
        BannerCategory::unguard();
        $tablePath = public_path('db/banner_categories.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
