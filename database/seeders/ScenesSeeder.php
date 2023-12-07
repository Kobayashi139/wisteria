<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Scene;

class ScenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scene')->insert([
            'title' => 'Sample1',
            'content' => 'Samplecontent1',
            'created_at' => now(),
            'updated_at' =>NULL
            ]);
           
            
    }
}
