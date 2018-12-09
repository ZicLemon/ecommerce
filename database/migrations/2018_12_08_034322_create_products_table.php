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
            $table->string('name')->nullable(false)->comment('产品名称')->index();
            $table->integer('category_id')->unsigned()->nullable(false)->comment('产品分类')->index();
            $table->integer('type_id')->unsigned()->nullable(false)->comment('类别')->index();
            $table->string('sketch')->comment('简述');
            $table->text('intro')->comment('产品描述');
            $table->string('keywords')->comment('关键词');
            $table->string('tags')->comment('标签');
            $table->decimal('price',8,2)->nullable(false)->comment('价格');
            $table->decimal('market_price',8,2)->nullable(false)->comment('市场价格');
            $table->integer('stock')->nullable(false)->comment('库存量');
            $table->integer('warning_stock')->nullable(false)->comment('库存警告');
            $table->string('picture_url')->nullable(false)->comment('封面图');
            $table->string('posters')->comment('海报');
            $table->tinyInteger('status')->nullable(false)->comment('状态 -1=>下架,1=>上架,2=>预售,0=>未上架');
            $table->tinyInteger('state')->nullable(false)->comment('审核状态 -1 审核失败 0 未审核 1 审核成功');
            $table->integer('sort')->default(99)->comment('排序');
            $table->dateTime('deleted_at');
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
