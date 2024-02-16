<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'uuid' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('widgets')->insert([
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'your_uuid_here',
                'image' => "https://media.istockphoto.com/id/1202308432/vector/hands-painting-on-paper-workshop-concept-vector-illustration.jpg?s=612x612&w=0&k=20&c=JewcGTDq-4vQ9Xu3_q2oyAddJb9_rj50nSwIcg-yZ_U=",
                'type' => 'Type 1',
                'display' => 'Display 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'your_uuid_here',
                'image' => "https://media.istockphoto.com/id/1202308432/vector/hands-painting-on-paper-workshop-concept-vector-illustration.jpg?s=612x612&w=0&k=20&c=JewcGTDq-4vQ9Xu3_q2oyAddJb9_rj50nSwIcg-yZ_U=",
                'type' => 'Type 2',
                'display' => 'Display 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'your_uuid_here',
                'image' => "https://media.istockphoto.com/id/1202308432/vector/hands-painting-on-paper-workshop-concept-vector-illustration.jpg?s=612x612&w=0&k=20&c=JewcGTDq-4vQ9Xu3_q2oyAddJb9_rj50nSwIcg-yZ_U=",
                'type' => 'Type 2',
                'display' => 'Display 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'your_uuid_here',
                'image' => "https://media.istockphoto.com/id/1202308432/vector/hands-painting-on-paper-workshop-concept-vector-illustration.jpg?s=612x612&w=0&k=20&c=JewcGTDq-4vQ9Xu3_q2oyAddJb9_rj50nSwIcg-yZ_U=",
                'type' => 'Type 2',
                'display' => 'Display 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'your_uuid_here',
                'image' => "https://media.istockphoto.com/id/1202308432/vector/hands-painting-on-paper-workshop-concept-vector-illustration.jpg?s=612x612&w=0&k=20&c=JewcGTDq-4vQ9Xu3_q2oyAddJb9_rj50nSwIcg-yZ_U=",
                'type' => 'Type 2',
                'display' => 'Display 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'your_uuid_here',
                'image' => "https://media.istockphoto.com/id/1202308432/vector/hands-painting-on-paper-workshop-concept-vector-illustration.jpg?s=612x612&w=0&k=20&c=JewcGTDq-4vQ9Xu3_q2oyAddJb9_rj50nSwIcg-yZ_U=",
                'type' => 'Type 2',
                'display' => 'Display 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more widgets as needed
        ]);
    }
}
