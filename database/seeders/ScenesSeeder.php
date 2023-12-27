<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ScenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scenes')->insert([
            'user_id' => 1,
            'title' => 'Sample1',
            'content' => 'Samplecontent1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
           
            
    }
}
