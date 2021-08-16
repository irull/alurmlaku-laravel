<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Irul Latif",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptatum nobis repellendus libero quae odit. Quasi provident dicta vel accusamus tenetur totam, a quisquam et molestias quos numquam harum doloremque eaque tempore sed iusto aspernatur quis qui modi? Ipsa repellat voluptas expedita, provident aliquam eos in vero nihil, eaque necessitatibus dolore illo, voluptates nesciunt dignissimos et est odio doloribus. Cum quod accusamus officia vel ea dolorem minima unde eum atque quia? Expedita, veniam. Dolore nobis ex aspernatur ut deleniti doloribus?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Novi Damayanti",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ea accusantium corporis aut nulla in iusto eaque magni, impedit quasi. Voluptas, non officia exercitationem officiis ad molestiae velit harum iste tenetur voluptates facilis quam mollitia natus eveniet aperiam sint veniam explicabo neque? Delectus facere repellat ducimus reprehenderit beatae deleniti sed ratione eaque, libero explicabo suscipit eligendi quaerat cumque fugiat magnam voluptate quas tempore doloribus excepturi quibusdam eos alias. Culpa a rem exercitationem! Nam ab eum ipsum, deleniti ipsa adipisci neque."
        ],
        ];

    public static function all()
    {
        return collect (self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
            return $posts->firstWhere('slug', $slug);
    }
}
