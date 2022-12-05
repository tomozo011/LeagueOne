<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PanasonicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('panasonics')->insert([
            // PR
                ['id' => 1, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '稲垣　啓太', 'position' => 'PR', 'birthday' => 1990, 'height' => 186, 'weight' => 116 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 2, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'ヴァル　アサエリ愛', 'position' => 'PR', 'birthday' => 1989, 'height' => 187, 'weight' => 115 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 3, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '平野　翔平', 'position' => 'PR', 'birthday' => 1993, 'height' => 178, 'weight' => 120 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 4, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '床田　裕亮', 'position' => 'PR', 'birthday' => 1995, 'height' => 182, 'weight' => 110 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 5, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'クレイグ ミラー', 'position' => 'PR', 'birthday' => 1990, 'height' => 186, 'weight' => 116 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 6, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '古畑　翔', 'position' => 'PR', 'birthday' => 1996, 'height' => 185, 'weight' => 118 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 7, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'スリアシ トル', 'position' => 'PR', 'birthday' => 1993, 'height' => 188, 'weight' => 118 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 8, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '藤井 大喜', 'position' => 'PR', 'birthday' => 1998, 'height' => 183, 'weight' => 114 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 9, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '新妻 汰一', 'position' => 'PR', 'birthday' => 1998, 'height' => 187, 'weight' => 125 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 10, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'ダニエル ペレズ', 'position' => 'PR', 'birthday' => 1997, 'height' => 185, 'weight' => 108 , 'cap' => 'なし', 'category' => 'B'],
            // HO
                ['id' => 11, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '堀江 翔太', 'position' => 'HO', 'birthday' => 1986, 'height' => 180, 'weight' => 104 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 12, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '坂手 淳史', 'position' => 'HO', 'birthday' => 1993, 'height' => 180, 'weight' => 104 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 13, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '下釜 優次', 'position' => 'HO', 'birthday' => 1992, 'height' => 178, 'weight' => 102 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 14, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '島根 一磨', 'position' => 'HO', 'birthday' => 1996, 'height' => 175, 'weight' => 103 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 15, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '島田 彪雅', 'position' => 'HO', 'birthday' => 2000, 'height' => 176, 'weight' => 108 , 'cap' => 'なし', 'category' => 'A'],
            // LO
                ['id' => 16, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '長谷川 崚太', 'position' => 'LO/FL', 'birthday' => 1993, 'height' => 188, 'weight' => 100 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 17, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '宮川 智海', 'position' => 'LO/FL', 'birthday' => 1993, 'height' => 191, 'weight' => 106 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 18, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'ジャック コーネルセン', 'position' => 'LO/FL/No.8', 'birthday' => 1994, 'height' => 195, 'weight' => 110 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 19, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'エセイ ハアンガナ', 'position' => 'LO/FL', 'birthday' => 1999, 'height' => 198, 'weight' => 120 , 'cap' => 'なし', 'category' => 'B'],
                ['id' => 20, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'マーク アボット', 'position' => 'LO', 'birthday' => 1990, 'height' => 197, 'weight' => 112 , 'cap' => 'なし', 'category' => 'B'],
                ['id' => 21, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '橋本 吾郎', 'position' => 'LO/FL', 'birthday' => 1999, 'height' => 190, 'weight' => 101 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 22, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'ルード デヤハー', 'position' => 'LO', 'birthday' => 1992, 'height' => 206, 'weight' => 125 , 'cap' => 'なし', 'category' => 'C'],
                ['id' => 23, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'リアム ミッチェル', 'position' => 'LO/FL', 'birthday' => 1995, 'height' => 197, 'weight' => 117 , 'cap' => 'なし', 'category' => 'B'],
            // FL  
                ['id' => 24, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '谷 昌樹', 'position' => 'FL/No.8', 'birthday' => 1990, 'height' => 180, 'weight' => 95 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 25, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '布巻 峻介', 'position' => 'FL', 'birthday' => 1992, 'height' => 178, 'weight' => 98 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 26, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'ベン ガンター', 'position' => 'FL/No.8', 'birthday' => 1997, 'height' => 195, 'weight' => 120 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 27, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '大西 樹', 'position' => 'FL/No.8', 'birthday' => 1995, 'height' => 185, 'weight' => 98 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 28, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '福井 翔大', 'position' => 'FL/No.8', 'birthday' => 1999, 'height' => 186, 'weight' => 101 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 29, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '浅沼 樹羅', 'position' => 'FL', 'birthday' => 1996, 'height' => 185, 'weight' => 98 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 30, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '川崎 龍清', 'position' => 'FL/LO', 'birthday' => 1997, 'height' => 184, 'weight' => 100 , 'cap' => 'なし', 'category' => 'A'],
            // SH    
                ['id' => 31, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '内田 啓介', 'position' => 'SH', 'birthday' => 1992, 'height' => 179, 'weight' => 86 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 32, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '高城 佑太', 'position' => 'SH', 'birthday' => 1993, 'height' => 162, 'weight' => 64 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 33, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '小山 大輝', 'position' => 'SH', 'birthday' => 1994, 'height' => 171, 'weight' => 74 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 34, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '本堂 杏虎', 'position' => 'SH', 'birthday' => 1998, 'height' => 173, 'weight' => 84 , 'cap' => 'なし', 'category' => 'A'],
            // SO    
                ['id' => 35, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '山沢 拓也', 'position' => 'SO/FB', 'birthday' => 1994, 'height' => 176, 'weight' => 84 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 36, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '松田 力也', 'position' => 'SO/CTB/FB', 'birthday' => 1994, 'height' => 181, 'weight' => 92 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 37, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '金田 瑛司', 'position' => 'SO/FB', 'birthday' => 1993, 'height' => 174, 'weight' => 84 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 38, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '山沢　京平', 'position' => 'SO/FB', 'birthday' => 1998, 'height' => 176, 'weight' => 85 , 'cap' => 'なし', 'category' => 'A'],
            // CTB    
                ['id' => 39, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'ディラン ライリー', 'position' => 'CTB/WTB', 'birthday' => 1997, 'height' => 187, 'weight' => 102 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 40, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '戸室 達貴', 'position' => 'CTB/WTB', 'birthday' => 1994, 'height' => 176, 'weight' => 86 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 41, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'ダミアン デアレンデ', 'position' => 'CTB', 'birthday' => 1991, 'height' => 190, 'weight' => 105 , 'cap' => 'なし', 'category' => 'C'],
            // WTB
                ['id' => 42, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '梶　伊織', 'position' => 'WTB', 'birthday' => 1992, 'height' => 170, 'weight' => 75 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 43, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '竹山 晃暉', 'position' => 'WTB/SO/FB', 'birthday' => 1996, 'height' => 175, 'weight' => 84 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 44, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '丹治 辰碩', 'position' => 'WTB/FB', 'birthday' => 1996, 'height' => 184, 'weight' => 91 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 45, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'マリカ コロインベテ', 'position' => 'WTB', 'birthday' => 1992, 'height' => 182, 'weight' => 96 , 'cap' => 'なし', 'category' => 'C'],
                ['id' => 46, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '川崎 清純', 'position' => 'WTB/FB', 'birthday' => 1999, 'height' => 191, 'weight' => 100 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 47, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> 'マノア ラトゥ', 'position' => 'WTB/CTB', 'birthday' => 1998, 'height' => 181, 'weight' => 95 , 'cap' => 'なし', 'category' => 'B'],
                ['id' => 48, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '笹倉 康誉', 'position' => 'FB/SO/CTB', 'birthday' => 1988, 'height' => 186, 'weight' => 90 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 49, 'team' => '埼玉パナソニックワイルドナイツ', 'name'=> '野口 竜司', 'position' => 'FB/WTB', 'birthday' => 1995, 'height' => 177, 'weight' => 83 , 'cap' => 'あり', 'category' => 'A'],
            ]);
    }
}
