<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name'=>'Домашний интернет',
            'general_feature' => 'Скорость',
            'created_at'=>Date('Y-m-d H:i:s')
        ]);

        DB::table('services')->insert([
            'name'=>'Телевидение',
            'general_feature' => 'Количество каналов',
            'created_at'=>Date('Y-m-d H:i:s')
        ]);
    }
}
