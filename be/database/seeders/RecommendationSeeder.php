<?php

namespace Database\Seeders;

use App\Models\Recommendation;
use App\Models\User;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all users and books
        $users = User::all();
        $books = Book::all();

        // Create 15 recommendation records
        for ($i = 0; $i < 15; $i++) {
            Recommendation::create([
                'user_id' => $users->random()->id,
                'book_id' => $books->random()->id,
                'recommendation_score' => rand(1, 5) / 10, // Random score between 0.1 and 0.5
            ]);
        }
    }
}