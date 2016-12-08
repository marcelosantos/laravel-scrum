<?php

use Illuminate\Database\Seeder;

class ListingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lists = ['A FAZER','FAZENDO','FINALIZADO'];

        array_map(function($name){
            $now = date('Y-m-d H:i:s', strtotime('now'));
            DB::table('listings')->insert([
                'name' => $name,
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }, $lists);
    }
}
