<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->delete();
        DB::table('articles')->insert([
            [
                'id'          => 1,
                'category_id' => 1,
                'title'       => '当然是熟悉的test啦！',
                'author'      => 'admin',
                'markdown'    => '嘿嘿',
                'keywords'    => 'laravel',
                'cover'       => '/uploads/article/default.jpg',
                'is_top'      => 1,
                'click'       => 0,
                'created_at'  => '2017-7-16 07:35:12',
                'updated_at'  => '2016-7-16 07:35:12',
                'deleted_at'  => null,
            ]
        ]);
    }
}
