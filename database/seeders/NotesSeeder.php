<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('notes')->insert([
        //     'user_id' => 1,
        //     'note_title' => Str::random(25),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
