<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //\DB::insert('INSERT INTO categories (name, status) VALUES (?, ?)', ['text', 0]);
        $categories = [
            ['name'=>'artisan', 'description'=>'artisan categories', 'status'=>1],
            ['name'=>'php', 'description'=>'php categories', 'status'=>1],
            ['name'=>'laravel', 'description'=>'laravel categories', 'status'=>1],
        ];

        foreach ($categories as $category) {
            \DB::insert('INSERT INTO categories (name, status, description, created_at, updated_at) VALUES (?, ?, ?, ?, ?)',
                [
                    $category['name'],
                    $category['status'],
                    $category['description'],
                    now(),
                    now()
                ]);
        }
    }
}
