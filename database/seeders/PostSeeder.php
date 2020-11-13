<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post01['title'] = [
          'en' => 'Awesome translated post!',
          'ar' => 'مشاركة مترجمة رائعة!',
          'ca' => '¡Impresionante publicación traducida!'
        ];
        $post01['body'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post02['title'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post02['body'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post03['title'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post03['body'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post04['title'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post04['body'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post05['title'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post05['body'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post06['title'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post06['body'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post07['title'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post07['body'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post08['title'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post08['body'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post09['title'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post09['body'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post10['title'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => 'Disculpa. ¿Dónde está el baño? '
        ];
        $post10['body'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => 'Disculpa. ¿Dónde está el baño? '
        ];

        Post::create($post01);
        Post::create($post02);
        Post::create($post03);
        Post::create($post04);
        Post::create($post05);
        Post::create($post06);
        Post::create($post07);
        Post::create($post08);
        Post::create($post09);
        Post::create($post10);
    }
}
