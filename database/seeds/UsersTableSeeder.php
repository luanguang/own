<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert([
            [
                'id'             => 1,
                'name'           => 'guang',
                'email'          => 'luanguang@elemenx.com',
                'password'       => bcrypt('root123456'),
                'remember_token' => null,
                'created_at'     => '2016-10-22 07:35:12',
                'updated_at'     => '2016-10-22 07:35:12',
                'deleted_at'     => null,
            ]
        ]);
    }
}
