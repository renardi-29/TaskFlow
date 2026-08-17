<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Belajar Laravel',
            'description' => 'Mempelajari dasar Laravel dan konsep MVC',
            'status' => 'pending',
            'priority' => 'high',
            'due_date' => '2026-08-20',
        ]);
    }
}
