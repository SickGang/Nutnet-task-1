<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voi
     */
    public function run()
    {
        $timestamp = mt_rand(1, time());
        for ($i = 0; $i < 30; $i++) {
            DB::table('items')->insert([
                'title' => 'Пластинка-' . $i,
                'author' => 'Автор-'. $i,
                'date-of-creation' => date("d M Y", $timestamp)
            ]);
        }
    }
}
