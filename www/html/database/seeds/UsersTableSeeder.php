<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Автор не известен',
                'email' => 'author_unknown@g.g',
                'password' => bcrypt(str_random(16)),

            ],
            [
                'name' => 'Автор',
                'email' => 'auth@g.ru',
                'password' => bcrypt('1111112')
            ]
        ];

        DB::table('users')->insert($data);
    }
}
