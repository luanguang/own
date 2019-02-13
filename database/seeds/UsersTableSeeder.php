<?php

use Carbon\Carbon;
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
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),
                'deleted_at'     => null,
            ]
        ]);
    }
}
