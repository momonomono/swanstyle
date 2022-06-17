<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'title' => '毛穴洗浄+小顔フェイシャルMFIP',
            'time' => 90,
            'content' => '水素水で頑固な汚れを吸引&洗浄し取り除くトリートメントと小顔フェイシャルのセットです。 毛穴洗浄後にMFIP',
            'list_price' => 14800,
            'first_price' => 9000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'title' => '極上パック付き小顔フェイシャル',
            'time' => 90,
            'content' => 'スポット超音波とMFIPを搭載し、表面ではなく土台からも持ち上げてリフトアップに効果抜群!! 施術すぐにお化粧OK!! お肌のお手入れ後に極上成分たっぷりのパックをのせることでお肌もしっとり!',
            'list_price' => 14800,
            'first_price' => 9000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'title' => '小顔フェイシャルMFIP',
            'time' => 75,
            'content' => 'スポット超音波とMFIPを搭載し、表面ではなく土台からも持ち上げてリフトアップに効果抜群!! 施術すぐにお化粧OK!!',
            'list_price' => 12800,
            'first_price' => 8800,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'title' => '超極上仕上げハイドロスプラッシュ',
            'time' => 90,
            'content' => '古い角質をケアし、水素水で頑固な汚れを吸引&洗浄し取り除くトリートメント。 汚れを取り除いたお肌にコラーゲンをたっぷりのせた後に、マシンを使い更に成分をお肌に導入していきますのでふっくらしっとりの超極上を体験できます。',
            'list_price' => 15200,
            'first_price' => 8800,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'title' => '極上パック付毛穴スッキリハイドロスプラッシュ',
            'time' => 90,
            'content' => '古い角質をケアし、水素水で頑固な汚れを吸引&洗浄し取り除くトリートメント。 汚れを取り除いたお肌に極上成分たっぷりのパックをのせるのでお肌もしっとり!!',
            'list_price' => 13200,
            'first_price' => 8800,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'title' => '毛穴スッキリハイドロスプラッシュ',
            'time' => 75,
            'content' => '古い角質をケアし、水素水で頑固な汚れを吸引&洗浄し取り除くトリートメント。 ホームケアでは落としきれない肌の老廃物をしっかりと取り除き毛穴レスなスッキリ引き締まった素肌を取り戻します。 毛穴の汚れや詰まりが気になる方にはオススメ!!',
            'list_price' => 11200,
            'first_price' => 6800,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'title' => 'スレンダーQ',
            'time' => 40,
            'content' => 'インナーマッスルにアプローチ! お洋服を着たままでも施術が可能!!',
            'list_price' => 6400,
            'first_price' => 3800,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        

        DB::table('menus')->insert([
            'title' => 'ホワイトニング',
            'time' => 45,
            'content' => 'セルフホワイトニング!!',
            'list_price' => 3500,
            'first_price' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'title' => 'ハイドロスカルプ',
            'time' => 40,
            'content' => '水素水で毛穴の汚れを取り除きエッセンスを浸透させた後、 頭全体のマッサージを行います.',
            'list_price' => 6400,
            'first_price' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
