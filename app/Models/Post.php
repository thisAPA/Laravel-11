<?php


namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'Judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Amelya Puspita',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, temporibus quod. 
                Accusantium architecto quod numquam nostrum exercitationem dolorum beatae voluptate nam sit saepe dolore aut illo nemo magni, neque dignissimos!'
            ],
            [
                'id' => 2,
                'slug' => 'Judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Anggraeni',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatibus sapiente rerum, voluptas dolorem eveniet vero itaque nobis enim, 
                voluptates adipisci veniam? Vel unde impedit, neque adipisci dolores pariatur tenetur.'
            ]
        ];
    }

    public static function find($slug):array
    {
        // return Arr::first(static::all(), function($post) use ($slug){
        //     return $post['slug'] == $slug;
        // });
               
        $post = Arr::first(static::all(), fn($post) => $post['slug']== $slug);

        if(!$post){
            abort(404);
        }

        return $post;
    }
}