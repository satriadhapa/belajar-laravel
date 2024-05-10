<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Moch Satria Dhapa Hamdani',
            'email' => 'satria@gmail.com',
            'password' => bcrypt('12345')
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        
        Post::create(
            [
                'category_id' => 1,
                'user_id' => 1,
                'title'=> 'Programming',
                'slug'=> 'programming',
                'author' =>'godzilla',
                'excerpt' => 'personal ipsum dolor sit amet consectetur adipisicing elit. Doloribus laborum facilis debitis vel velit, nihil excepturi exercitationem odit ipsum maxime?',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus laborum facilis debitis vel velit, nihil excepturi exercitationem odit ipsum maxime? Facilis, maiores nihil minus accusantium neque tempora repellendus suscipit quo nam, harum nisi. Nostrum provident sint iusto qui doloribus corrupti voluptate dolore, cum blanditiis quo praesentium magni quod? Quas necessitatibus cum aliquid suscipit ex omnis, facilis explicabo totam error voluptate quos eveniet, ut ducimus, unde fugit qui perferendis veritatis? Dolores itaque ducimus corporis dicta iste. Quod nesciunt, quae similique voluptas cupiditate suscipit atque, minus ratione ullam odit est aperiam eveniet eos inventore beatae commodi fuga ipsam! Maxime exercitationem assumenda facere modi temporibus odit expedita, autem est officiis quisquam vero doloremque commodi quaerat ratione, et provident quis, illo animi accusantium excepturi?</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus illo voluptate ab fuga, dolorum repellendus velit quidem distinctio, voluptatem officiis, possimus debitis id consectetur minus nesciunt qui ea amet totam nostrum labore dolor et? Reprehenderit fugiat possimus optio cum ullam? Id, doloremque eum nihil temporibus molestiae nobis asperiores accusantium sunt ex nemo perspiciatis, mollitia praesentium aliquam voluptates hic debitis tempora recusandae at, suscipit ipsa quos voluptatibus repudiandae ducimus placeat? Reprehenderit laudantium, molestiae nemo quasi ea sit ad magni perferendis voluptatem ab nulla a distinctio excepturi illum quod voluptates impedit id vitae? Perspiciatis enim accusantium nostrum earum minima id veritatis?</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus illo voluptate ab fuga, dolorum repellendus velit quidem distinctio, voluptatem officiis, possimus debitis id consectetur minus nesciunt qui ea amet totam nostrum labore dolor et? Reprehenderit fugiat possimus optio cum ullam? Id, doloremque eum nihil temporibus molestiae nobis asperiores accusantium sunt ex nemo perspiciatis, mollitia praesentium aliquam voluptates hic debitis tempora recusandae at, suscipit ipsa quos voluptatibus repudiandae ducimus placeat? Reprehenderit laudantium, molestiae nemo quasi ea sit ad magni perferendis voluptatem ab nulla a distinctio excepturi illum quod voluptates impedit id vitae? Perspiciatis enim accusantium nostrum earum minima id veritatis?</p>'
                ]
            );
        Post::create(
            [
                'category_id' => 2,
                'user_id' => 1,
                'title'=> 'Programming',
                'slug'=> 'programming',
                'author' =>'banteng',
                'excerpt' => 'personal ipsum dolor sit amet consectetur adipisicing elit. Doloribus laborum facilis debitis vel velit, nihil excepturi exercitationem odit ipsum maxime?',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus laborum facilis debitis vel velit, nihil excepturi exercitationem odit ipsum maxime? Facilis, maiores nihil minus accusantium neque tempora repellendus suscipit quo nam, harum nisi. Nostrum provident sint iusto qui doloribus corrupti voluptate dolore, cum blanditiis quo praesentium magni quod? Quas necessitatibus cum aliquid suscipit ex omnis, facilis explicabo totam error voluptate quos eveniet, ut ducimus, unde fugit qui perferendis veritatis? Dolores itaque ducimus corporis dicta iste. Quod nesciunt, quae similique voluptas cupiditate suscipit atque, minus ratione ullam odit est aperiam eveniet eos inventore beatae commodi fuga ipsam! Maxime exercitationem assumenda facere modi temporibus odit expedita, autem est officiis quisquam vero doloremque commodi quaerat ratione, et provident quis, illo animi accusantium excepturi?</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus illo voluptate ab fuga, dolorum repellendus velit quidem distinctio, voluptatem officiis, possimus debitis id consectetur minus nesciunt qui ea amet totam nostrum labore dolor et? Reprehenderit fugiat possimus optio cum ullam? Id, doloremque eum nihil temporibus molestiae nobis asperiores accusantium sunt ex nemo perspiciatis, mollitia praesentium aliquam voluptates hic debitis tempora recusandae at, suscipit ipsa quos voluptatibus repudiandae ducimus placeat? Reprehenderit laudantium, molestiae nemo quasi ea sit ad magni perferendis voluptatem ab nulla a distinctio excepturi illum quod voluptates impedit id vitae? Perspiciatis enim accusantium nostrum earum minima id veritatis?</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus illo voluptate ab fuga, dolorum repellendus velit quidem distinctio, voluptatem officiis, possimus debitis id consectetur minus nesciunt qui ea amet totam nostrum labore dolor et? Reprehenderit fugiat possimus optio cum ullam? Id, doloremque eum nihil temporibus molestiae nobis asperiores accusantium sunt ex nemo perspiciatis, mollitia praesentium aliquam voluptates hic debitis tempora recusandae at, suscipit ipsa quos voluptatibus repudiandae ducimus placeat? Reprehenderit laudantium, molestiae nemo quasi ea sit ad magni perferendis voluptatem ab nulla a distinctio excepturi illum quod voluptates impedit id vitae? Perspiciatis enim accusantium nostrum earum minima id veritatis?</p>'
                ]
            );
        Post::create(
            [
                'category_id' => 1,
                'user_id' => 1,
                'title'=> 'Personal',
                'slug'=> 'personal',
                'author' =>'Kong',
                'excerpt' => 'personal ipsum dolor sit amet consectetur adipisicing elit. Doloribus laborum facilis debitis vel velit, nihil excepturi exercitationem odit ipsum maxime?',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus laborum facilis debitis vel velit, nihil excepturi exercitationem odit ipsum maxime? Facilis, maiores nihil minus accusantium neque tempora repellendus suscipit quo nam, harum nisi. Nostrum provident sint iusto qui doloribus corrupti voluptate dolore, cum blanditiis quo praesentium magni quod? Quas necessitatibus cum aliquid suscipit ex omnis, facilis explicabo totam error voluptate quos eveniet, ut ducimus, unde fugit qui perferendis veritatis? Dolores itaque ducimus corporis dicta iste. Quod nesciunt, quae similique voluptas cupiditate suscipit atque, minus ratione ullam odit est aperiam eveniet eos inventore beatae commodi fuga ipsam! Maxime exercitationem assumenda facere modi temporibus odit expedita, autem est officiis quisquam vero doloremque commodi quaerat ratione, et provident quis, illo animi accusantium excepturi?</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus illo voluptate ab fuga, dolorum repellendus velit quidem distinctio, voluptatem officiis, possimus debitis id consectetur minus nesciunt qui ea amet totam nostrum labore dolor et? Reprehenderit fugiat possimus optio cum ullam? Id, doloremque eum nihil temporibus molestiae nobis asperiores accusantium sunt ex nemo perspiciatis, mollitia praesentium aliquam voluptates hic debitis tempora recusandae at, suscipit ipsa quos voluptatibus repudiandae ducimus placeat? Reprehenderit laudantium, molestiae nemo quasi ea sit ad magni perferendis voluptatem ab nulla a distinctio excepturi illum quod voluptates impedit id vitae? Perspiciatis enim accusantium nostrum earum minima id veritatis?</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus illo voluptate ab fuga, dolorum repellendus velit quidem distinctio, voluptatem officiis, possimus debitis id consectetur minus nesciunt qui ea amet totam nostrum labore dolor et? Reprehenderit fugiat possimus optio cum ullam? Id, doloremque eum nihil temporibus molestiae nobis asperiores accusantium sunt ex nemo perspiciatis, mollitia praesentium aliquam voluptates hic debitis tempora recusandae at, suscipit ipsa quos voluptatibus repudiandae ducimus placeat? Reprehenderit laudantium, molestiae nemo quasi ea sit ad magni perferendis voluptatem ab nulla a distinctio excepturi illum quod voluptates impedit id vitae? Perspiciatis enim accusantium nostrum earum minima id veritatis?</p>'
                ]
            );

            
    }
}
