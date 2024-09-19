<?php

namespace Database\Seeders;

use App\Models\ReplayQuestion;
use Illuminate\Database\Seeder;

class ReplayQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReplayQuestion::factory(10)->create();
    }
}
