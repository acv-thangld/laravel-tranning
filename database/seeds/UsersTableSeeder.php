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
        DB::table('articles')->insert([
			'title' => $facker->sentence,
			'content' =>implode('',$facker->sentence(4))
        ]);    
    }
}
