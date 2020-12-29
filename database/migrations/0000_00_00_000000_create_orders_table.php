<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->integer('uid', 11);

            $table->string('user_uname', 50)->nullable();

            $table->string('user_realname', 50)->nullable();

            $table->tinyInteger('user_type')->default(0);

            $table->tinyInteger('user_is_contract')->default(0);

            $table->tinyInteger('type')->nullable();

            $table->string('order_no', 32);

            $table->tinyInteger('pay_status');

            $table->double('sum_money', 10,2);

            $table->double('money', 10,2);

            $table->string('currency_code', 3)->nullable();

            $table->dateTime('pay_time')->nullable();

            $table->dateTime('created_at')->nullable();

            $table->dateTime('updated_at')->nullable();

            $table->tinyInteger('pay_type')->nullable();

            $table->string('trade_no', 50)->nullable();

            $table->integer('status')->default(0);

            $table->integer('is_test')->default(0);


            $table->index(['uid']);

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
