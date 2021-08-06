<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('outlet_id')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('city')->nullable();
            $table->string('shipping_charge')->nullable();
            $table->string('shipping_address')->nullable();
            $table->string('note')->nullable();
            $table->double('amount');
            $table->double('discount_amount')->default(0);
            $table->double('amount_after_discount')->default(0);
            $table->double('payble_amount');
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->enum('paid_by', ['Cash', 'Online']);
            $table->json('payment_initiation_server_response')->nullable();
            $table->json('payment_validation_server_response')->nullable();
            $table->enum('order_status', ['Pending', 'OnProcess','Shipped', 'Delivered', 'Cancelled'])->default('Pending');
            $table->enum('payment_status', ['Pending', 'Success'])->default('Pending');
            $table->boolean('is_delivered')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
