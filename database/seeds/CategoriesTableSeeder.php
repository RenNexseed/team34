<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
          [
            'category_name' => 'Tシャツ',
            'category_type' => 1,
          ],
          [
            'category_name' => 'アウター',
            'category_type' => 1,
          ],
          [
            'category_name' => 'シャツ',
            'category_type' => 1,
          ],
          [
            'category_name' => 'ジャケット',
            'category_type' => 1,
          ],
          [
            'category_name' => 'ズボン',
            'category_type' => 1,
          ],
          [
            'category_name' => 'Tシャツ',
            'category_type' => 2,
          ],
          [
            'category_name' => 'ワンピース',
            'category_type' => 2,
          ],
          [
            'category_name' => 'スカート',
            'category_type' => 2,
          ],
          [
            'category_name' => 'ニット',
            'category_type' => 2,
          ],
          [
            'category_name' => 'ジーンズ',
            'category_type' => 2,
          ],
      ]);
    }
}
