<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Contracts\Container\BindingResolutionException;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Sale 10%',
            'description' => 'Dijual Kripik Kaca harga 10k',
            'image_url'=> '123.com',
            'isbn'=>'000.000.001',
        ]);
        Book::create([
            'title' => 'Sale 20%',
            'description' => 'Dijual Kripik Pasir harga 20k',
            'image_url'=> '001.com',
            'isbn'=> '000.000.002'
        ]);
        Book::create([
            'title' => 'Sale 30%',
            'description' => 'Dijual Kripik Batu harga 39k',
            'image_url'=> '002.com',
            'isbn'=> '000.000.003'
        ]);
        Book::create([
            'title' => 'Sale 40%',
            'description' => 'Dijual Kripik Plastik harga 40k',
            'image_url'=> '003.com',
            'isbn'=> '000.000.004'
        ]);
        Book::create([
            'title' => 'Sale 50%',
            'description' => 'Dijual Kripik PVC harga 50k',
            'image_url'=> '004.com',
            'isbn'=> '000.000.005'
        ]);
        Book::create([
            'title' => 'Sale 60%',
            'description' => 'Dijual Kripik ABS harga 60k',
            'image_url'=> '005.com',
            'isbn'=> '000.000.006'
        ]);
        Book::create([
            'title' => 'Sale 70%',
            'description' => 'Dijual Kripik Bayem harga 70k',
            'image_url'=> '006.com',
            'isbn'=> '000.000.007'
        ]);
        Book::create([
            'title' => 'Sale 80%',
            'description' => 'Dijual Kripik Forced Carbon harga 80k',
            'image_url'=> '007.com',
            'isbn'=> '000.000.008'
        ]);
        Book::create([
            'title' => 'Sale 90%',
            'description' => 'Dijual Kripik Rak Sah Mbayar harga 0k',
            'image_url'=> '008.com',
            'isbn'=> '000.000.009'
        ]);
        Book::create([
            'title' => 'Sale 0%',
            'description' => 'Gaada Diskon AWODKAODKAWOKDOAW',
            'image_url'=> '009.com',
            'isbn'=> '123.2200.330913.293.9775'
        ]);
    }
}
