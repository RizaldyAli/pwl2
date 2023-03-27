<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'nama' => 'Futsal',
                'deskripsi' => 'Saya suka futsal karena menyenangkan bisa nendang kaki orang'
            ],[
                'nama' => 'Renang',
                'deskripsi' => 'Saya suka renang karena menyenangkan'
            ],[
                'nama' => 'Main Game',
                'deskripsi' => 'Saya suka main game karena menyenangkan'
            ]
        ]);
    }
}
