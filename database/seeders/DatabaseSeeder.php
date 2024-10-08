<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tag;
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
                'name' => 'Regular Component',
                'image' => asset('images/widget1.jpg') ,
                'type' => 'Type 1',
                'display' => 'Display 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'Form Component',
                'image' => asset('images/widget2.jpg') ,
                'type' => 'Type 2',
                'display' => 'Display 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'Review List Component',
                'image' => asset('images/widget1.jpg') ,
                'type' => 'Type 3',
                'display' => 'Display 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'Review List Component',
                'image' => asset('images/widget3.jpg') ,
                'type' => 'Type 4',
                'display' => 'Display 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'Carousel Component',
                'image' => asset('images/widget1.jpg') ,
                'type' => 'Type 5',
                'display' => 'Display 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'Slid Component',
                'image' => asset('images/widget2.jpg') ,
                'type' => 'Type 6',
                'display' => 'Display 6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'Coverflow',
                'image' => asset('images/widget2.jpg') ,
                'type' => 'Type 7',
                'display' => 'Display 7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'Parallax',
                'image' => asset('images/widget2.jpg') ,
                'type' => 'Type 8',
                'display' => 'Display 8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'Mousewheel control',
                'image' => asset('images/widget2.jpg') ,
                'type' => 'Type 9',
                'display' => 'Display 9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'Effect cards',
                'image' => asset('images/widget2.jpg') ,
                'type' => 'Type 10',
                'display' => 'Display 10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more widgets as needed
        ]);

        $tags = [
            'programming',
            'design',
            'web development',
            'javascript',
            'python',
            'css',
            'html',
            'backend',
            'frontend',
            'database'
        ];

        foreach ($tags as $tag) {
            Tag::create(['name' => $tag]);
        }

    }
}
