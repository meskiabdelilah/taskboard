<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the first user or create a sample user
        $user = User::first();
        
        if (!$user) {
            $user = User::create([
                'name' => 'Demo User',
                'email' => 'demo@example.com',
                'password' => bcrypt('password'),
            ]);
        }

        // Create sample tasks
        $tasks = [
            [
                'title' => 'Complete project documentation',
                'description' => 'Write comprehensive documentation for the TaskBoard project including API endpoints and user guide.',
                'priority' => 'high',
                'status' => 'in_progress',
                'deadline' => now()->addDays(3),
                'user_id' => $user->id,
            ],
            [
                'title' => 'Review pull requests',
                'description' => 'Review and merge pending pull requests from the development team.',
                'priority' => 'medium',
                'status' => 'pending',
                'deadline' => now()->addDays(1),
                'user_id' => $user->id,
            ],
            [
                'title' => 'Update dependencies',
                'description' => 'Update all npm and composer packages to their latest stable versions.',
                'priority' => 'low',
                'status' => 'completed',
                'deadline' => now()->addDays(7),
                'user_id' => $user->id,
            ],
            [
                'title' => 'Fix responsive design issues',
                'description' => 'Address mobile layout problems on the dashboard and tasks pages.',
                'priority' => 'high',
                'status' => 'pending',
                'deadline' => now()->addDays(2),
                'user_id' => $user->id,
            ],
            [
                'title' => 'Implement task search functionality',
                'description' => 'Add search and filter capabilities to the tasks index page.',
                'priority' => 'medium',
                'status' => 'pending',
                'deadline' => now()->addDays(5),
                'user_id' => $user->id,
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
