<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Halaman About'],['nama' =>'Amelya Puspita']);
});


Route::get('/posts',function(){
    return view('posts', ['title' => 'Blog', 'posts' =>[
        [
            'id' => 1,
            'slug' => 'Judul-artikel-1',
            'title' => 'judul Artikel 1',
            'author' => 'Amelya Puspita',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, temporibus quod. 
            Accusantium architecto quod numquam nostrum exercitationem dolorum beatae voluptate nam sit saepe dolore aut illo nemo magni, neque dignissimos!'
        ],
        [
            'id' => 2,
            'slug' => 'Judul-artikel-2',
            'title' => 'judul Artikel 2',
            'author' => 'Anggraeni',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatibus sapiente rerum, voluptas dolorem eveniet vero itaque nobis enim, 
            voluptates adipisci veniam? Vel unde impedit, neque adipisci dolores pariatur tenetur.'
        ]
    ]]);
});

Route :: get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'Judul-artikel-1',
            'title' => 'judul Artikel 1',
            'author' => 'Amelya Puspita',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, temporibus quod. 
            Accusantium architecto quod numquam nostrum exercitationem dolorum beatae voluptate nam sit saepe dolore aut illo nemo magni, neque dignissimos!'
        ],
        [
            'id' => 2,
            'slug' => 'Judul-artikel-2',
            'title' => 'judul Artikel 2',
            'author' => 'Anggraeni',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatibus sapiente rerum, voluptas dolorem eveniet vero itaque nobis enim, 
            voluptates adipisci veniam? Vel unde impedit, neque adipisci dolores pariatur tenetur.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view ('post', ['title' => 'Single Post', 'post' =>$post]);
});

Route::get('/contact', function(){
    return view('contact', ['title' => 'Silahkan Hubungi Kami']);
});