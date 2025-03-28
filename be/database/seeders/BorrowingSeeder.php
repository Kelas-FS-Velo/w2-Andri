<?php

namespace Database\Seeders;

use App\Models\Borrowing;
use App\Models\User;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BorrowingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all users and books
        $users = User::all();
        $books = Book::all();

        // Create 20 borrowing records
        for ($i = 0; $i < 20; $i++) {
            Borrowing::create([
                'user_id' => $users->random()->id,
                'book_id' => $books->random()->id,
                'borrowed_at' => now()->subDays(rand(1, 30)),
                'due_at' => now()->addDays(rand(7, 30)),
                'returned_at' => rand(0, 1) ? now() : null, // Randomly set returned_at
            ]);
        }
    }
}