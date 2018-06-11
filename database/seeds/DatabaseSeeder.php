<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::insert("insert into tasks (name,date,place,size) values ('鯛','2018/05/21','大阪','25')");

    }
}
