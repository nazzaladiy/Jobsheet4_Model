<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Espresso',
                'content' => 'Espresso merupakan kopi modern yang paling kuat kadar kopinya (very strong). 
                            Espresso merupakan ekstrak biji kopi murni tanpa campuran. Rasanya sudah pasti pahit, 
                            dengan tingkat kekentalannya tergantung dari biji kopi yang digunakan. Espresso biasa dikonsumsi dalam cangkir kecil.',
                'featured_image' => '/img/espreso.jpg'
            ],
            [
                'title' => 'Macchiato',
                'content' => 'Macchiato merupakan espresso yang diberi campuran susu foam. 
                Foam atau susu yang di-steam sendiri kadarnya sedikit, sehingga rasanya tetap strong. 
                Foam di macchiato, susunya hanya dua sampai tiga sendok aja. Sebenarnya, 
                ini untuk orang yang suka espresso tapi lagi mau dikasih susu sedikit.',
                'featured_image' => '/img/machiato.jpg'
            ],
            [
                'title' => 'Piccolo',
                'content' => 'Piccolo memiliki kadar susu yang lebih banyak dibanding dua "teman" sebelumnya. 
                Kopinya menggunakan ristretto yang merupakan ekstraksi terbaik dari espresso.
                Hal ini menjadikan kopi lebih lembut dan tidak terlalu asam, tapi prosesnya lebih lama.',
                'featured_image' => '/img/picolo.jpg'
            ],
            [
                'title' => 'Cappucino',
                'content' => 'Ini dia yang sajian kopi modern yang populer karena mudah ditemui, 
                bahkan kini tersaji dalam bentuk instan. Cappucino pada dasarnya merupakan kopi
                susu yang juga diberi foam.',
                'featured_image'=> '/img/cappucino.jpg'
            ],
            [
                'title' => 'Latte',
                'content' => 'Sama dengan cappucino, latte pada dasarnya ialah kopi susu. 
                Latte diberi foam dari susu yang sudah di-steam. Kadar susunya paling banyak,
                 barista menyebut komposisinya dengan very milky coffee. Tentunya kadar lemak di latte 
                 paling banyak dibandingkan kopi macchiato, piccolo, espresso dan cappucino.',
                'featured_image' => '/img/latte.jpg'
            ],
            [
                'title' => 'Americano',
                'content' => ' Amerikano adalah minuman kopi yang dibuat dengan mencampurkan satu seloki 
                espresso dengan air panas. Air panas yang digunakan dalam minuman ini adalah sebanyak 6 hingga 8 ons',
                'featured_image' => 'img/americano.jpg'
            ]
        ]);
    }
}
