<?php

namespace Database\Seeders;

use App\Models\Inventory;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all books
        $books = Book::all();

        // Create inventory records for each book
        foreach ($books as $book) {
            Inventory::create([
                'book_id' => $book->id,
                'location' => 'Shelf ' . rand(1, 10),
                'availability_status' => rand(0, 1) ? true : false,
            ]);
        }
    }
}