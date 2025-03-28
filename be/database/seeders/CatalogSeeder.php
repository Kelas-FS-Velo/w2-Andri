<?php

namespace Database\Seeders;

use App\Models\Catalog;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all books
        $books = Book::all();

        // Create 10 catalog records
        foreach ($books as $book) {
            Catalog::create([
                'resource_type' => 'Book',
                'call_number' => 'C' . rand(1000, 9999),
                'subjects' => json_encode(['Fiction', 'Non-Fiction', 'Science', 'History']),
                'book_id' => $book->id,
            ]);
        }
    }
}