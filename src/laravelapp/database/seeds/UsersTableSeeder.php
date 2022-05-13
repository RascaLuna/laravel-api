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
        DB::table('users')->insert([
            [
                'name'=>'Yamada',
                'sex'=>'female',
                'email'=>'yamada@example.com',
                'prefecture'=>'Tokyo',
                'birthday'=>'2000-11-11',
                'password'=>'testtest',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Tanaka',
                'sex'=>'male',
                'email'=>'tanaka@example.com',
                'prefecture'=>'Saitama',
                'birthday'=>'1990-12-12',
                'password'=>'testtest',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Suzuki',
                'sex'=>'female',
                'email'=>'suzuki@example.com',
                'prefecture'=>'Kanagawa',
                'birthday'=>'1970-07-11',
                'password'=>'testtest',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Ochiai',
                'sex'=>'male',
                'email'=>'ochiai@example.com',
                'prefecture'=>'Chiba',
                'birthday'=>'1960-03-02',
                'password'=>'testtest',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Takei',
                'sex'=>'female',
                'email'=>'takei@example.com',
                'prefecture'=>'Hokkaido',
                'birthday'=>'1970-05-05',
                'password'=>'testtest',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            ]);
    }
}
