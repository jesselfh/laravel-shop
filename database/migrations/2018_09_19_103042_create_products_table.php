<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title'); //商品名称
            $table->text('description');
            $table->string('image');
            $table->boolean('on_sale')->default(true); //商品是否在售卖
            $table->float('rating')->default(5); //商品平均评分
            $table->unsignedInteger('sold_count')->default(0); //销量
            $table->unsignedInteger('review_count')->default(0);
            $table->decimal('price', 10, 2); //SKU最低价格（本身没有固定价格，在这里放置 price 的目的是方便搜索和排序）
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
