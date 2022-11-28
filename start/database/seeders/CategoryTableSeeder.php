<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('categories')->insert([
        //     'name' => 'Van Hoc',
        //     'description' => 'Van hoc'
        // ]);

        DB::table('categories')->insert([
            [
                'name' => 'Van Hoc',
                'description' => 'Van hoc'
            ],
            [
                'name' => 'Vat Ly',
                'description' => 'Vat Ly'
            ]
        ]);

    }
}
