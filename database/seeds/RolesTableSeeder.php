<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name'=>'Администратор',
            'created_at'=>Date('Y-m-d H:i:s')
        ]);

        DB::table('roles')->insert([
            'name'=>'Пользователь',
            'created_at'=>Date('Y-m-d H:i:s')
        ]);
    }
}
