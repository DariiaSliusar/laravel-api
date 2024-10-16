<?php

namespace Database\Seeders;

use App\Models\Desk;
use Database\Factories\DeskFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DesksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Desk::factory()->count(5)->create();
    }
}
