<?php

namespace Database\Seeders\admin;

use App\Models\admin\PageTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageTranslationSeeder extends Seeder
{
    public function run(): void
    {
        PageTranslation::unguard();
        $tablePath = public_path('db/page_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
