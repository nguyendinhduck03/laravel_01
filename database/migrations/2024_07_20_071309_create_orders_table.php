<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name_user', 255);
            $table->string('email_user', 255);
            $table->string('number_user', 255);
            $table->string('address_user', 255);
            $table->date('day');
            $table->double('order_amount', 11, 2);
            $table->string('note', 255);
            $table->unsignedBigInteger('payment_method_id')->default(1);
            $table->unsignedBigInteger('status_order_id')->default(1);
            $table->softDeletes();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');
            $table->foreign('status_order_id')->references('id')->on('status_orders')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
