<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Order::class, 5)->create();
      DB::table('orders')->insert([
        [
          'amount' =>2,
          'id' =>2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'amount' =>2,
          'id' =>2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'book_name' =>2,
          'id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
      ]);

}
