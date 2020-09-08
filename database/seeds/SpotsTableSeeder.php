<?php

use Illuminate\Database\Seeder;

class SpotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spots')->insert([
            [
                'id' => '1',
                'place' => 'やちゅの家',
                'address' => '東京都豊洲市やちゅの3-5',
                'budget' => '2000~3000',
                'averageTime' => '120',
                'regularHoliday' => '土,日',
                'businessHours' => '10:00~17:00',
                'genre' => 'ゆったり,映え',
                'keyword' => '夜景',
                'season' => 'いつでも',
                'title' => '松戸が追った女の家',
                'overview' => 'その名はやちゅかにゃみ',
                'comment' => 'スキー一緒に行ったのに開始10分で帰られました',
                'like' => '1878'
            ],[
                'id' => '2',
                'place' => 'やちゅの家',
                'address' => '東京都豊洲市やちゅの3-5',
                'budget' => '2000~3000',
                'averageTime' => '120',
                'regularHoliday' => '土,日',
                'businessHours' => '10:00~17:00',
                'genre' => 'ゆったり,映え',
                'keyword' => '夜景',
                'season' => 'いつでも',
                'title' => '松戸が追った女の家',
                'overview' => 'その名はやちゅかにゃみ',
                'comment' => 'スキー一緒に行ったのに開始10分で帰られました',
                'like' => '1878'
            ],[
                'id' => '3',
                'place' => 'やちゅの家',
                'address' => '東京都豊洲市やちゅの3-5',
                'budget' => '2000~3000',
                'averageTime' => '120',
                'regularHoliday' => '土,日',
                'businessHours' => '10:00~17:00',
                'genre' => 'ゆったり,映え',
                'keyword' => '夜景',
                'season' => 'いつでも',
                'title' => '松戸が追った女の家',
                'overview' => 'その名はやちゅかにゃみ',
                'comment' => 'スキー一緒に行ったのに開始10分で帰られました',
                'like' => '1878'
            ],[
                'id' => '4',
                'place' => 'やちゅの家',
                'address' => '東京都豊洲市やちゅの3-5',
                'budget' => '2000~3000',
                'averageTime' => '120',
                'regularHoliday' => '土,日',
                'businessHours' => '10:00~17:00',
                'genre' => 'ゆったり,映え',
                'keyword' => '夜景',
                'season' => 'いつでも',
                'title' => '松戸が追った女の家',
                'overview' => 'その名はやちゅかにゃみ',
                'comment' => 'スキー一緒に行ったのに開始10分で帰られました',
                'like' => '1878'
            ],[
                'id' => '5',
                'place' => 'やちゅの家',
                'address' => '東京都豊洲市やちゅの3-5',
                'budget' => '2000~3000',
                'averageTime' => '120',
                'regularHoliday' => '土,日',
                'businessHours' => '10:00~17:00',
                'genre' => 'ゆったり,映え',
                'keyword' => '夜景',
                'season' => 'いつでも',
                'title' => '松戸が追った女の家',
                'overview' => 'その名はやちゅかにゃみ',
                'comment' => 'スキー一緒に行ったのに開始10分で帰られました',
                'like' => '1878'
            ]
        ]);
    }
}
