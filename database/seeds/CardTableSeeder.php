<?php

use Illuminate\Database\Seeder;

class CardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s', strtotime('now'));
        for($i=0; $i < 5; $i++){
            DB::table('cards')->insert([
                'list_id' => 1,
                'title' => 'Test 1',
                'description' => 'Desc Test 1',
                'story_points' => 0,
                'business_value' => 0,
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
    }
}
