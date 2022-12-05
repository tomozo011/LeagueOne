<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuntorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suntories')->insert([
            // PR
                ['id' => 1, 'team' => '東京サントリーサンゴリアス', 'name'=> '石原 慎太郎', 'position' => 'PR', 'birthday' => 1990, 'height' => 181, 'weight' => 109 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 2, 'team' => '東京サントリーサンゴリアス', 'name'=> '垣永 真之介', 'position' => 'PR', 'birthday' => 1991, 'height' => 180, 'weight' => 115 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 3, 'team' => '東京サントリーサンゴリアス', 'name'=> '森川 由起乙', 'position' => 'PR', 'birthday' => 1993, 'height' => 180, 'weight' => 113 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 4, 'team' => '東京サントリーサンゴリアス', 'name'=> '須藤 元樹', 'position' => 'PR', 'birthday' => 1994, 'height' => 173, 'weight' => 110 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 5, 'team' => '東京サントリーサンゴリアス', 'name'=> '祝原 涼介', 'position' => 'PR', 'birthday' => 1996, 'height' => 184, 'weight' => 115 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 6, 'team' => '東京サントリーサンゴリアス', 'name'=> '中野 幹', 'position' => 'PR', 'birthday' => 1997, 'height' => 177, 'weight' => 112 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 7, 'team' => '東京サントリーサンゴリアス', 'name'=> '小林 賢太', 'position' => 'PR', 'birthday' => 1999, 'height' => 181, 'weight' => 115 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 8, 'team' => '東京サントリーサンゴリアス', 'name'=> '細木 康太郎', 'position' => 'PR', 'birthday' => 2000, 'height' => 178, 'weight' => 115 , 'cap' => 'なし', 'category' => 'A'],
            // HO
                ['id' => 9, 'team' => '東京サントリーサンゴリアス', 'name'=> '中村 駿太', 'position' => 'HO', 'birthday' => 1994, 'height' => 176, 'weight' => 98 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 10, 'team' => '東京サントリーサンゴリアス', 'name'=> '桶谷 宗汰', 'position' => 'HO', 'birthday' => 1994, 'height' => 175, 'weight' => 97 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 11, 'team' => '東京サントリーサンゴリアス', 'name'=> '堀越 康介', 'position' => 'HO', 'birthday' => 1995, 'height' => 175, 'weight' => 98 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 12, 'team' => '東京サントリーサンゴリアス', 'name'=> '呉 季依典', 'position' => 'HO', 'birthday' => 1996, 'height' => 177, 'weight' => 104 , 'cap' => 'なし', 'category' => 'A'],
            // LO
                ['id' => 13, 'team' => '東京サントリーサンゴリアス', 'name'=> '小林 航', 'position' => 'LO', 'birthday' => 1994, 'height' => 196, 'weight' => 115 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 14, 'team' => '東京サントリーサンゴリアス', 'name'=> '飯野 晃司', 'position' => 'LO', 'birthday' => 1994, 'height' => 190, 'weight' => 110 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 15, 'team' => '東京サントリーサンゴリアス', 'name'=> '辻 雄康', 'position' => 'LO', 'birthday' => 1995, 'height' => 190, 'weight' => 114 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 16, 'team' => '東京サントリーサンゴリアス', 'name'=> 'トム サベッジ', 'position' => 'LO', 'birthday' => 1989, 'height' => 196, 'weight' => 116 , 'cap' => 'なし', 'category' => 'B'],
                ['id' => 17, 'team' => '東京サントリーサンゴリアス', 'name'=> 'ハリー ホッキングス', 'position' => 'LO', 'birthday' => 1998, 'height' => 208, 'weight' => 123 , 'cap' => 'なし', 'category' => 'B'],
                ['id' => 18, 'team' => '東京サントリーサンゴリアス', 'name'=> '片倉 康瑛', 'position' => 'LO', 'birthday' => 1998, 'height' => 190, 'weight' => 110 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 19, 'team' => '東京サントリーサンゴリアス', 'name'=> 'カラム マクドナルド', 'position' => 'LO', 'birthday' => 2000, 'height' => 204, 'weight' => 120 , 'cap' => 'なし', 'category' => 'B'],
            // FL
                ['id' => 20, 'team' => '東京サントリーサンゴリアス', 'name'=> '小澤 直輝', 'position' => 'FL/No.8', 'birthday' => 1988, 'height' => 181, 'weight' => 102 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 21, 'team' => '東京サントリーサンゴリアス', 'name'=> 'ツイ ヘンドリック', 'position' => 'FL/No.8', 'birthday' => 1987, 'height' => 189, 'weight' => 109 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 22, 'team' => '東京サントリーサンゴリアス', 'name'=> 'ショーン マクマーン', 'position' => 'FL/No.8', 'birthday' => 1994, 'height' => 186, 'weight' => 102 , 'cap' => 'なし', 'category' => 'C'],
                ['id' => 23, 'team' => '東京サントリーサンゴリアス', 'name'=> 'テビタ タタフ', 'position' => 'FL/No.8', 'birthday' => 1996, 'height' => 183, 'weight' => 127 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 24, 'team' => '東京サントリーサンゴリアス', 'name'=> '箸本 龍雅', 'position' => 'FL/No.8', 'birthday' => 1998, 'height' => 188, 'weight' => 107 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 25, 'team' => '東京サントリーサンゴリアス', 'name'=> '下川 甲嗣', 'position' => 'FL/No.8', 'birthday' => 1999, 'height' => 189, 'weight' => 106 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 26, 'team' => '東京サントリーサンゴリアス', 'name'=> 'トム サンダース', 'position' => 'FL/No.8', 'birthday' => 1994, 'height' => 190, 'weight' => 110 , 'cap' => 'なし', 'category' => 'B'],
                ['id' => 27, 'team' => '東京サントリーサンゴリアス', 'name'=> '山本 凱', 'position' => 'FL/No.8', 'birthday' => 2000, 'height' => 177, 'weight' => 100 , 'cap' => 'なし', 'category' => 'A'],
            // SH
                ['id' => 28, 'team' => '東京サントリーサンゴリアス', 'name'=> '流 大', 'position' => 'SH', 'birthday' => 1992, 'height' => 166, 'weight' => 75 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 29, 'team' => '東京サントリーサンゴリアス', 'name'=> '大越 元気', 'position' => 'SH', 'birthday' => 1994, 'height' => 162, 'weight' => 70 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 30, 'team' => '東京サントリーサンゴリアス', 'name'=> '齋藤 直人', 'position' => 'SH', 'birthday' => 1997, 'height' => 165, 'weight' => 75 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 31, 'team' => '東京サントリーサンゴリアス', 'name'=> '木村 貴大', 'position' => 'SH', 'birthday' => 1993, 'height' => 173, 'weight' => 82 , 'cap' => 'なし', 'category' => 'A'],
            // SO    
                ['id' => 32, 'team' => '東京サントリーサンゴリアス', 'name'=> '田村 熙', 'position' => 'SO', 'birthday' => 1993, 'height' => 170, 'weight' => 80 , 'cap' => 'なし', 'category' => 'A'],    
                ['id' => 33, 'team' => '東京サントリーサンゴリアス', 'name'=> 'アーロン クルーデン', 'position' => 'SO', 'birthday' => 1989, 'height' => 175, 'weight' => 82 , 'cap' => 'なし', 'category' => 'C'],
            // WTB    
                ['id' => 34, 'team' => '東京サントリーサンゴリアス', 'name'=> '中靍 隆彰', 'position' => 'WTB', 'birthday' => 1990, 'height' => 177, 'weight' => 84 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 35, 'team' => '東京サントリーサンゴリアス', 'name'=> '江見 翔太', 'position' => 'WTB', 'birthday' => 1991, 'height' => 182, 'weight' => 95 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 36, 'team' => '東京サントリーサンゴリアス', 'name'=> 'テビタ リー', 'position' => 'WTB', 'birthday' => 1995, 'height' => 182, 'weight' => 98 , 'cap' => 'なし', 'category' => 'B'],
                ['id' => 37, 'team' => '東京サントリーサンゴリアス', 'name'=> '仁熊 秀斗', 'position' => 'WTB', 'birthday' => 1998, 'height' => 172, 'weight' => 85 , 'cap' => 'なし', 'category' => 'A'],
            // CTB
                ['id' => 38, 'team' => '東京サントリーサンゴリアス', 'name'=> '中村 亮土', 'position' => 'CTB', 'birthday' => 1991, 'height' => 182, 'weight' => 92 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 39, 'team' => '東京サントリーサンゴリアス', 'name'=> 'サム ケレビ', 'position' => 'CTB', 'birthday' => 1993, 'height' => 187, 'weight' => 110 , 'cap' => 'なし', 'category' => 'B'],
                ['id' => 40, 'team' => '東京サントリーサンゴリアス', 'name'=> '中野 将伍', 'position' => 'CTB', 'birthday' => 1997, 'height' => 186, 'weight' => 98 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 41, 'team' => '東京サントリーサンゴリアス', 'name'=> '尾﨑 泰雅', 'position' => 'CTB', 'birthday' => 1998, 'height' => 184, 'weight' => 93 , 'cap' => 'なし', 'category' => 'A'],
            // FB
                ['id' => 42, 'team' => '東京サントリーサンゴリアス', 'name'=> '塚本 健太', 'position' => 'FB', 'birthday' => 1990, 'height' => 176, 'weight' => 84 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 43, 'team' => '東京サントリーサンゴリアス', 'name'=> '尾﨑 晟也', 'position' => 'FB', 'birthday' => 1995, 'height' => 174, 'weight' => 84 , 'cap' => 'あり', 'category' => 'A'],
                ['id' => 44, 'team' => '東京サントリーサンゴリアス', 'name'=> '雲山 弘貴', 'position' => 'FB', 'birthday' => 1999, 'height' => 184, 'weight' => 93 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 45, 'team' => '東京サントリーサンゴリアス', 'name'=> '河瀬 諒介', 'position' => 'FB', 'birthday' => 1999, 'height' => 183, 'weight' => 89 , 'cap' => 'なし', 'category' => 'A'],
                ['id' => 46, 'team' => '東京サントリーサンゴリアス', 'name'=> '松島 幸太朗', 'position' => 'FB', 'birthday' => 1993, 'height' => 178, 'weight' => 87 , 'cap' => 'なし', 'category' => 'A'],
            ]);
    }
}
