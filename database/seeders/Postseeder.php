<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Postseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('posts')->insert([
        'name' => Str::random(10),
        'description' => Str::random(100),
        'category_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
    ]);
}
}
