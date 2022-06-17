<?php

use Illuminate\Database\Seeder;
use App\Prefecture;

class PrefectureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*hokkaidou,tohoku*/
         Prefecture::create([
            'prefecture' => '北海道',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '青森',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '秋田',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '岩手',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '山形',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '宮城',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '福島',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        /*kantou*/
        Prefecture::create([
            'prefecture' => '群馬',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        
        Prefecture::create([
            'prefecture' => '栃木',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '茨城',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '埼玉',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '千葉',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '東京',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '神奈川',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        /*chubu*/
        
        Prefecture::create([
            'prefecture' => '新潟',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '富山',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '石川',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '福井',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '長野',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '岐阜',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '山梨',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '愛知',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '静岡',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        /*kinki*/
        
        Prefecture::create([
            'prefecture' => '京都',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '滋賀',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '大阪',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '奈良',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '三重',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '和歌山',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '兵庫',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        /*chugoku*/
        
        Prefecture::create([
            'prefecture' => '鳥取',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '岡山',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '島根',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Prefecture::create([
            'prefecture' => '広島',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '山口',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        /*shikoku*/ 
        
        Prefecture::create([
            'prefecture' => '香川',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '愛媛',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '徳島',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '高知',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        /*Kyushu, okinawa*/ 
        
        Prefecture::create([
            'prefecture' => '福岡',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '佐賀',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '長崎',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '大分',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '熊本',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '宮崎',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '鹿児島',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Prefecture::create([
            'prefecture' => '沖縄',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
    }
}
