<?php

use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->delete();
        DB::table('sites')->insert([
            [
                'id'            => 1,
                'oauth_user_id' => 1,
                'name'          => '博客',
                'description'   => '个人博客',
                'url'           => 'http://guangsky.com',
                'audit'         => 0,
                'sort'          => 1,
                'created_at'    => '2018-11-15 20:35:12',
                'updated_at'    => '2018-11-15 20:35:12',
                'deleted_at'    => null,
            ]
        ]);
    }
}
