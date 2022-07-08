<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' =>'精進カフェ宙',
            'body'=>'精進カフェ宙では、肉・魚・卵・乳製品、五葷（ニンニク・ニラ・タマネギ・ラッキョウ・アサツキ）を使わない植物素材だけで作ったカジュアルな精進料理をお出ししています。
オーガニックや無添加の調味料で心を込めて丁寧に作ったお料理を提供。。健康的で、安心・安全なお食事でおもてなしをさせていただきます。
一人で運営しているため、お待たせするときもございます。ゆとりのある時間でお越しいただき、ご予約後のご来店にご協力ください。
【営業日】
 不定休（基本月曜日はお休み、その他月に数日お休みいたします）
11時オープン14時ラストオーダー
◆営業日のお知らせはSNS投稿でお知らせしています。
　下記より営業日をご確認いただきご予約後のご来店に協力ください。
TEL 087-808-8800
OPEN  11:00〜15:00(ラストオーダー14:00）      

CLOSE 毎週月曜日＋数日
ホームページ
　https://shoujinn-cafe-sora.jimdofree.com/
〒761-0121 香川県高松市牟礼町牟礼2500-2',
            'picture_url'=>'https://image.jimcdn.com/app/cms/image/transf/dimension=540x10000:format=jpg/path/s2f1477a4925778ee/image/id3a0469aa6390280/version/1477313374/image.jpg',
            'restaurant_id'=>'11',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Post::create([
            'title'=>'筋肉食堂',
            'body'=>'〒106-0032 東京都港区六本木7-8-5
TEL：03-6434-0293
■営業時間
月～金：ランチ 11:30〜15:00(14:30LO)
ディナー 17:30〜23:00
(フード22:00LO/ドリンク22:30LO)

土　　：11:30〜23:00
(フード22:00LO/ドリンク22:30LO)

日・祝：11:30〜20:30(フード＆ドリンク20:00LO)
ホームページ　http://kinnikushokudo.jp/shoplist.html',
            'picture_url'=>'http://kinnikushokudo.jp/images/logo_s.png',
            'restaurant_id'=>'33',
            'created_at'=>now(),
            'updated_at'=>now(),

            ]);
    }
}
