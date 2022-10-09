<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('pages')->insert([
        //     'note_id' => 1,
        //     'page_title' => "note1のpage",
        //     'page_content' => Str::random(200),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
