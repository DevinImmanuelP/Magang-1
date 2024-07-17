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
            'title' => '1984',
            'description' => 'A dystopian social science fiction novel and cautionary tale about the dangers of totalitarianism.',
            'image_url'=> 'yandex.com',
            'isbn'=> '200.003.203'
        ]);

        Book::create([
            'title' => 'Pocong Numpak RX King',
            'description' => 'Seorang Bapak" madura bernama Pochiniki Ongkekan atau disingkat Pocong, ia sedang naik motor RX King seharga 1 nasi padang berlapis emas 100kg 24 karat',
            'image_url'=> 'why.rho.vercel.app',
            'isbn'=> '192.168.0.0.1'
        ]);

        Book::create([
            'title' => 'Bening',
            'description' => 'gua bisa ketik ini kalau ga ketauan abang gue, klopun ketahuan muka gua bakal di gesrokin ke keyboard, bntar ya gua maiusafhjasiuyfisj dsauhauibnajkd dsagysghb',
            'image_url'=> 'www.co.id',
            'isbn'=> '9990.22.1.34.2'
        ]);
    }
}
