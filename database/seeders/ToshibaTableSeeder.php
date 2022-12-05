<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToshibaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('toshibas')->insert([
            // PR
                ['id' => 1, 'team' => '東芝ブレイブルーパス東京', 'name'=> '三上 正貴', 'position' => 'PR', 'birthday' => 1988, 'height' => 178, 'weight' => 110 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 2, 'team' => '東芝ブレイブルーパス東京', 'name'=> '金 寛泰', 'position' => 'PR', 'birthday' => 1992, 'height' => 175, 'weight' => 109 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 3, 'team' => '東芝ブレイブルーパス東京', 'name'=> '藤野 佑磨', 'position' => 'PR', 'birthday' => 1995, 'height' => 181, 'weight' => 112 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 4, 'team' => '東芝ブレイブルーパス東京', 'name'=> '眞壁 照男', 'position' => 'PR', 'birthday' => 1996, 'height' => 172, 'weight' => 111 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 5, 'team' => '東芝ブレイブルーパス東京', 'name'=> '小鍜治 悠太', 'position' => 'PR', 'birthday' => 1998, 'height' => 177, 'weight' => 113 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 6, 'team' => '東芝ブレイブルーパス東京', 'name'=> '木村 星南', 'position' => 'PR', 'birthday' => 1999, 'height' => 175, 'weight' => 105 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 7, 'team' => '東芝ブレイブルーパス東京', 'name'=> 'タウファ・ラトゥ', 'position' => 'PR', 'birthday' => 1998, 'height' => 183, 'weight' => 120 , 'cap' => 'なし', 'category' => 'B'],
            // HO
                ['id' => 8, 'team' => '東芝ブレイブルーパス東京', 'name'=> '森 太志', 'position' => 'HO', 'birthday' => 1988, 'height' => 175, 'weight' => 100 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 9, 'team' => '東芝ブレイブルーパス東京', 'name'=> '橋本 大吾', 'position' => 'HO', 'birthday' => 1994, 'height' => 175, 'weight' => 106 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 10, 'team' => '東芝ブレイブルーパス東京', 'name'=> '大内 真', 'position' => 'HO', 'birthday' => 1997, 'height' => 182, 'weight' => 107 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 11, 'team' => '東芝ブレイブルーパス東京', 'name'=> '原田 衛', 'position' => 'HO', 'birthday' => 1999, 'height' => 177, 'weight' => 102 , 'cap' => 'なし', 'category' => 'A'],
            // LO    
                ['id' => 12, 'team' => '東芝ブレイブルーパス東京', 'name'=> '梶川 喬介', 'position' => 'LO', 'birthday' => 1987, 'height' => 190, 'weight' => 110 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 13, 'team' => '東芝ブレイブルーパス東京', 'name'=> 'ヒュー・パイル', 'position' => 'LO', 'birthday' => 1988, 'height' => 201, 'weight' => 115 , 'cap' => 'なし', 'category' => 'B'],
                ['id' => 14, 'team' => '東芝ブレイブルーパス東京', 'name'=> '伊藤 鐘平', 'position' => 'LO', 'birthday' => 1997, 'height' => 190, 'weight' => 106 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 15, 'team' => '東芝ブレイブルーパス東京', 'name'=> 'ジェイコブ・ピアス', 'position' => 'LO', 'birthday' => 1997, 'height' => 201, 'weight' => 106 , 'cap' => 'なし', 'category' => 'B'],
                ['id' => 16, 'team' => '東芝ブレイブルーパス東京', 'name'=> '高城 勝一', 'position' => 'LO', 'birthday' => 1997, 'height' => 196, 'weight' => 101 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 17, 'team' => '東芝ブレイブルーパス東京', 'name'=> 'ワーナー・ディアンズ', 'position' => 'LO', 'birthday' => 2002, 'height' => 202, 'weight' => 124 , 'cap' => 'あり', 'category' => 'A'],
            // FL
                ['id' => 18, 'team' => '東芝ブレイブルーパス東京', 'name'=> 'マット・トッド', 'position' => 'FL', 'birthday' => 1988, 'height' => 185, 'weight' => 104 , 'cap' => 'なし', 'category' => 'C'],
                ['id' => 19, 'team' => '東芝ブレイブルーパス東京', 'name'=> '李 聖彰', 'position' => 'FL', 'birthday' => 1991, 'height' => 187, 'weight' => 103 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 20, 'team' => '東芝ブレイブルーパス東京', 'name'=> '山本 浩輝', 'position' => 'FL', 'birthday' => 1992, 'height' => 187, 'weight' => 102 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 21, 'team' => '東芝ブレイブルーパス東京', 'name'=> '藤田 貴大', 'position' => 'FL', 'birthday' => 1993, 'height' => 176, 'weight' => 95 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 22, 'team' => '東芝ブレイブルーパス東京', 'name'=> '佐々木 剛', 'position' => 'FL', 'birthday' => 1997, 'height' => 180, 'weight' => 98 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 23, 'team' => '東芝ブレイブルーパス東京', 'name'=> 'リーチ マイケル', 'position' => 'No.8', 'birthday' => 1988, 'height' => 188, 'weight' => 115 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 24, 'team' => '東芝ブレイブルーパス東京', 'name'=> '德永 祥尭', 'position' => 'No.8', 'birthday' => 1992, 'height' => 185, 'weight' => 105 , 'cap' => 'あり', 'category' => 'A'],
                // SH
                ['id' => 25, 'team' => '東芝ブレイブルーパス東京', 'name'=> '小川 高廣', 'position' => 'SH', 'birthday' => 1991, 'height' => 170, 'weight' => 77 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 26, 'team' => '東芝ブレイブルーパス東京', 'name'=> '辰野　新之介', 'position' => 'SH', 'birthday' => 1991, 'height' => 175, 'weight' => 75 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 27, 'team' => '東芝ブレイブルーパス東京', 'name'=> 'ジャック・ストラトン', 'position' => 'SH', 'birthday' => 1994, 'height' => 185, 'weight' => 91 , 'cap' => 'なし', 'category' => 'B'],
                ['id' => 28, 'team' => '東芝ブレイブルーパス東京', 'name'=> '髙橋 昴平', 'position' => 'SH', 'birthday' => 1996, 'height' => 167, 'weight' => 80 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 29, 'team' => '東芝ブレイブルーパス東京', 'name'=> '杉山 優平', 'position' => 'SH', 'birthday' => 1997, 'height' => 169, 'weight' => 76 , 'cap' => 'なし', 'category' => 'A'],
            // SO
                ['id' => 30, 'team' => '東芝ブレイブルーパス東京', 'name'=> 'トム・テイラー', 'position' => 'SO', 'birthday' => 1989, 'height' => 186, 'weight' => 90 , 'cap' => 'なし', 'category' => 'C'],
                ['id' => 31, 'team' => '東芝ブレイブルーパス東京', 'name'=> '中尾 隼太', 'position' => 'SO', 'birthday' => 1995, 'height' => 176, 'weight' => 89 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 32, 'team' => '東芝ブレイブルーパス東京', 'name'=> '松永 拓朗', 'position' => 'SO', 'birthday' => 1998, 'height' => 172, 'weight' => 82 , 'cap' => 'なし', 'category' => 'A'],
            // CTB
                ['id' => 33, 'team' => '東芝ブレイブルーパス東京', 'name'=> 'セタ・タマニバル', 'position' => 'CTB', 'birthday' => 1992, 'height' => 189, 'weight' => 112 , 'cap' => 'なし', 'category' => 'C'],
                ['id' => 34, 'team' => '東芝ブレイブルーパス東京', 'name'=> 'ニコラス・マクカラン', 'position' => 'CTB', 'birthday' => 1996, 'height' => 189, 'weight' => 94 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 35, 'team' => '東芝ブレイブルーパス東京', 'name'=> '眞野 泰地', 'position' => 'CTB', 'birthday' => 1997, 'height' => 173, 'weight' => 87 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 36, 'team' => '東芝ブレイブルーパス東京', 'name'=> '森 勇登', 'position' => 'CTB', 'birthday' => 1998, 'height' => 174, 'weight' => 85 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 37, 'team' => '東芝ブレイブルーパス東京', 'name'=> '児玉 樹', 'position' => 'CTB', 'birthday' => 1999, 'height' => 192, 'weight' => 103 , 'cap' => 'なし', 'category' => 'A'],
            // WTB
                ['id' => 38, 'team' => '東芝ブレイブルーパス東京', 'name'=> '松延 泰樹', 'position' => 'WTB', 'birthday' => 1990, 'height' => 186, 'weight' => 90 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 39, 'team' => '東芝ブレイブルーパス東京', 'name'=> '松岡 久善', 'position' => 'WTB', 'birthday' => 1992, 'height' => 182, 'weight' => 86 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 40, 'team' => '東芝ブレイブルーパス東京', 'name'=> 'ジョネ・ナイカブラ', 'position' => 'WTB', 'birthday' => 1994, 'height' => 177, 'weight' => 92 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 41, 'team' => '東芝ブレイブルーパス東京', 'name'=> '濵田 将暉', 'position' => 'WTB', 'birthday' => 1996, 'height' => 175, 'weight' => 80 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 42, 'team' => '東芝ブレイブルーパス東京', 'name'=> '桑山 淳生', 'position' => 'WTB', 'birthday' => 1997, 'height' => 183, 'weight' => 92 , 'cap' => 'なし', 'category' => 'A'],
            //FB  
                ['id' => 43, 'team' => '東芝ブレイブルーパス東京', 'name'=> '豊島 翔平', 'position' => 'FB', 'birthday' => 1989, 'height' => 175, 'weight' => 85 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 44, 'team' => '東芝ブレイブルーパス東京', 'name'=> '桑山 聖生', 'position' => 'FB', 'birthday' => 1996, 'height' => 184, 'weight' => 95 , 'cap' => 'なし', 'category' => 'A'],
        ]);
    }
}
