<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
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
    public static function all()
    {
        return self::$blog_posts;
    }
    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $post;
    }
}
