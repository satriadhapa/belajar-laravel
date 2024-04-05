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
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus modi placeat vel qui harum iusto eligendi saepe eum rerum eaque quod praesentium alias quibusdam expedita, debitis autem quisquam quis provident?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta exercitationem aut inventore harum. Sint, qui illo suscipit sit nisi magni, cupiditate consequatur, quisquam dolores ex eum voluptates sapiente molestias consectetur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, architecto commodi. Sint maxime ipsam voluptatibus aut? Non, accusamus quisquam accusantium mollitia necessitatibus blanditiis quaerat impedit voluptates odio veniam dicta? Inventore!",
        ],
        [
            "title" => "Administrasi Bisnis",
            "slug" => "administrasi-bisnis",
            "author" => "Surtoyo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus modi placeat vel qui harum iusto eligendi saepe eum rerum eaque quod praesentium alias quibusdam expedita, debitis autem quisquam quis provident?
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta exercitationem aut inventore harum. Sint, qui illo suscipit sit nisi magni, cupiditate consequatur, quisquam dolores ex eum voluptates sapiente molestias consectetur.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, architecto commodi. Sint maxime ipsam voluptatibus aut? Non, accusamus quisquam accusantium mollitia necessitatibus blanditiis quaerat impedit voluptates odio veniam dicta? Inventore!",
        ],
        [
            "title" => "Teknik Sipil",
            "slug" => "teknik-sipil",
            "author" => "Akyas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus modi placeat vel qui harum iusto eligendi saepe eum rerum eaque quod praesentium alias quibusdam expedita, debitis autem quisquam quis provident?
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta exercitationem aut inventore harum. Sint, qui illo suscipit sit nisi magni, cupiditate consequatur, quisquam dolores ex eum voluptates sapiente molestias consectetur.
        Lorem ipsum dolor sit amet commodi. Sint maxime ipsam voluptatibus aut? Non, accusamus quisquam accusantium mollitia necessitatibus blanditiis quaerat impedit voluptates odio veniam dicta? Inventore!",
        ],
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus laborum facilis debitis vel velit, nihil excepturi exercitationem odit ipsum maxime? Facilis, maiores nihil minus accusantium neque tempora repellendus suscipit quo nam, harum nisi. Nostrum provident sint iusto qui doloribus corrupti voluptate dolore, cum blanditiis quo praesentium magni quod? Quas necessitatibus cum aliquid suscipit ex omnis, facilis explicabo totam error voluptate quos eveniet, ut ducimus, unde fugit qui perferendis veritatis? Dolores itaque ducimus corporis dicta iste. Quod nesciunt, quae similique voluptas cupiditate suscipit atque, minus ratione ullam odit est aperiam eveniet eos inventore beatae commodi fuga ipsam! Maxime exercitationem assumenda facere modi temporibus odit expedita, autem est officiis quisquam vero doloremque commodi quaerat ratione, et provident quis, illo animi accusantium excepturi?</p>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus illo voluptate ab fuga, dolorum repellendus velit quidem distinctio, voluptatem officiis, possimus debitis id consectetur minus nesciunt qui ea amet totam nostrum labore dolor et? Reprehenderit fugiat possimus optio cum ullam? Id, doloremque eum nihil temporibus molestiae nobis asperiores accusantium sunt ex nemo perspiciatis, mollitia praesentium aliquam voluptates hic debitis tempora recusandae at, suscipit ipsa quos voluptatibus repudiandae ducimus placeat? Reprehenderit laudantium, molestiae nemo quasi ea sit ad magni perferendis voluptatem ab nulla a distinctio excepturi illum quod voluptates impedit id vitae? Perspiciatis enim accusantium nostrum earum minima id veritatis?</p>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus illo voluptate ab fuga, dolorum repellendus velit quidem distinctio, voluptatem officiis, possimus debitis id consectetur minus nesciunt qui ea amet totam nostrum labore dolor et? Reprehenderit fugiat possimus optio cum ullam? Id, doloremque eum nihil temporibus molestiae nobis asperiores accusantium sunt ex nemo perspiciatis, mollitia praesentium aliquam voluptates hic debitis tempora recusandae at, suscipit ipsa quos voluptatibus repudiandae ducimus placeat? Reprehenderit laudantium, molestiae nemo quasi ea sit ad magni perferendis voluptatem ab nulla a distinctio excepturi illum quod voluptates impedit id vitae? Perspiciatis enim accusantium nostrum earum minima id veritatis?</p>

Post::create(
    [
        'title'=>'Teknik Sipil',
        'slug'=> 'teknik-sipil',
        'author' =>'Sukun',
        'excerpt' => 'sipil ipsum dolor sit amet consectetur adipisicing elit. Doloribus laborum facilis debitis vel velit, nihil excepturi exercitationem odit ipsum maxime?',
        'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus laborum facilis debitis vel velit, nihil excepturi exercitationem odit ipsum maxime? Facilis, maiores nihil minus accusantium neque tempora repellendus suscipit quo nam, harum nisi. Nostrum provident sint iusto qui doloribus corrupti voluptate dolore, cum blanditiis quo praesentium magni quod? Quas necessitatibus cum aliquid suscipit ex omnis, facilis explicabo totam error voluptate quos eveniet, ut ducimus, unde fugit qui perferendis veritatis? Dolores itaque ducimus corporis dicta iste. Quod nesciunt, quae similique voluptas cupiditate suscipit atque, minus ratione ullam odit est aperiam eveniet eos inventore beatae commodi fuga ipsam! Maxime exercitationem assumenda facere modi temporibus odit expedita, autem est officiis quisquam vero doloremque commodi quaerat ratione, et provident quis, illo animi accusantium excepturi?</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus illo voluptate ab fuga, dolorum repellendus velit quidem distinctio, voluptatem officiis, possimus debitis id consectetur minus nesciunt qui ea amet totam nostrum labore dolor et? Reprehenderit fugiat possimus optio cum ullam? Id, doloremque eum nihil temporibus molestiae nobis asperiores accusantium sunt ex nemo perspiciatis, mollitia praesentium aliquam voluptates hic debitis tempora recusandae at, suscipit ipsa quos voluptatibus repudiandae ducimus placeat? Reprehenderit laudantium, molestiae nemo quasi ea sit ad magni perferendis voluptatem ab nulla a distinctio excepturi illum quod voluptates impedit id vitae? Perspiciatis enim accusantium nostrum earum minima id veritatis?</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus illo voluptate ab fuga, dolorum repellendus velit quidem distinctio, voluptatem officiis, possimus debitis id consectetur minus nesciunt qui ea amet totam nostrum labore dolor et? Reprehenderit fugiat possimus optio cum ullam? Id, doloremque eum nihil temporibus molestiae nobis asperiores accusantium sunt ex nemo perspiciatis, mollitia praesentium aliquam voluptates hic debitis tempora recusandae at, suscipit ipsa quos voluptatibus repudiandae ducimus placeat? Reprehenderit laudantium, molestiae nemo quasi ea sit ad magni perferendis voluptatem ab nulla a distinctio excepturi illum quod voluptates impedit id vitae? Perspiciatis enim accusantium nostrum earum minima id veritatis?</p>'
        ]
    )