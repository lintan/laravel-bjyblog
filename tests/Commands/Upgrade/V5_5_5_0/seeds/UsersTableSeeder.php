<?php

namespace Tests\Commands\Upgrade\V5_5_5_0\Seeds;

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
            0 => [
                'id'             => 1,
                'name'           => 'test',
                'email'          => 'test@test.com',
                'password'       => bcrypt(123456),
                'remember_token' => null,
                'created_at'     => '2016-10-22 07:35:12',
                'updated_at'     => '2016-10-22 07:35:12',
                'deleted_at'     => null,
            ],
        ]);
    }
}
