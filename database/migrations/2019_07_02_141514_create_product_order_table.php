<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_order', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('product_id');
        $table->integer('order_id');
        $table->integer('price');
        $table->integer('amount');
        $table->timestamps();

      $table->primary('id');
      $table->unsignedInteger('product_id');
      $table->unsignedInteger('order_id');
      $table->integer('price');
    $table->integer('amount');
      $table->timestamps();

      $table->index('product_id');
      $table->index('order_id');

      $table->foreign('product_id')
            ->references('id')
            ->on('facilities')
            ->onDelete('cascade')
            ->onUpdate('cascade');

      $table->foreign('order_id')
            ->references('id')
            ->on('shops')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_order');
    }
}
