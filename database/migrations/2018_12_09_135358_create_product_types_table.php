<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false)->comment('产品分类名称')->index();
            $table->string('cover')->comment('封面图');
            $table->tinyInteger('index_block_status')->default(0)->comment('首页块级状态 1=>显示');
            $table->tinyInteger('status')->default(1)->comment('状态 1=>正常');
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
        Schema::dropIfExists('product_types');
    }
}
