<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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

        // User::create([
        //     'name' => 'Novi Damayanti',
        //     'email' => 'novidamayanti@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Irul latif',
        //     'email' => 'irulsoekamti94@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Wisata Umum',
            'slug' => 'wisata-umum'
        ]);

        Category::create([
            'name' => 'Wisata Alam',
            'slug' => 'wisata-alam'
        ]);

        Category::create([
            'name' => 'Wisata Edukasi',
            'slug' => 'wisata-edukasi'
        ]);

        Category::create([
            'name' => 'Wisata Religi dan Sejarah',
            'slug' => 'wisata-religi-dan-sejarah'
        ]);

        Category::create([
            'name' => 'Wisata Kuliner',
            'slug' => 'wisata-kiliner'
        ]);

        Category::create([
            'name' => 'Wisata Belanja',
            'slug' => 'wisata-belanja'
        ]);
        
        Category::create([
            'name' => 'Wisata Budaya',
            'slug' => 'wisata-budaya'
        ]);
        // Category::factory(7)->create();

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, excepturi quasi laborum possimus cupiditate ipsa! Expedita aspernatur ipsum eligendi ratione nam voluptatum vel doloremque corporis, cum mollitia tempora! Aut expedita sed perferendis vero quae molestias. Alias commodi quibusdam corporis quae accusamus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quidem illo incidunt ratione? Aliquid cum ratione iusto voluptate? Alias tempore quisquam amet aperiam dolorem est pariatur inventore ipsum velit architecto, porro placeat nisi impedit reprehenderit, dicta, consectetur quae. Vel beatae, libero id delectus culpa sit nihil inventore officia recusandae autem eveniet enim voluptatem eum officiis reiciendis quo saepe fugit quae laboriosam assumenda. Sed repellendus, obcaecati aliquam sunt commodi necessitatibus iste sint debitis maiores voluptatum reprehenderit, pariatur nesciunt distinctio dicta consectetur minima ad culpa molestias, totam amet facilis sit porro cum modi! Culpa sit ratione commodi blanditiis aliquam. Eaque inventore exercitationem voluptas sequi aut placeat perferendis quibusdam praesentium quod eligendi quos dolores doloremque, consequatur at, in culpa nihil nobis corrupti iure? Debitis earum odio dicta, commodi perspiciatis labore aperiam sunt officia impedit corporis inventore quis beatae! Eum eligendi ullam accusamus similique id porro esse aperiam, maiores totam temporibus numquam odit animi quos quae pariatur fuga quisquam exercitationem molestias ducimus. Mollitia reiciendis nulla placeat perferendis delectus laudantium saepe est provident soluta labore fugiat voluptas aperiam sunt dolore necessitatibus, numquam libero praesentium ad? Voluptates natus asperiores, delectus deserunt expedita perspiciatis veritatis odit sed similique sapiente hic, non iure distinctio tenetur doloribus nisi iusto?',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, excepturi quasi laborum possimus cupiditate ipsa! Expedita aspernatur ipsum eligendi ratione nam voluptatum vel doloremque corporis, cum mollitia tempora! Aut expedita sed perferendis vero quae molestias. Alias commodi quibusdam corporis quae accusamus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quidem illo incidunt ratione? Aliquid cum ratione iusto voluptate? Alias tempore quisquam amet aperiam dolorem est pariatur inventore ipsum velit architecto, porro placeat nisi impedit reprehenderit, dicta, consectetur quae. Vel beatae, libero id delectus culpa sit nihil inventore officia recusandae autem eveniet enim voluptatem eum officiis reiciendis quo saepe fugit quae laboriosam assumenda. Sed repellendus, obcaecati aliquam sunt commodi necessitatibus iste sint debitis maiores voluptatum reprehenderit, pariatur nesciunt distinctio dicta consectetur minima ad culpa molestias, totam amet facilis sit porro cum modi! Culpa sit ratione commodi blanditiis aliquam. Eaque inventore exercitationem voluptas sequi aut placeat perferendis quibusdam praesentium quod eligendi quos dolores doloremque, consequatur at, in culpa nihil nobis corrupti iure? Debitis earum odio dicta, commodi perspiciatis labore aperiam sunt officia impedit corporis inventore quis beatae! Eum eligendi ullam accusamus similique id porro esse aperiam, maiores totam temporibus numquam odit animi quos quae pariatur fuga quisquam exercitationem molestias ducimus. Mollitia reiciendis nulla placeat perferendis delectus laudantium saepe est provident soluta labore fugiat voluptas aperiam sunt dolore necessitatibus, numquam libero praesentium ad? Voluptates natus asperiores, delectus deserunt expedita perspiciatis veritatis odit sed similique sapiente hic, non iure distinctio tenetur doloribus nisi iusto?',
        //     'category_id' => 1,
        //     'user_id' => 2

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, excepturi quasi laborum possimus cupiditate ipsa! Expedita aspernatur ipsum eligendi ratione nam voluptatum vel doloremque corporis, cum mollitia tempora! Aut expedita sed perferendis vero quae molestias. Alias commodi quibusdam corporis quae accusamus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quidem illo incidunt ratione? Aliquid cum ratione iusto voluptate? Alias tempore quisquam amet aperiam dolorem est pariatur inventore ipsum velit architecto, porro placeat nisi impedit reprehenderit, dicta, consectetur quae. Vel beatae, libero id delectus culpa sit nihil inventore officia recusandae autem eveniet enim voluptatem eum officiis reiciendis quo saepe fugit quae laboriosam assumenda. Sed repellendus, obcaecati aliquam sunt commodi necessitatibus iste sint debitis maiores voluptatum reprehenderit, pariatur nesciunt distinctio dicta consectetur minima ad culpa molestias, totam amet facilis sit porro cum modi! Culpa sit ratione commodi blanditiis aliquam. Eaque inventore exercitationem voluptas sequi aut placeat perferendis quibusdam praesentium quod eligendi quos dolores doloremque, consequatur at, in culpa nihil nobis corrupti iure? Debitis earum odio dicta, commodi perspiciatis labore aperiam sunt officia impedit corporis inventore quis beatae! Eum eligendi ullam accusamus similique id porro esse aperiam, maiores totam temporibus numquam odit animi quos quae pariatur fuga quisquam exercitationem molestias ducimus. Mollitia reiciendis nulla placeat perferendis delectus laudantium saepe est provident soluta labore fugiat voluptas aperiam sunt dolore necessitatibus, numquam libero praesentium ad? Voluptates natus asperiores, delectus deserunt expedita perspiciatis veritatis odit sed similique sapiente hic, non iure distinctio tenetur doloribus nisi iusto?',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, excepturi quasi laborum possimus cupiditate ipsa! Expedita aspernatur ipsum eligendi ratione nam voluptatum vel doloremque corporis, cum mollitia tempora! Aut expedita sed perferendis vero quae molestias. Alias commodi quibusdam corporis quae accusamus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quidem illo incidunt ratione? Aliquid cum ratione iusto voluptate? Alias tempore quisquam amet aperiam dolorem est pariatur inventore ipsum velit architecto, porro placeat nisi impedit reprehenderit, dicta, consectetur quae. Vel beatae, libero id delectus culpa sit nihil inventore officia recusandae autem eveniet enim voluptatem eum officiis reiciendis quo saepe fugit quae laboriosam assumenda. Sed repellendus, obcaecati aliquam sunt commodi necessitatibus iste sint debitis maiores voluptatum reprehenderit, pariatur nesciunt distinctio dicta consectetur minima ad culpa molestias, totam amet facilis sit porro cum modi! Culpa sit ratione commodi blanditiis aliquam. Eaque inventore exercitationem voluptas sequi aut placeat perferendis quibusdam praesentium quod eligendi quos dolores doloremque, consequatur at, in culpa nihil nobis corrupti iure? Debitis earum odio dicta, commodi perspiciatis labore aperiam sunt officia impedit corporis inventore quis beatae! Eum eligendi ullam accusamus similique id porro esse aperiam, maiores totam temporibus numquam odit animi quos quae pariatur fuga quisquam exercitationem molestias ducimus. Mollitia reiciendis nulla placeat perferendis delectus laudantium saepe est provident soluta labore fugiat voluptas aperiam sunt dolore necessitatibus, numquam libero praesentium ad? Voluptates natus asperiores, delectus deserunt expedita perspiciatis veritatis odit sed similique sapiente hic, non iure distinctio tenetur doloribus nisi iusto?',
        //     'category_id' => 3,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Lima',
        //     'slug' => 'judul-ke-lima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, excepturi quasi laborum possimus cupiditate ipsa! Expedita aspernatur ipsum eligendi ratione nam voluptatum vel doloremque corporis, cum mollitia tempora! Aut expedita sed perferendis vero quae molestias. Alias commodi quibusdam corporis quae accusamus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quidem illo incidunt ratione? Aliquid cum ratione iusto voluptate? Alias tempore quisquam amet aperiam dolorem est pariatur inventore ipsum velit architecto, porro placeat nisi impedit reprehenderit, dicta, consectetur quae. Vel beatae, libero id delectus culpa sit nihil inventore officia recusandae autem eveniet enim voluptatem eum officiis reiciendis quo saepe fugit quae laboriosam assumenda. Sed repellendus, obcaecati aliquam sunt commodi necessitatibus iste sint debitis maiores voluptatum reprehenderit, pariatur nesciunt distinctio dicta consectetur minima ad culpa molestias, totam amet facilis sit porro cum modi! Culpa sit ratione commodi blanditiis aliquam. Eaque inventore exercitationem voluptas sequi aut placeat perferendis quibusdam praesentium quod eligendi quos dolores doloremque, consequatur at, in culpa nihil nobis corrupti iure? Debitis earum odio dicta, commodi perspiciatis labore aperiam sunt officia impedit corporis inventore quis beatae! Eum eligendi ullam accusamus similique id porro esse aperiam, maiores totam temporibus numquam odit animi quos quae pariatur fuga quisquam exercitationem molestias ducimus. Mollitia reiciendis nulla placeat perferendis delectus laudantium saepe est provident soluta labore fugiat voluptas aperiam sunt dolore necessitatibus, numquam libero praesentium ad? Voluptates natus asperiores, delectus deserunt expedita perspiciatis veritatis odit sed similique sapiente hic, non iure distinctio tenetur doloribus nisi iusto?',
        //     'category_id' => 3,
        //     'user_id' => 2

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Enam',
        //     'slug' => 'judul-ke-enam',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, excepturi quasi laborum possimus cupiditate ipsa! Expedita aspernatur ipsum eligendi ratione nam voluptatum vel doloremque corporis, cum mollitia tempora! Aut expedita sed perferendis vero quae molestias. Alias commodi quibusdam corporis quae accusamus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quidem illo incidunt ratione? Aliquid cum ratione iusto voluptate? Alias tempore quisquam amet aperiam dolorem est pariatur inventore ipsum velit architecto, porro placeat nisi impedit reprehenderit, dicta, consectetur quae. Vel beatae, libero id delectus culpa sit nihil inventore officia recusandae autem eveniet enim voluptatem eum officiis reiciendis quo saepe fugit quae laboriosam assumenda. Sed repellendus, obcaecati aliquam sunt commodi necessitatibus iste sint debitis maiores voluptatum reprehenderit, pariatur nesciunt distinctio dicta consectetur minima ad culpa molestias, totam amet facilis sit porro cum modi! Culpa sit ratione commodi blanditiis aliquam. Eaque inventore exercitationem voluptas sequi aut placeat perferendis quibusdam praesentium quod eligendi quos dolores doloremque, consequatur at, in culpa nihil nobis corrupti iure? Debitis earum odio dicta, commodi perspiciatis labore aperiam sunt officia impedit corporis inventore quis beatae! Eum eligendi ullam accusamus similique id porro esse aperiam, maiores totam temporibus numquam odit animi quos quae pariatur fuga quisquam exercitationem molestias ducimus. Mollitia reiciendis nulla placeat perferendis delectus laudantium saepe est provident soluta labore fugiat voluptas aperiam sunt dolore necessitatibus, numquam libero praesentium ad? Voluptates natus asperiores, delectus deserunt expedita perspiciatis veritatis odit sed similique sapiente hic, non iure distinctio tenetur doloribus nisi iusto?',
        //     'category_id' => 4,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tuju',
        //     'slug' => 'judul-ke-tuju',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, excepturi quasi laborum possimus cupiditate ipsa! Expedita aspernatur ipsum eligendi ratione nam voluptatum vel doloremque corporis, cum mollitia tempora! Aut expedita sed perferendis vero quae molestias. Alias commodi quibusdam corporis quae accusamus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quidem illo incidunt ratione? Aliquid cum ratione iusto voluptate? Alias tempore quisquam amet aperiam dolorem est pariatur inventore ipsum velit architecto, porro placeat nisi impedit reprehenderit, dicta, consectetur quae. Vel beatae, libero id delectus culpa sit nihil inventore officia recusandae autem eveniet enim voluptatem eum officiis reiciendis quo saepe fugit quae laboriosam assumenda. Sed repellendus, obcaecati aliquam sunt commodi necessitatibus iste sint debitis maiores voluptatum reprehenderit, pariatur nesciunt distinctio dicta consectetur minima ad culpa molestias, totam amet facilis sit porro cum modi! Culpa sit ratione commodi blanditiis aliquam. Eaque inventore exercitationem voluptas sequi aut placeat perferendis quibusdam praesentium quod eligendi quos dolores doloremque, consequatur at, in culpa nihil nobis corrupti iure? Debitis earum odio dicta, commodi perspiciatis labore aperiam sunt officia impedit corporis inventore quis beatae! Eum eligendi ullam accusamus similique id porro esse aperiam, maiores totam temporibus numquam odit animi quos quae pariatur fuga quisquam exercitationem molestias ducimus. Mollitia reiciendis nulla placeat perferendis delectus laudantium saepe est provident soluta labore fugiat voluptas aperiam sunt dolore necessitatibus, numquam libero praesentium ad? Voluptates natus asperiores, delectus deserunt expedita perspiciatis veritatis odit sed similique sapiente hic, non iure distinctio tenetur doloribus nisi iusto?',
        //     'category_id' => 5,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Delapan',
        //     'slug' => 'judul-ke-delapan',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, excepturi quasi laborum possimus cupiditate ipsa! Expedita aspernatur ipsum eligendi ratione nam voluptatum vel doloremque corporis, cum mollitia tempora! Aut expedita sed perferendis vero quae molestias. Alias commodi quibusdam corporis quae accusamus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quidem illo incidunt ratione? Aliquid cum ratione iusto voluptate? Alias tempore quisquam amet aperiam dolorem est pariatur inventore ipsum velit architecto, porro placeat nisi impedit reprehenderit, dicta, consectetur quae. Vel beatae, libero id delectus culpa sit nihil inventore officia recusandae autem eveniet enim voluptatem eum officiis reiciendis quo saepe fugit quae laboriosam assumenda. Sed repellendus, obcaecati aliquam sunt commodi necessitatibus iste sint debitis maiores voluptatum reprehenderit, pariatur nesciunt distinctio dicta consectetur minima ad culpa molestias, totam amet facilis sit porro cum modi! Culpa sit ratione commodi blanditiis aliquam. Eaque inventore exercitationem voluptas sequi aut placeat perferendis quibusdam praesentium quod eligendi quos dolores doloremque, consequatur at, in culpa nihil nobis corrupti iure? Debitis earum odio dicta, commodi perspiciatis labore aperiam sunt officia impedit corporis inventore quis beatae! Eum eligendi ullam accusamus similique id porro esse aperiam, maiores totam temporibus numquam odit animi quos quae pariatur fuga quisquam exercitationem molestias ducimus. Mollitia reiciendis nulla placeat perferendis delectus laudantium saepe est provident soluta labore fugiat voluptas aperiam sunt dolore necessitatibus, numquam libero praesentium ad? Voluptates natus asperiores, delectus deserunt expedita perspiciatis veritatis odit sed similique sapiente hic, non iure distinctio tenetur doloribus nisi iusto?',
        //     'category_id' => 6,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Sembilan',
        //     'slug' => 'judul-ke-sembilan',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, excepturi quasi laborum possimus cupiditate ipsa! Expedita aspernatur ipsum eligendi ratione nam voluptatum vel doloremque corporis, cum mollitia tempora! Aut expedita sed perferendis vero quae molestias. Alias commodi quibusdam corporis quae accusamus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quidem illo incidunt ratione? Aliquid cum ratione iusto voluptate? Alias tempore quisquam amet aperiam dolorem est pariatur inventore ipsum velit architecto, porro placeat nisi impedit reprehenderit, dicta, consectetur quae. Vel beatae, libero id delectus culpa sit nihil inventore officia recusandae autem eveniet enim voluptatem eum officiis reiciendis quo saepe fugit quae laboriosam assumenda. Sed repellendus, obcaecati aliquam sunt commodi necessitatibus iste sint debitis maiores voluptatum reprehenderit, pariatur nesciunt distinctio dicta consectetur minima ad culpa molestias, totam amet facilis sit porro cum modi! Culpa sit ratione commodi blanditiis aliquam. Eaque inventore exercitationem voluptas sequi aut placeat perferendis quibusdam praesentium quod eligendi quos dolores doloremque, consequatur at, in culpa nihil nobis corrupti iure? Debitis earum odio dicta, commodi perspiciatis labore aperiam sunt officia impedit corporis inventore quis beatae! Eum eligendi ullam accusamus similique id porro esse aperiam, maiores totam temporibus numquam odit animi quos quae pariatur fuga quisquam exercitationem molestias ducimus. Mollitia reiciendis nulla placeat perferendis delectus laudantium saepe est provident soluta labore fugiat voluptas aperiam sunt dolore necessitatibus, numquam libero praesentium ad? Voluptates natus asperiores, delectus deserunt expedita perspiciatis veritatis odit sed similique sapiente hic, non iure distinctio tenetur doloribus nisi iusto?',
        //     'category_id' => 7,
        //     'user_id' => 2

        // ]);
    }
}
