<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSkus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_skus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->nullable(false)->comment('产品Id')->index();
            $table->string('name')->nullable(false)->comment('sku名称')->index();
            $table->string('img')->comment('主图');
            $table->decimal('price',8,2)->nullable(false)->comment('价格');
            $table->integer('stock')->nullable(false)->comment('库存');
            $table->string('code')->comment('产品编码');
            $table->string('data')->comment('sku串');
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
        Schema::dropIfExists('product_skus');
    }
}
