<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            'heading' => '住所',
            "description" => '〒507-0071,岐阜県多治見市旭ヶ丘10丁目6-15(美濃焼団地)',
        ]);

        DB::table('details')->insert([
            'heading' => '営業時間',
            "description" => '10:00~18:00',
        ]);

        DB::table('details')->insert([
            'heading' => '定休日',
            "description" => '土日祝日',
        ]);

        DB::table('details')->insert([
            'heading' => '電話番号',
            "description" => '0572-26-9516',
        ]);
    }
}
