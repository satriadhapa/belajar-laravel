<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'name'  => 'Moch Satria Dhapa Hamdani',
        'email' => 'satriadhapa10@gmail.com',
        'image' => 'satria.jpg'
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Teknik Informatika",
            "slug"  => "teknik-informatika",
            "author" => "Moch Satria Dhapa Hamdani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus modi placeat vel qui harum iusto eligendi saepe eum rerum eaque quod praesentium alias quibusdam expedita, debitis autem quisquam quis provident?
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta exercitationem aut inventore harum. Sint, qui illo suscipit sit nisi magni, cupiditate consequatur, quisquam dolores ex eum voluptates sapiente molestias consectetur.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, architecto commodi. Sint maxime ipsam voluptatibus aut? Non, accusamus quisquam accusantium mollitia necessitatibus blanditiis quaerat impedit voluptates odio veniam dicta? Inventore!",
        ],
        [
            "title" => "Pendidikan Bahasa dan Sastra Indonesia",
            "slug"  => "pendidikan-bahasa-dan-sastra-indonesia",
            "author" => "Ai Mulyati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus modi placeat vel qui harum iusto eligendi saepe eum rerum eaque quod praesentium alias quibusdam expedita, debitis autem quisquam quis provident?
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta exercitationem aut inventore harum. Sint, qui illo suscipit sit nisi magni, cupiditate consequatur, quisquam dolores ex eum voluptates sapiente molestias consectetur.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, architecto commodi. Sint maxime ipsam voluptatibus aut? Non, accusamus quisquam accusantium mollitia necessitatibus blanditiis quaerat impedit voluptates odio veniam dicta? Inventore!",
        ],
        [
            "title" => "Administrasi Bisnis",
            "slug" => "administrasi-bisnis",
            "author" => "Andini Khairunisa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus modi placeat vel qui harum iusto eligendi saepe eum rerum eaque quod praesentium alias quibusdam expedita, debitis autem quisquam quis provident?
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta exercitationem aut inventore harum. Sint, qui illo suscipit sit nisi magni, cupiditate consequatur, quisquam dolores ex eum voluptates sapiente molestias consectetur.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, architecto commodi. Sint maxime ipsam voluptatibus aut? Non, accusamus quisquam accusantium mollitia necessitatibus blanditiis quaerat impedit voluptates odio veniam dicta? Inventore!",
        ],
    ];
    return view('posts', [
        'title' => 'Posts',
        'posts' =>  $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Teknik Informatika",
            "slug"  => "teknik-informatika",
            "author" => "Moch Satria Dhapa Hamdani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus modi placeat vel qui harum iusto eligendi saepe eum rerum eaque quod praesentium alias quibusdam expedita, debitis autem quisquam quis provident?
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta exercitationem aut inventore harum. Sint, qui illo suscipit sit nisi magni, cupiditate consequatur, quisquam dolores ex eum voluptates sapiente molestias consectetur.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, architecto commodi. Sint maxime ipsam voluptatibus aut? Non, accusamus quisquam accusantium mollitia necessitatibus blanditiis quaerat impedit voluptates odio veniam dicta? Inventore!",
        ],
        [
            "title" => "Pendidikan Bahasa dan Sastra Indonesia",
            "slug"  => "pendidikan-bahasa-dan-sastra-indonesia",
            "author" => "Ai Mulyati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus modi placeat vel qui harum iusto eligendi saepe eum rerum eaque quod praesentium alias quibusdam expedita, debitis autem quisquam quis provident?
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta exercitationem aut inventore harum. Sint, qui illo suscipit sit nisi magni, cupiditate consequatur, quisquam dolores ex eum voluptates sapiente molestias consectetur.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, architecto commodi. Sint maxime ipsam voluptatibus aut? Non, accusamus quisquam accusantium mollitia necessitatibus blanditiis quaerat impedit voluptates odio veniam dicta? Inventore!",
        ],
        [
            "title" => "Administrasi Bisnis",
            "slug" => "administrasi-bisnis",
            "author" => "Andini Khairunisa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus modi placeat vel qui harum iusto eligendi saepe eum rerum eaque quod praesentium alias quibusdam expedita, debitis autem quisquam quis provident?
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta exercitationem aut inventore harum. Sint, qui illo suscipit sit nisi magni, cupiditate consequatur, quisquam dolores ex eum voluptates sapiente molestias consectetur.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, architecto commodi. Sint maxime ipsam voluptatibus aut? Non, accusamus quisquam accusantium mollitia necessitatibus blanditiis quaerat impedit voluptates odio veniam dicta? Inventore!",
        ],
    ];
    $new_post =[];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => 'Single Post',
        "post" => $new_post
    ]);
});
