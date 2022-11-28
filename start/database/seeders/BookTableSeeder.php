<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'category_id' => 1,
                'name' => 'vo nhat',
                'price' => 123333,
                'description' => 'van hoc'
            ],
            [
                'category_id' => 2,
                'name' => 'vu tru',
                'price' => 123333,
                'description' => 'van hoc'
            ],
            [
                'category_id' => 1,
                'name' => 'lao hac',
                'price' => 123333,
                'description' => 'van hoc'
            ]
        ]);
    }
}
