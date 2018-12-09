<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttributeAndOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_attribute_and_options', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sku_id')->unsigned()->nullable(false)->comment('产品SKU_Id')->index();
            $table->integer('attribute_id')->unsigned()->nullable(false)->comment('属性Id')->index();
            $table->integer('option_id')->unsigned()->nullable(false)->comment('属性选项Id')->index();
            $table->integer('sort')->default(999)->comment('排序');
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
        Schema::dropIfExists('product_attribute_and_options');
    }
}
