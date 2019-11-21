<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title');
            $table->string('h1');
            $table->string('slug');
            $table->string('breadcrumbs_label');
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('photo');
            $table->string('gallery')->nullable();
            $table->string('technical_drawing')->nullable();
            $table->string('price');
            $table->string('category_id');
            $table->text('content')->nullable();
            $table->text('characteristics')->nullable();
            $table->string('sku');
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
