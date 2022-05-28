<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//toko baut - circle slider
class Tank
{
    private static $tanks_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "excert" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi eligendi debitis, sunt unde, maiores quam porro qui molestiae asperiores libero suscipit vero saepe amet illum autem explicabo quidem minima nihil.",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi eligendi debitis, sunt unde, maiores quam porro qui molestiae asperiores libero suscipit vero saepe amet illum autem explicabo quidem minima nihil. Iusto voluptas excepturi incidunt dolorem ipsa ex, illo rerum dolore libero laborum itaque est fugiat dolor doloribus iste minus expedita voluptatem eum quos illum? Culpa exercitationem vel harum amet omnis itaque quos deleniti sed. Voluptates nesciunt inventore explicabo libero necessitatibus nostrum rerum, nulla tenetur magnam blanditiis itaque omnis ab ipsam, amet nobis? Quidem magni nulla, repudiandae optio nisi nam numquam. Eaque ipsam labore eum. Distinctio asperiores nihil rem totam in!"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "excert" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi eligendi debitis, sunt unde, maiores quam porro qui molestiae asperiores libero suscipit vero saepe amet illum autem explicabo quidem minima nihil.",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi eligendi debitis, sunt unde, maiores quam porro qui molestiae asperiores libero suscipit vero saepe amet illum autem explicabo quidem minima nihil. Iusto voluptas excepturi incidunt dolorem ipsa ex, illo rerum dolore libero laborum itaque est fugiat dolor doloribus iste minus expedita voluptatem eum quos illum? Culpa exercitationem vel harum amet omnis itaque quos deleniti sed. Voluptates nesciunt inventore explicabo libero necessitatibus nostrum rerum, nulla tenetur magnam blanditiis itaque omnis ab ipsam, amet nobis? Quidem magni nulla, repudiandae optio nisi nam numquam. Eaque ipsam labore eum. Distinctio asperiores nihil rem totam in!"
        ],
        [
            "title" => "Judul Ketiga",
            "slug" => "judul-ketiga",
            "excert" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi eligendi debitis, sunt unde, maiores quam porro qui molestiae asperiores libero suscipit vero saepe amet illum autem explicabo quidem minima nihil.",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi eligendi debitis, sunt unde, maiores quam porro qui molestiae asperiores libero suscipit vero saepe amet illum autem explicabo quidem minima nihil. Iusto voluptas excepturi incidunt dolorem ipsa ex, illo rerum dolore libero laborum itaque est fugiat dolor doloribus iste minus expedita voluptatem eum quos illum? Culpa exercitationem vel harum amet omnis itaque quos deleniti sed. Voluptates nesciunt inventore explicabo libero necessitatibus nostrum rerum, nulla tenetur magnam blanditiis itaque omnis ab ipsam, amet nobis? Quidem magni nulla, repudiandae optio nisi nam numquam. Eaque ipsam labore eum. Distinctio asperiores nihil rem totam in!"
        ],
    ];

    public static function all()
    {
        return collect(self::$tanks_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"]===$slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug',$slug);
    }
}

