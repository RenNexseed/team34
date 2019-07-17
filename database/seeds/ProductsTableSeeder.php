<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Seederにデータ入れる際の注意点
        // 'name'は長くし過ぎない
        // ’description’は実際のサイトを参考にして実際にありそうな詳細説明をつける
        // 'category'はすでに決められた10個から選び入れる
        // 'price'は型がIntなので整数で入れて""をつけてはいけない
        // 'picture_path''created_at''updated_at'は書き方を真似する

      \DB::table('products')->insert([
        [
            'name'    => '男性用シャツ',
            'description' => "シンプルなカラーと薄く軽い生地が人気のシャツ。派手過ぎず他のファッションと合わせやすい人気アイテム。",
            'category' => "シャツ",
            'price' => 3500,
            'picture_path' => "images/shirt01.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ],
        [
            'name'    => '男性用シャツ',
            'description' => "シンプルなカラーと薄く軽い生地が人気のシャツ。派手過ぎず他のファッションと合わせやすい人気アイテム。",
            'category' => "シャツ",
            'price' => 3500,
            'picture_path' => "images/shirt02.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用シャツ',
            'description' => "シンプルなカラーと薄く軽い生地が人気のシャツ。派手過ぎず他のファッションと合わせやすい人気アイテム。",
            'category' => "シャツ",
            'price' => 3500,
            'picture_path' => "images/shirt03.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用シャツ',
            'description' => "シンプルなカラーと薄く軽い生地が人気のシャツ。派手過ぎず他のファッションと合わせやすい人気アイテム。",
            'category' => "シャツ",
            'price' => 3500,
            'picture_path' => "images/shirt04.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name'    => '男性用スーツ',
            'description' => "心地よい肌触りの生地と軽さを兼ね備えた大人気スーツ。暑い夏にも外で着やすい当店の人気アイテム。",
            'category' => "ジャケット",
            'price' => 15000,
            'picture_path' => "images/jacket01.jpg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
    ]);
    }
}
