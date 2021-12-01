<?php

namespace App\Models;

use phpDocumentor\Reflection\Types\Self_;

class Post
{

    private static $blog_posts = [
        [
            "title" => "Keindahan Alam Toraja",
            "slug" => "judul-post-pertama",
            "author" => "Kevin Gilbert Toding",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt facilis porro commodi ipsam cupiditate impedit sint pariatur ducimus voluptates, incidunt laboriosam rem sit doloribus est, ut accusantium adipisci, esse dolores quos doloremque nulla deleniti ipsum. Perferendis obcaecati ad consequuntur sapiente velit perspiciatis, fugiat incidunt dolore, officiis at commodi, odit iusto quo voluptatibus officia quam quidem repudiandae excepturi. Numquam, minus facere veritatis vero voluptas labore atque, similique quia voluptate fugit soluta. Natus velit vel porro doloremque, consequatur enim! Quis modi velit accusamus, vitae eligendi ut? Atque perferendis veritatis sunt expedita! Odit error sit alias blanditiis quisquam architecto repudiandae perferendis corrupti temporibus."
        ],
        [
            "title" => "Pengalaman di Toraja",
            "slug" => "judul-post-kedua",
            "author" => "Angelina Christy",
            "body" => "
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia maiores enim reiciendis nostrum quasi consequuntur, obcaecati est optio iste illum expedita culpa vitae nulla earum quam esse iure totam alias explicabo. Enim eum tempore dolor quia sequi? Sint aspernatur deserunt dolorem rerum magnam aliquam repudiandae, nostrum ducimus, explicabo ipsa debitis ab quos accusantium illum rem eveniet. Corrupti exercitationem eius molestias in deserunt quod sunt, dolor suscipit eveniet ut maiores ullam fuga iste esse voluptatibus veniam quas voluptatem. Quas possimus doloremque totam tempore obcaecati repudiandae ipsam quis rerum quos cumque tenetur cum nemo neque consectetur voluptatem porro voluptates aut, excepturi, sit officia, quaerat tempora exercitationem vitae eligendi. Cupiditate architecto vero consequatur, rerum molestias itaque facere ipsam dolorem iure iusto voluptates temporibus reprehenderit ullam ut corrupti id tempore ad soluta corporis. Hic vero amet esse dolor fuga iste accusamus unde voluptatibus optio accusantium ullam quae aspernatur sunt, ab maxime repudiandae nesciunt sed expedita debitis magni maiores. Illum, laudantium blanditiis eius doloribus nam vel qui accusantium quidem iste architecto earum explicabo doloremque error libero! At architecto temporibus cumque ipsam est ullam! Doloremque a minus rem sapiente, doloribus libero incidunt, fugiat earum expedita quasi corrupti debitis recusandae ipsa maiores cum velit eum in eveniet non ullam? Sapiente magnam sequi atque repudiandae aliquam praesentium, voluptatum maiores! Omnis quis maxime ut accusantium vitae! Reiciendis, eaque optio. Illum temporibus quia fugit eligendi totam! Eligendi reiciendis obcaecati asperiores, ducimus ipsa possimus libero, id nulla voluptatibus magnam nobis eveniet expedita tempora repellendus provident? Tenetur porro ratione ea qui, natus nisi explicabo exercitationem saepe, facere quia officia! Repellendus, porro soluta eaque quam laborum aliquid enim asperiores quis dolorum quidem optio, a autem quibusdam repellat, consequatur veniam ex? Labore asperiores amet obcaecati tempore tenetur ut saepe? Distinctio deserunt porro officia quae iure earum omnis perspiciatis suscipit. Inventore dolores sed quisquam nemo.
        "
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstwhere('slug', $slug);
    }
}
