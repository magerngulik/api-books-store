<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\User;
use App\Models\Genre;
use App\Models\Discount;
use App\Models\BooksGenre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
        ]);

        $dataBuku = [
            [
                'title' => "Sapiens: A Brief History of Humankind",
                'cover' => "https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80",
                'author' => "Yuval Noah Harari",
                'publisher' => "Vintage",
                'rating' => 4.5,
                'publish_year' => 2014,
                'unit_price' => 1500,
            ],
            [
                'title' => "Educated: A Memoir",
                'cover' => "https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1212&q=80",
                'author' => "Tara Westover",
                'publisher' => "Random House",
                'rating' => 4.5,
                'publish_year' => 2018,
                'unit_price' => 1500,
            ],
            [
                'title' => "The Great Gatsby",
                'cover' => "https://images.unsplash.com/photo-1629992101753-56d196c8aabb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=690&q=80",
                'author' => "F. Scott Fitzgerald",
                'publisher' => "Scribner",
                'rating' => 4.5,
                'publish_year' => 1925,
                'unit_price' => 1500,
            ],
            [
                'title' => "1984",
                'cover' => "https://images.unsplash.com/photo-1589829085413-56de8ae18c73?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1212&q=80",
                'author' => "George Orwell",
                'publisher' => "Signet Classics",
                'rating' => 4.5,
                'publish_year' => 1949,
                'unit_price' => 1500,
            ],
            [
                'title' => "To Kill a Mockingbird",
                'cover' => "https://images.unsplash.com/photo-1515098506762-79e1384e9d8e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80",
                'author' => "Harper Lee",
                'publisher' => "Harper Perennial Modern Classics",
                'rating' => 4.5,
                'publish_year' => 1960,
                'unit_price' => 1500,
            ],
            [
                'title' => "The Alchemist",
                'cover' => "https://images.unsplash.com/photo-1603289847962-9da9640785e3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80",
                'author' => "Paulo Coelho",
                'publisher' => "HarperOne",
                'rating' => 4.5,
                'publish_year' => 1988,
                'unit_price' => 1500,
            ],
            [
                'title' => "The Lord of the Rings",
                'cover' => "https://images.unsplash.com/photo-1511108690759-009324a90311?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80",
                'author' => "J.R.R. Tolkien",
                'publisher' => "Mariner Books",
                'rating' => 4.5,
                'publish_year' => 1954,
                'unit_price' => 1500,
            ],
            [
                'title' => "Pride and Prejudice",
                'cover' => "https://images.unsplash.com/photo-1612969308146-066d55f37ccb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                'author' => "Jane Austen",
                'publisher' => "Penguin Classics",
                'rating' => 4.5,
                'publish_year' => 1813,
                'unit_price' => 1500,
            ],
            [
                'title' => "The Catcher in the Rye",
                'cover' => "https://images.unsplash.com/photo-1529521818954-c76995518833?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                'author' => "J.D. Salinger",
                'publisher' => "Little, Brown and Company",
                'rating' => 4.5,
                'publish_year' => 1951,
                'unit_price' => 1500,
            ],
            [
                'title' => "Harry Potter and the Philosopher's Stone",
                'cover' => "https://images.unsplash.com/photo-1544736779-08492534e887?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                'author' => "J.K. Rowling",
                'rating' => 4.5,
                'publisher' => "Bloomsbury",
                'publish_year' => 1997,
                'unit_price' => 1500,
            ],
        ];

        foreach ($dataBuku as $bookData) {
            Book::create($bookData);
        }
       
        $genres = [
            [
                "nama" => "Fiksi",
                "genre" => "Novel, Cerita Pendek, Drama, Puisi"
            ],
            [
                "nama" => "Nonfiksi",
                "genre" => "Sejarah, Panduan, Biografi, Referensi"
            ],
            [
                "nama" => "Misteri dan Detektif",
                "genre" => "Novel Detektif, Cerita Seru Kriminal"
            ],
            [
                "nama" => "Fantasi",
                "genre" => "Novel Fantasi, Cerita Epik"
            ],
            [
                "nama" => "Sains Fiksi",
                "genre" => "Novel Sains Fiksi, Cerita Perjalanan Antariksa"
            ],
            [
                "nama" => "Romansa",
                "genre" => "Novel Romansa, Cerita Cinta"
            ],
            [
                "nama" => "Sejarah",
                "genre" => "Buku Sejarah, Masa Lalu, Budaya"
            ],
            [
                "nama" => "Biografi",
                "genre" => "Buku Biografi, Pengalaman Pribadi"
            ],
            [
                "nama" => "Pendidikan",
                "genre" => "Buku Teks, Buku Pelajaran, Pengembangan Diri"
            ],
            [
                "nama" => "Puisi",
                "genre" => "Kumpulan Puisi, Puisi Modern"
            ]
        ];
        
        foreach ($genres as $genre) {
            Genre::create(["name" => $genre["nama"], "genre" => $genre["genre"]]);
        } 
        
        
        $bookGenre = [
            [
                'book_id'=> 1,
                'genre_id' => 1
            ],
            [
                'book_id'=> 1,
                'genre_id' => 2
            ],
            [
                'book_id'=> 2,
                'genre_id' => 3
            ],
            [
                'book_id'=> 2,
                'genre_id' => 4
            ],
            [
                'book_id'=> 2,
                'genre_id' => 6
            ],
        ];

        foreach ($bookGenre as $gen) {
            BooksGenre::create([
                "book_id" => $gen["book_id"],
                "genre_id" => $gen["genre_id"]
            ]);
        }

        $discount =[ 
            [
            'code' =>'liburan murah',
            'amount' => 50,
            'start_date' => '2023-6-19',
            'end_date' => '2023-7-19'
            ],
            [
            'code' =>'Hiburan anak muda',
            'amount' => 20,
            'start_date' => '2023-6-19',
            'end_date' => '2023-7-19'
            ],
        ];

        foreach ($discount as $value) {
            Discount::create([
                'code' =>$value['code'],
                'amount' => $value['amount'],
                'start_date' => $value['start_date'],
                'end_date' => $value['end_date']
            ]);
        }

    }
}
