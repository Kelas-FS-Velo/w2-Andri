<?php

namespace Database\Seeders;

use App\Models\UserBook;
use App\Models\User;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all users and books
        $users = User::all();
        $books = Book::all();

        // Create 25 user_book records
        for ($i = 0; $i < 25; $i++) {
            UserBook::create([
                'user_id' => $users->random()->id,
                'book_id' => $books->random()->id,
            ]);
        }
    }
}