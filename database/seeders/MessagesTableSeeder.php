<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        $values = array();
        for ($i=1; $i <= 100; $i++) { 
            $value = [
                'user_id' => mt_rand(1, 10),
                'category_id' => mt_rand(1, 5),
                'title' => "title{$i}",
                'body' => "body{$i}",
                'created_at' => $now,
                'updated_at' => $now
            ];
            array_push($values, $value);
        }

        DB::table('messages')->insert($values);
    }
}
