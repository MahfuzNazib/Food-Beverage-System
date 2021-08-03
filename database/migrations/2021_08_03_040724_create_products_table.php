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
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->string('name');
            $table->string('thumbnail');
            $table->double('qnty');
            $table->string('slug');
            $table->double('price');
            $table->double('offer_price')->nullable();
            $table->text('short_description');
            $table->text('description');
            $table->text('specification')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('offer_status')->default(false);
            $table->unsignedBigInteger('offer_id')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
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
