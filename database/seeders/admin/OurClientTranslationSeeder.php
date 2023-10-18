<?php

namespace Database\Seeders\admin;

use App\Models\admin\OurClientTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OurClientTranslationSeeder extends Seeder
{

    public function run(): void
    {
        OurClientTranslation::unguard();
        $tablePath = public_path('db/our_client_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
